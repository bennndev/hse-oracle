<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->id(); // id_elemento
            
            // Relaciones principales
            $table->foreignId('program_id')->constrained('programs')->onDelete('cascade');
            $table->foreignId('element_type_id')->constrained('element_types')->onDelete('restrict');
            
            // Las 3 conexiones que centralizan tu diagrama
            $table->foreignId('specific_objective_id')->nullable()->constrained('specific_objectives');
            $table->foreignId('sub_element_id')->nullable()->constrained('sub_elements');
            $table->foreignId('activity_id')->nullable()->constrained('activities');

            $table->string('nombre', 200);
            $table->text('descripcion')->nullable();
            $table->integer('orden')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('elements');
    }
};