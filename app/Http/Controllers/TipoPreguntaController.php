<?php

namespace App\Http\Controllers;

use App\Tipopregunta;
use Illuminate\Http\Request;

class TipoPreguntaController extends Controller
{
    public function index()
    {
        //


        $tipopreguntas = Tipopregunta::all();

        return view('tipopregunta/index')->with('tipopreguntas', $tipopreguntas);


    }

    public function create()
    {
        return view('tipopregunta/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:255',
        ]);
        //
        $tipopregunta = new Tipopregunta($request->all());
        $tipopregunta->save();

        // return redirect('tipopreguntaes');

        flash('Tipopregunta creado correctamente');

        return redirect()->route('tipopregunta.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        $tipopregunta = Tipopregunta::find($id);

        return view('tipopregunta/edit')->with('tipopregunta', $tipopregunta);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required|max:255',
        ]);

        $tipopregunta = Tipopregunta::find($id);
        $tipopregunta->fill($request->all());

        $tipopregunta->save();

        flash('Tipopregunta modificada correctamente');

        return redirect()->route('tipopregunta.index');
    }

    public function destroy($id)
    {
        $tipopregunta = tipopregunta::find($id);
        $tipopregunta->delete();
        flash('tipopregunta borrada correctamente');

        return redirect()->route('tipopregunta.index');
    }
}
