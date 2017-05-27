@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menú</div>

                <div class="panel-body">
                    Bienvenido puto
                </div>

                <table class="table table-striped table-bordered">
                    <tr>
                        <td><a href={{url('/paciente')}}><big><strong>Administrar pacientes</strong></big></a></td>
                    </tr>
                    <tr>
                        <td><a href={{url('/paciente/create')}}><big><strong>Crear Paciente</strong></big></a></td>
                    </tr>
                    <tr>
                        <td><a href={{url('/medico')}}><big><strong>Administrar medicos</strong></big></a></td>
                    </tr>
                    <tr>
                    <td><a href={{url('/resolucion')}}><big><strong>Resoluciones</strong></big></a></td>
                    </tr>
                    <tr>
                        <td><a href={{url('/formulario')}}><big><strong>Formularios</strong></big></a></td>
                    </tr>


            </div>
        </div>
    </div>
</div>
@endsection
