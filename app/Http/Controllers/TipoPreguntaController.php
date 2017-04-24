<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoPreguntaController extends Controller
{
    public function index()
    {
        //


        $tipopregunta = Especialidad::all();

        return view('especialidades/index')->with('especialidades', $especialidades);


    }
}
