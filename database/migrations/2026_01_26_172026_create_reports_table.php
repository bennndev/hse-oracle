<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_type_id')
                ->constrained('report_types')
                ->onDelete('restrict');
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->date('fecha'); // Fecha del reporte
            $table->timestamp('fecha_subida')->nullable(); // Cuándo lo subió
            $table->enum('estado', ['pendiente', 'subido', 'vencido'])->default('pendiente');
            $table->boolean('archivo_detectado')->default(false);
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};