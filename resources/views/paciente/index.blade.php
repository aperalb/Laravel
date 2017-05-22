@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pacientes</div>

                    <div class="panel-body">
                        @include('flash::message')
                        {!! Form::open(['route' => 'paciente.create', 'method' => 'get', 'class'=>'inline-important']) !!}
                        {!! Form::submit('Crear paciente', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}


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
                                    {!! Form::open(['route' => ['paciente.edit',$paciente->id], 'method' => 'get']) !!}
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

                                  <td>
                                      {!! Form::open(['route' => ['resolucion.createupdrs',$paciente->id], 'method' => 'get']) !!}
                                      {!! Form::submit('UPDRS', ['class'=> 'btn btn-danger' ])!!}
                                      {!! Form::close() !!}

                                  </td>

                                  <td>
                                      {!! Form::open(['route' => ['resolucion.createbarthel',$paciente->id], 'method' => 'get']) !!}
                                      {!! Form::submit('BARTHEL', ['class'=> 'btn btn-danger' ])!!}
                                      {!! Form::close() !!}

                                  </td>

                                  <td>
                                      {!! Form::open(['route' => ['resolucion.createedc',$paciente->id], 'method' => 'get']) !!}
                                      {!! Form::submit('EDC', ['class'=> 'btn btn-danger' ])!!}
                                      {!! Form::close() !!}

                                  </td>

                                <td><div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
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