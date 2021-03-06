<?php

namespace App\Http\Controllers;
use App\Medico;
use App\Paciente;
use App\Resolucion;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pacientes = Paciente::all();

        return view('paciente/index',['pacientes'=>$pacientes] );

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $medicos = Medico::all()->pluck('fullname','id');
        return view('paciente/create', ['medicos'=>$medicos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'nombre' => 'required|max:255',
            'apellidos'=> 'required|max:255',
            'sexo',
            'dni',
            'fechaNac',
            'fechaInicioPD',
            'sintomasMotores',
            'sintomasCognitivos',
            'observaciones',
            'grado'

        ]);

        //
        $paciente = new Paciente($request->all());
        $paciente->save();

        flash('Paciente creado correctamente');

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
       $paciente = Paciente::find($id);

       return view('paciente/show', ['paciente'=>$paciente]);
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
        $paciente = Paciente::find($id);

        return view('paciente.edit')->with('paciente', $paciente);
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
        $this->validate($request, [
            'nombre' => 'required|max:255',
            'apellidos'=> 'required|max:255',
            'sexo',
            'dni',
            'fechaNac',
            'fechaInicioPD',
            'sintomasMotores',
            'sintomasCognitivos',
            'observaciones',
            'grado'
        ]);

        $paciente = Paciente::find($id);
        $paciente->fill($request->all());

        $paciente->save();

        flash('Paciente modificado correctamente');

        return redirect()->route('paciente.index');
    }


    public function destroy($id)
    {
        //
        $paciente = Paciente::find($id);
        $paciente->delete();
        flash('Paciente borrado correctamente');

        return redirect()->route('paciente.index');
    }

    public function destroyAll(){

        //

    }
}
