@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Paciente</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($paciente, [ 'route' => ['paciente.update',$paciente->id], 'method'=>'PUT', 'class'=>'form-inline']) !!}

                        <div class="form-group">
                        {!! Form::label('nombre', 'Nombre del paciente') !!}
                        {!! Form::text('nombre',$paciente->nombre,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('apellidos', 'Apellidos del paciente') !!}
                            {!! Form::text('apellidos',$paciente->apellidos,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del paciente') !!}
                            {!! Form::text('dni',$paciente->dni,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('fechaNac', 'Fecha de nacimiento del paciente') !!}
                            {!! Form::text('fechaNac',$paciente->fechaNac,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('fechaInicioPD', 'Fecha de inicio de PD') !!}
                            {!! Form::text('fechaInicioPD',$paciente->fechaInicioPD,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('sintomasMotores', 'Sintomas motores del paciente') !!}
                            {!! Form::text('sintomasMotores',$paciente->sintomasMotores,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('sintomasCognitivos', 'Sintomas cognitivos del paciente') !!}
                            {!! Form::text('sintomasCognitivos',$paciente->sintomasCognitivos,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('observaciones', 'Observaciones') !!}
                            {!! Form::text('observaciones',$paciente->observaciones,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('grado', 'Grado de afectacion') !!}
                            {!! Form::text('grado',$paciente->grado,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>




                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

'nombre' => 'required|max:255',
'apellidos'=> 'required|max:255',
'dni',
'fechaNac',
'fechaInicioPD',
'sintomasMotores',
'sintomasCognitivos',
'observaciones',
'grado'