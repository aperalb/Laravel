<?php

namespace App\Http\Controllers;


use App\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $medicos = Medico::all();

        return view('medico/index',['medicos'=>$medicos] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('medico/create');

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
            'especialidad'=>'required|max:255'
        ]);

        $medico = new Medico($request->all());
        $medico->save();

        // return redirect('especialidades');

        //flash('Medico creado correctamente');

        return redirect()->route('medico/index');
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
        $medico = Medico::find($id);


        return view('medico/edit')->with('medico', $medico);
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
        /**dd($request);*/
        $this->validate($request, [
            'name' => 'required|max:255',
            'apellido' => 'required|max:255',
            'especialidad' => 'required|max:255'
        ]);

        $medico = Medico::find($id);
        $medico->fill($request->all());
        $user = $medico->user;
        $user->fill($request->all());
        $user->save();
        $medico->save();

        flash('Medico modificado correctamente');

        return redirect()->route('medico.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = Medico::find($id);
        $medico->delete();
        flash('Medico borrado correctamente');

        return redirect()->route('medico.index');

    }
}
