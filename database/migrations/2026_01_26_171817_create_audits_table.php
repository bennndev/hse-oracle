<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id')
                ->constrained('activities')
                ->onDelete('cascade');
            $table->string('nombre', 255);
            $table->text('descripcion')->nullable();
            $table->enum('tipo', ['interna', 'externa', 'verificacion'])->default('interna');
            $table->integer('mes')->nullable(); // 1-12
            $table->integer('anio')->nullable();
            $table->date('fecha')->nullable();
            $table->enum('estado', ['programado', 'ejecutado', 'no_ejecutado', 'parcial'])->default('programado');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audits');
    }
};