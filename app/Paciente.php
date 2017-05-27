<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable=
        [
            'nombre', 'apellidos', 'sexo', 'dni', 'nuhsa', 'fechaNac', 'fechaInicioPD', 'sintomasMotores',
            'sintomasCognitivos', 'observaciones', 'grado', 'medico_id'
        ];


    public function medico()
    {
        return $this -> belongsTo('App/Medico');
    }

    public function tratamientos()
    {
        return $this -> hasMany('App\Tratamiento');
    }

    public function resoluciones()
    {
        return $this -> hasMany('App\Resolucion');
    }


    public function getFullnameAttribute()
    {
        return $this->nombre . ' ' . $this->apellidos;
    }





}
