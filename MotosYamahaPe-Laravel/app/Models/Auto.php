<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $table = 'autos';

    protected $fillable = [
        'marca',
        'modelo',
        'año',
        'precio',
        'descripcion',
        'imagen_url', // Puede usarse como imagen principal
        'disponible',
        'kilometraje',
        'transmision',
        'combustible',
        'tipo',
    ];

    /**
     * Relación: Un auto puede tener muchas imágenes.
     */
    public function imagenes()
    {
        return $this->hasMany(Imagen::class, 'auto_id');
    }
}
