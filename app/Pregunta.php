<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $fillable = [ 'enunciado', 'formulario_id'];
    public function medico()
    {
        return $this -> belongsTo('App/Formulario');
    }
}
