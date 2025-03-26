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
        Schema::create('autos', function (Blueprint $table) {
            $table->id(); // ID único del auto
            $table->string('marca', 255); // Marca del auto
            $table->string('modelo', 255); // Modelo del auto
            $table->string('descripcion', 255); // Modelo del auto
            $table->boolean('disponible'); // Modelo del auto
            $table->string('imagen_url', 255); // Modelo del auto
            $table->integer('año'); // Año de fabricación
            $table->decimal('precio', 10, 2);
            // $table->string('color', 50); // Color del auto
            $table->string('tipo', 50); // Tipo de auto (sedán, SUV, etc.)
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
};
