<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable=
        [
            'nombre', 'apellidos', 'dni', 'nuhsa', 'fechaNac', 'fechaInicioPD', 'sintomasMotores',
            'sintomasCognitivos', 'observaciones', 'grado'
        ];


    public function Medico(){
        return $this -> belongsTo('App/Medico', 'medico_id');
    }


}
