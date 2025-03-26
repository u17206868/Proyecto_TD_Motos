<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Auto;

class AutoSeeder extends Seeder
{
    public function run()
    {
        Auto::insert([
            [
                'marca' => 'toyota',
                'modelo' => 'Corolla',
                'año' => 2021,
                'precio' => 20000,
                'kilometraje' => 10000,
                'transmision' => 'Automática',
                'combustible' => 'Gasolina',
                'tipo' => 'sedan',
                'descripcion' => 'toyota Corolla 2021 en excelente estado.',
                'imagen_url' => 'images/Carros/toyotacorolla.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'ford',
                'modelo' => 'Fiesta',
                'año' => 2019,
                'precio' => 15000,
                'kilometraje' => 20000,
                'transmision' => 'Manual',
                'combustible' => 'Gasolina',
                'tipo' => 'hatchback',
                'descripcion' => 'ford Fiesta 2019, ideal para la ciudad.',
                'imagen_url' => 'images/Carros/fordfiesta.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'kia',
                'modelo' => 'Rio',
                'año' => 2020,
                'precio' => 18000,
                'kilometraje' => 15000,
                'transmision' => 'Automática',
                'combustible' => 'Gasolina',
                'tipo' => 'sedan',
                'descripcion' => 'kia Rio 2020 en perfectas condiciones.',
                'imagen_url' => 'images/Carros/kiario.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Honda',
                'modelo' => 'Civic',
                'año' => 2022,
                'precio' => 25000,
                'kilometraje' => 5000,
                'transmision' => 'Automática',
                'combustible' => 'Gasolina',
                'tipo' => 'sedan',
                'descripcion' => 'Honda Civic 2022, tecnología avanzada y diseño elegante.',
                'imagen_url' => 'images/Carros/hondacivic.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Spark',
                'año' => 2018,
                'precio' => 10000,
                'kilometraje' => 30000,
                'transmision' => 'Manual',
                'combustible' => 'Gasolina',
                'tipo' => 'hatchback',
                'descripcion' => 'Chevrolet Spark 2018, económico y funcional.',
                'imagen_url' => 'images/Carros/chevroletspark.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'nissan',
                'modelo' => 'Versa',
                'año' => 2021,
                'precio' => 19000,
                'kilometraje' => 12000,
                'transmision' => 'Automática',
                'combustible' => 'Gasolina',
                'tipo' => 'sedan',
                'descripcion' => 'nissan Versa 2021, perfecto para viajes familiares.',
                'imagen_url' => 'images/Carros/nissanversa.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'mazda',
                'modelo' => '3',
                'año' => 2020,
                'precio' => 22000,
                'kilometraje' => 8000,
                'transmision' => 'Automática',
                'combustible' => 'Gasolina',
                'tipo' => 'sedan',
                'descripcion' => 'mazda 3 2020, diseño deportivo y rendimiento excepcional.',
                'imagen_url' => 'images/Carros/mazda3.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'volkswagen',
                'modelo' => 'Jetta',
                'año' => 2019,
                'precio' => 17000,
                'kilometraje' => 18000,
                'transmision' => 'Manual',
                'combustible' => 'Diesel',
                'tipo' => 'sedan',
                'descripcion' => 'volkswagen Jetta 2019, confiabilidad y bajo consumo.',
                'imagen_url' => 'images/Carros/vwjetta.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Jeep',
                'modelo' => 'Compass',
                'año' => 2021,
                'precio' => 30000,
                'kilometraje' => 10000,
                'transmision' => 'Automática',
                'combustible' => 'Diesel',
                'tipo' => 'SUV',
                'descripcion' => 'Jeep Compass 2021, ideal para aventuras todoterreno.',
                'imagen_url' => 'images/Carros/jeepcompass.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'nissan',
                'modelo' => 'Leaf',
                'año' => 2021,
                'precio' => 30000,
                'kilometraje' => 5000,
                'transmision' => 'Automática',
                'combustible' => 'Eléctrico',
                'tipo' => 'hatchback',
                'descripcion' => 'nissan Leaf 2021, compacto y completamente eléctrico.',
                'imagen_url' => 'images/Carros/nissanleaf.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'marca' => 'Chevrolet',
                'modelo' => 'Bolt EV',
                'año' => 2022,
                'precio' => 35000,
                'kilometraje' => 1000,
                'transmision' => 'Automática',
                'combustible' => 'Eléctrico',
                'tipo' => 'hatchback',
                'descripcion' => 'Chevrolet Bolt EV 2022, ideal para un estilo de vida sostenible.',
                'imagen_url' => 'images/Carros/chevroletbolt.jpg',
                'disponible' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
