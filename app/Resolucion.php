<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resolucion extends Model
{
    protected $fillable=
        [
            'formulario_id', 'medico_id', 'paciente_id', 'estado', 'latencia',
            'video', 'foto', 'talla', 'peso', 'tension', 'donante'
        ];

    public function formulario(){
        return $this -> belongsTo('App\Formulario');
    }

    public function respuestas(){
        return $this -> hasMany('App\Respuesta');
    }

    public function paciente(){
        return $this -> belongsTo('App\Paciente');
    }

    public function Updrsresolucion(){
        return $this->hasMany('App\Updrsresolucion');
    }

}
