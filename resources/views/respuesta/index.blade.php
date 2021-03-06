@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Respuesta</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'respuesta.create', 'method' => 'get', 'class'=>'inline-important']) !!}
                        {!!   Form::submit('Crear respuesta', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Enunciado</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                            @foreach ($respuestas as $respuesta)
                            <tr>
                                <td>{{ $respuesta->enunciado }}</td>
                                <td>
                                    {!! Form::open(['route' => ['respuesta.edit',$respuesta->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}

                                </td>
                                <td>
                                    {!! Form::open(['route' => ['respuesta.destroy',$respuesta->id], 'method' => 'delete']) !!}
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
    </div>
@endsection