
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Updrs extends Model
{
    protected $fillable= ['foto', 'video', 'talla', 'peso', 'tension', 'resolucion_id'];

    public function resolucion(){
        return $this -> belongsTo('App\Resolucion');
    }
}

