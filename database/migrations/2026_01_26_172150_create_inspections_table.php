<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inspection_type_id')
                ->constrained('inspection_types')
                ->onDelete('restrict');
            $table->foreignId('activity_id')
                ->nullable()
                ->constrained('activities')
                ->onDelete('set null');
            $table->foreignId('location_id')
                ->constrained('locations')
                ->onDelete('restrict');
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');
            $table->integer('mes'); // 1-12
            $table->integer('anio');
            $table->date('fecha_programada');
            $table->date('fecha_ejecutada')->nullable();
            $table->enum('estado', ['pendiente', 'conforme', 'no_conforme', 'vencido'])->default('pendiente');
            $table->boolean('archivo_detectado')->default(false);
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};