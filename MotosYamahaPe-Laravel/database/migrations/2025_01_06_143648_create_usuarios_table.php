<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('name', 255); // nombre VARCHAR(255) NOT NULL
            // $table->string('lastname', 255); // apellidos VARCHAR(255) NOT NULL
            $table->string('email_verified_at', 255); // apellidos VARCHAR(255) NOT NULL
            $table->string('email', 255)->unique(); // correo VARCHAR(255) NOT NULL UNIQUE
            $table->string('password', 255); // contraseña VARCHAR(255) NOT NULL
            $table->enum('tipo_usuario', ['cliente', 'admin']); // tipo_usuario ENUM('cliente', 'admin') NOT NULL
            $table->string('celular', 20)->nullable(); // celular VARCHAR(20) NULL
            $table->string('remember_token', 10)->nullable(); // celular VARCHAR(20) NULL
            $table->timestamps(); // created_at y updated_at con TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
