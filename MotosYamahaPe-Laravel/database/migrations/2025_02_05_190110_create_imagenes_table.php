<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->id(); // ID único de la imagen
            $table->foreignId('auto_id')->constrained('autos')->onDelete('cascade'); // Relación con autos
            $table->string('url'); // URL de la imagen
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
};
