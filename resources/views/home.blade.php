@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido Médico</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <table class="table table-striped table-bordered">
                    <tr>
                        <td><a href={{url('/paciente')}}><big><strong>Mis pacientes</strong></big></a></td>
                    </tr>
                    <tr>
                        <td><a href={{url('/resolucion')}}><big><strong>Mis resoluciones</strong></big></a></td>
                    </tr>
            </div>
        </div>
    </div>
</div>
@endsection
