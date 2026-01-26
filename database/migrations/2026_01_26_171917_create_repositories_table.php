<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('repositories', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->string('url', 500)->nullable();
            $table->enum('estado', ['vacio', 'lleno', 'pendiente'])->default('vacio');
            $table->date('fecha_creacion')->nullable();
            
            // Polimórfico
            $table->string('repositoriable_type', 50);
            $table->unsignedBigInteger('repositoriable_id');
            
            $table->boolean('esta_llena')->default(false);
            $table->timestamp('ultima_verificacion')->nullable();
            
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');
            
            $table->timestamps();
            
            // Índice para búsquedas polimórficas
            $table->index(['repositoriable_type', 'repositoriable_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('repositories');
    }
};