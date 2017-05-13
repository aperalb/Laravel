<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [ 'especialidad'];

    public function User(){
        return $this -> belongsTo('App\User');
    }

    public function Paciente(){
        return $this -> hasMany('App\Paciente');
    }

    public function getFullnameAttribute()
    {
        return $this->user->name . ' ' . $this->user->apellido;
    }

}
