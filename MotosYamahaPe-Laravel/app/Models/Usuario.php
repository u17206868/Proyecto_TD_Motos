<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'apellidos',
        'correo',
        'contraseña',
        'tipo_usuario',
        'celular'
    ];

    protected $hidden = [
        'contraseña',
    ];

    protected $casts = [
        'tipo_usuario' => 'string',
    ];
}
