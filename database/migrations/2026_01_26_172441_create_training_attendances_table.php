<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('training_attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('training_id')
                ->constrained('trainings')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_fin')->nullable();
            $table->text('firma_digital')->nullable(); // Base64 canvas
            $table->enum('estado', ['pendiente', 'en_progreso', 'completado', 'reprobado'])->default('pendiente');
            $table->boolean('aprobado')->default(false);
            $table->string('certificado_url', 500)->nullable();
            $table->timestamps();
            
            // Un usuario solo puede tomar una vez cada capacitación
            $table->unique(['training_id', 'user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('training_attendances');
    }
};