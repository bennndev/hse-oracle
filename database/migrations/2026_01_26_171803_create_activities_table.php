<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_element_id')
                ->constrained('sub_elements')
                ->onDelete('cascade');
            $table->string('codigo', 20)->unique(); // "1.1", "A.1", "3.5"
            $table->string('nombre', 255);
            $table->text('descripcion')->nullable();
            $table->enum('frecuencia', ['diario', 'semanal', 'mensual', 'trimestral', 'anual', 'cuando_requiera']);
            $table->decimal('meta', 5, 2)->default(100.00);
            $table->decimal('cumplimiento', 5, 2)->default(0.00);
            $table->boolean('es_obligatoria')->default(true);
            $table->foreignId('location_id')
                ->constrained('locations')
                ->onDelete('restrict');
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->onDelete('set null');
            $table->text('observacion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};