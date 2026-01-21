#!/bin/sh
set -e

# Ensure storage directories exist and are writable
mkdir -p /var/www/html/storage/framework/cache/data
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/app/public
mkdir -p /var/www/html/storage/logs

# Fix permissions if needed (optional, depending on how volumes are mounted)
# chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

exec "$@"
