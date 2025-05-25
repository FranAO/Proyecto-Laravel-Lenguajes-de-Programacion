<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguage extends Model
{
    protected $fillable = [
        'nombre',
        'imagen',
        'descripcion',
        'creador',
        'año_creacion',
        'paradigma',
        'caracteristicas',
        'sitio_web'
    ];

    protected $casts = [
        'caracteristicas' => 'array'
    ];
}
