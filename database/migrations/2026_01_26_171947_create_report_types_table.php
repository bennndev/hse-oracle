<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('report_types', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100); // "Charla 5 minutos", "ATS", "PETAR"
            $table->text('descripcion')->nullable();
            $table->enum('frecuencia_requerida', ['diario', 'semanal', 'mensual'])->default('diario');
            $table->boolean('es_obligatorio')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('report_types');
    }
};