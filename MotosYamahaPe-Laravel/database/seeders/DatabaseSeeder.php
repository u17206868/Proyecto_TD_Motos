<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamar al seeder de usuarios si es necesario
        // User::factory(10)->create();

        // Crear un usuario de prueba
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password123'),
        ]);

        // Llamar al AutoSeeder para insertar datos en la tabla 'autos'
        $this->call([
            AutoSeeder::class,
            MotoSeeder::class,
            ImagenSeeder::class, // Agregar el nuevo seeder de imágenes
        ]);
    }
}