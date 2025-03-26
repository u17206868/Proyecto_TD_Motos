<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    use HasFactory;

    // Nombre de la tabla asociada
    protected $table = 'motos';

    // Columnas que se pueden llenar mediante asignación masiva
    protected $fillable = [
        'marca',
        'modelo',
        'año',
        'usuario_id',
        'precio',
        'descripcion',
        'imagen_url',
        'disponible',
        'kilometraje',
        'transmision',
        'combustible',
        'tipo',
    ];

    // Casts de datos
    protected $casts = [
        'año' => 'integer',
        'precio' => 'float',
        'disponible' => 'boolean',
        'kilometraje' => 'integer',
    ];

    // Scopes
    public function scopeDisponible($query)
    {
        return $query->where('disponible', true);
    }

    public function scopeRangoDePrecio($query, $min, $max)
    {
        return $query->whereBetween('precio', [$min, $max]);
    }
}
