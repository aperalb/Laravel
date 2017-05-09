<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['name', 'apellido','dni','email', 'especialidad', 'codigo'];

    public function User(){
        return $this -> hasOne('App\User', 'user_id');
    }

    public function Paciente(){
        return $this -> hasMany('App\Paciente');
    }

}
