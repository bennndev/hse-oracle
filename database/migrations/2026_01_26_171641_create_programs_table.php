<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 50)->unique();
            $table->string('version', 10);
            $table->text('obj_general')->nullable();
            $table->string('autor', 150)->nullable();
            $table->date('fecha_emision')->nullable();
            $table->date('fecha_edicion')->nullable();
            $table->date('fecha_revision')->nullable();
            $table->foreignId('supervisor_id')
                ->nullable()
                ->constrained('supervisors')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};