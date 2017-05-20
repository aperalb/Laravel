<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $fillable = [ 'enunciado', 'formulario_id'];

    public function formulario()
    {
        return $this -> belongsTo('App\Formulario');
    }
    public function Respuestas(){
        return $this -> hasMany('App\Respuesta');
    }



}
