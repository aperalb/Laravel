<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable=
        [
            'finalidad', 'medicamento', 'dosis', 'frecuencia', 'paciente_id'
        ];


    public function Paciente()
    {
        return $this->belongsTo('App/Paciente');
    }

    public function getSupramaxAttribute()
    {
       $supra = $this->dosis * $this->frecuencia;
       $supra = 0.75 * $supra;
       return $supra;

    }


}
