<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inspection_types', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150); // "Botiquín", "Extintor", "EPP"
            $table->text('descripcion')->nullable();
            $table->enum('frecuencia', ['mensual', 'trimestral', 'semestral'])->default('mensual');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inspection_types');
    }
};