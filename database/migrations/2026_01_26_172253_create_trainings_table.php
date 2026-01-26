<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id')
                ->nullable()
                ->constrained('activities')
                ->onDelete('set null');
            $table->string('titulo', 255);
            $table->text('descripcion')->nullable();
            $table->string('url_video', 500)->nullable();
            $table->integer('nota_minima')->default(70);
            $table->enum('estado', ['borrador', 'publicada', 'finalizada'])->default('borrador');
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->decimal('duracion_horas', 4, 2)->nullable();
            $table->foreignId('instructor_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};