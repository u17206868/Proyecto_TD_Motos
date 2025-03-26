<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imagen;
use App\Models\Auto;

class ImagenSeeder extends Seeder
{
    public function run()
    {
        // Lista de imágenes por auto (ahora solo usando el modelo sin marca)
        $imagenes = [
            'Corolla' => [
                'images/Carros/toyotacorolla1.jpg',
                'images/Carros/toyotacorolla2.jpg',
                'images/Carros/toyotacorolla3.jpg'
            ],
            'Fiesta' => [
                'images/Carros/fordfiesta1.jpg',
                'images/Carros/fordfiesta2.jpg'
            ],
            'Rio' => [
                'images/Carros/kiario1.jpg',
                'images/Carros/kiario2.jpg'
            ],
            'Civic' => [
                'images/Carros/hondacivic1.jpg',
                'images/Carros/hondacivic2.jpg'
            ],
            'Versa' => [
                'images/Carros/nissanversa1.jpg',
                'images/Carros/nissanversa2.jpg'
            ],
        ];

        // Insertar imágenes en la base de datos
        foreach ($imagenes as $modelo => $urls) {
            // Buscar el auto usando SOLO el modelo
            $auto = Auto::where('modelo', $modelo)->first();

            if ($auto) {
                foreach ($urls as $url) {
                    Imagen::create([
                        'auto_id' => $auto->id,
                        'url' => $url,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
                echo "✔ Imágenes insertadas para el modelo: $modelo (ID: {$auto->id})\n";
            } else {
                echo "⚠ No se encontró el auto con modelo: $modelo\n";
            }
        }
    }
}