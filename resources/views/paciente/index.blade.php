@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pacientes</div>

                    <div class="panel-body">
                        @include('flash::message')



                        <br><br>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Edad</th>
                                <th>Fecha Inicio PD</th>
                                <th>Grado de afectación</th>

                                <th colspan="3">Acciones</th>
                                <th colspan="3">Evaluaciones</th>
                            </tr>
                            @foreach ($pacientes as $paciente)
                            <tr>
                              <?php
                                $hoy = date('Y');
                                $year = date('Y',strtotime($paciente->fechaNac));
                                $edad = $hoy - $year;
                                ?>

                                <td>{{ $paciente->nombre }}</td>
                                <td>{{ $paciente->apellidos }}</td>
                                <td>{{ $edad. " años"}}</td>
                                <td>{{ $paciente->fechaInicioPD }}</td>
                                <td>{{ $paciente->grado }}</td>

                                <td>
                                    {!! Form::open(['route' => ['paciente.show',$paciente->id], 'method' => 'get']) !!}
                                    {!! Form::submit('Abrir', ['class'=> 'btn btn-info'])!!}
                                    {!! Form::close() !!}

                                </td>

                                <td>
                                    {!! Form::open(['route' => ['paciente.edit',$paciente->id], 'method' => 'get']) !!}
                                    {!! Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                    {!! Form::close() !!}

                                </td>
                                <td>
                                    {!! Form::open(['route' => ['paciente.destroy',$paciente->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                    {!! Form::close() !!}

                                </td>

                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Más <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href={{url('createupdrs/'.$paciente->id)}}#">Crear UPDRS</a></li>
                                            <li><a href={{url('createbarthel/'.$paciente->id)}}#">Crear BARTHEL</a></li>
                                            <li><a href={{url('createedc/'.$paciente->id)}}#">Crear EDC</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Otros</a></li>
                                        </ul>
                                    </div>
                                </td>
                                </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection