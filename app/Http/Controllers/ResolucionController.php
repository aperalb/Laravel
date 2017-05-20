<?php

namespace App\Http\Controllers;

use App\Updrsresolucion;
use Illuminate\Http\Request;
use App\Resolucion;
use App\Formulario;
use App\Paciente;
use App\Medico;
use App\Respuesta;

class ResolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resoluciones = Resolucion::all();
        return view('resolucion/index', ['resoluciones'=>$resoluciones]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $formularios = Formulario::all()->pluck('name','id');
        $pacientes = Paciente::all()->pluck('fullname','id');


        return view('resolucion/create', ['formularios'=>$formularios,'pacientes'=>$pacientes]);
    }

    public function createupdrs($id)
    {
        $formulario = Formulario::find(6);
        $paciente = Paciente::find($id);
        return view('resolucion/createupdrs', ['formulario'=>$formulario,'paciente'=>$paciente]);
    }

    public function createbarthel($id)
    {
        $formulario = Formulario::find(7);
        $paciente = Paciente::find($id);
        return view('resolucion/createform', ['formulario'=>$formulario,'paciente'=>$paciente]);
    }

    public function createedc($id)
    {
        $formulario = Formulario::find(8);
        $paciente = Paciente::find($id);
        return view('resolucion/createform', ['formulario'=>$formulario,'paciente'=>$paciente]);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $resolucion = new Resolucion($request->all());
        $resolucion->save();

        $resolucion->id;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
