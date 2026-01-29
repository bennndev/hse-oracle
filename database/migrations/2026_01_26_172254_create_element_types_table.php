<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('element_types', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->text('descripcion')->nullable();
            
            // Conexión con el bloque de Capacitación
            $table->foreignId('training_id')->nullable()->constrained('trainings');
    
            // Conexión con el bloque de Inspección (si ya tienes la tabla)
            $table->foreignId('inspection_id')->nullable()->constrained('inspections');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('element_types');
    }
};