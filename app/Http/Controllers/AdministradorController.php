<?php

namespace App\Http\Controllers;

use App\User;
use App\Admnistrador;
use Illuminate\Http\Request;
use App\Administrador;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $administradores = Administrador::all();

        return view('admon/index',['administradores'=>$administradores] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // not today sweetieadministradores
        return view('admon/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Esto me parece a mi que sobra
        $this->validate($request, [
            'salario'=>'required|numeric'
        ]);

        $administrador = new Administrador($request->all());
        $administrador->save();


        return redirect()->route('admon/index');
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
        $administrador = Administrador::find($id);


        return view('admon/edit')->with('administrador', $administrador);
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'apellido' => 'required|max:255',
            'salario' => 'required|numeric'
        ]);

        $administrador = Administrador::find($id);
        $administrador->fill($request->all());
        $user = $administrador->user;
        $user->fill($request->all());
        $user->save();
        $administrador->save();

        flash('Administrador modificado correctamente');

        return redirect()->route('admon.index');
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
