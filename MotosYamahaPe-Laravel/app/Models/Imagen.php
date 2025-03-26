<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;

    protected $table = 'imagenes';

    protected $fillable = [
        'auto_id',
        'url',
    ];

    /**
     * Relación: Una imagen pertenece a un auto.
     */
    public function auto()
    {
        return $this->belongsTo(Auto::class, 'auto_id');
    }
}
