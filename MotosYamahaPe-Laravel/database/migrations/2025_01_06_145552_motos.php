<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->id(); // ID único de la moto
            $table->string('marca', 255); // Marca de la moto
            $table->string('modelo', 255); // Modelo de la moto
            $table->string('descripcion', 255); // Modelo de la moto
            $table->string('imagen_url', 255); // Modelo de la moto
            $table->boolean('disponible'); // Modelo de la moto
            $table->integer('año'); // Año de fabricación
            $table->decimal('precio', 10, 2);
            // $table->string('color', 50); // Color de la moto
            $table->string('tipo', 50); // Tipo de moto (deportiva, cruiser, etc.)
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motos');
    }
};
