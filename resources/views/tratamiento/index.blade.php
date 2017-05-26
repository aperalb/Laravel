@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tratamientos</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'tratamiento.create', 'method' => 'get', 'class'=>'inline-important']) !!}
                        {!!   Form::submit('Crear tratamiento', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Medicamento</th>
                                <th>Finalidad</th>
                                <th>Posologia</th>
                                <th>Dosis Supramaxima</th>

                                <th colspan="2">Acciones</th>
                            </tr>
                            @foreach ($tratamientos as $tratamiento)
                            <tr>
                                <td>{{ $tratamiento->medicamento }}</td>
                                <td>{{ $tratamiento->finalidad }}</td>
                                <td>{{ $tratamiento->dosis . " " . $tratamiento->frecuencia . " veces diarias"}}</td>
                                <td>{{ $tratamiento->Supramax }}</td>


                                <td>
                                    {!! Form::open(['route' => ['tratamiento.edit',$tratamiento->id], 'method' => 'get']) !!}
                                    {!! Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}
                                </td>

                                <td>
                                    {!! Form::open(['route' => ['tratamiento.destroy',$tratamiento->id], 'method' => 'delete']) !!}
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