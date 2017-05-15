<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable=
        [
            'salario', 'user_id'
        ];

    public function User(){
        return $this -> belongsTo('App\User');
    }

    public function getFullnameAttribute()
    {
        return $this->user->name . ' ' . $this->user->apellido;
    }
}
