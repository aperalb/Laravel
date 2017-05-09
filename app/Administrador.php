<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable=
        [
            'nombre', 'dni',
            'sintomasCognitivos', 'observaciones', 'grado'
        ];
}
