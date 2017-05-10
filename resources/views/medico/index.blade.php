@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Medicos</div>

                    <div class="panel-body">
                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Especialidad</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                            @foreach ($medicos as $medico)

                                <tr>
                                    <td>{{ $medico->user->name}}</td>
                                    <td>{{ $medico->user->apellido }}</td>
                                    <td>{{ $medico->especialidad }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['medico.edit',$medico->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['medico.destroy',$medico->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection