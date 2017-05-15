@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">administradores</div>

                    <div class="panel-body">
                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Salario</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                            @foreach ($administradores as $administrador)

                                <tr>
                                    <td>{{ $administrador->user->name}}</td>
                                    <td>{{ $administrador->user->apellido }}</td>
                                    <td>{{ $administrador->salario .' $$$' }}</td>

                                    <td>
                                        {!! Form::open(['route' => ['admon.edit',$administrador->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['admon.destroy',$administrador->id], 'method' => 'delete']) !!}
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