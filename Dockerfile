# Etapa 1: Node.js para compilar assets (si es necesario) o solo para proporcionar los binarios
FROM node:20.19.5-alpine AS node

# Etapa 2: Base PHP
FROM php:8.4.16-fpm-alpine AS base

# Instalar dependencias del sistema
RUN apk add --no-cache \
    nginx \
    supervisor \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    postgresql-dev \
    oniguruma-dev

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar binarios de Node.js desde la etapa node
COPY --from=node /usr/local/bin/node /usr/local/bin/node
COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
COPY --from=node /usr/local/bin/npm /usr/local/bin/npm
# Enlazar npm con node_modules
RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm-cli.js

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos de configuración
COPY .docker/nginx/default.conf /etc/nginx/http.d/default.conf
COPY .docker/php/local.ini /usr/local/etc/php/conf.d/local.ini
COPY .docker/supervisor.conf /etc/supervisord.conf
COPY .docker/entrypoint.sh /usr/local/bin/entrypoint.sh

# Hacer ejecutable el entrypoint
RUN chmod +x /usr/local/bin/entrypoint.sh

# Crear usuario de Laravel (opcional, pero buena práctica para mapear permisos si es necesario)
# Por simplicidad con Alpine y el uso estándar de Docker, a menudo se ejecuta como root o www-data.
# Nginx se ejecuta como usuario nginx por defecto en Alpine, PHP-FPM como www-data.
# Configuraremos Supervisor para ejecutarlos adecuadamente.

# Exponer puertos
EXPOSE 80

# Entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

# Comando para ejecutar supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
