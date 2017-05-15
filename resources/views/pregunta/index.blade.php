@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pregunta</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'pregunta.create', 'method' => 'get', 'class'=>'inline-important']) !!}
                        {!!   Form::submit('Crear pregunta', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Enunciado</th>
                                <th colspan="2">Acciones</th>
                            </tr>
                            @foreach ($preguntas as $pregunta)
                            <tr>
                                <td>{{ $pregunta->enunciado }}</td>
                                <td>
                                    {!! Form::open(['route' => ['pregunta.edit',$pregunta->id], 'method' => 'get']) !!}
                                    {!!   Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}

                                </td>
                                <td>
                                    {!! Form::open(['route' => ['pregunta.destroy',$pregunta->id], 'method' => 'delete']) !!}
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