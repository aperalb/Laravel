<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $fillable = [ 'nombre'];

    public function Pregunta()
    {
        return $this -> hasMany('App\Pregunta');
    }

    public function getNameAttribute()
    {
        return $this->nombre;
    }


}
