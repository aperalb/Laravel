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
        $formulario = Formulario::find(1);
        $paciente = Paciente::find($id);

        return view('resolucion/createupdrs', ['formulario'=>$formulario,'paciente'=>$paciente]);
    }

    public function createbarthel($id)
    {
        $formulario = Formulario::find(2);
        $paciente = Paciente::find($id);
        return view('resolucion/createform', ['formulario'=>$formulario,'paciente'=>$paciente]);
    }

    public function createedc($id)
    {
        $formulario = Formulario::find(3);
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
            $resolucion = new Resolucion($request->all());
            $resolucion->save();

            foreach ($request->all() as $key => $value) {
                if (is_numeric($key)) {

                    $res = new Respuesta();
                    $res->pregunta_id = $key;
                    $res->respuesta =  $value;
                    $res->resolucion_id = $resolucion->id;

                    $res->save();
                }
            }
        return redirect()->route('paciente.index');
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
        $resolucion = Resolucion::find($id);
        return view('resolucion.edit')->with('resolucion', $resolucion);
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

        $resolucion = Resolucion::find($id);
        $resolucion->fill($request->all());
        $resolucion->save();

        foreach ($request->all() as $key => $value) {
            if (is_numeric($key) and $value != null) {

                $resEditada = Respuesta::find($key);
                $resEditada->respuesta = $value;
                $resEditada->save();

            }
        }
        flash('Resolucion modificada correctamente');
        return redirect()->route('resolucion.index');

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
