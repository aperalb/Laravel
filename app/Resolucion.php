<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resolucion extends Model
{
    protected $fillable=
        [
            'formulario_id', 'paciente_id', 'estado', 'latencia',
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

    public function puntuacion(){
        $puntuacion = 0;
        $respuestas = $this->respuestas;
        foreach($respuestas as $res) {
            $puntuacion = $puntuacion + $res->respuesta;
        }

        return $puntuacion;

    }


}
