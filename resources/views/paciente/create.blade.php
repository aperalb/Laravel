@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Paciente</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'paciente.store', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                        {!! Form::label('nombre', 'Nombre del paciente') !!}
                        {!! Form::text('nombre',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>
                        <div class="form-group">
                            {!! Form::label('apellidos', 'Apellidos del paciente') !!}
                            {!! Form::text('apellidos',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('sexo', 'Sexo del paciente') !!}
                            {!! Form::select('sexo', ["HOMBRE", "MUJER"],null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del paciente') !!}
                            {!! Form::text('dni',null,['class'=>'form-control', 'required', 'pattern'=>'/^\d{8}[a-zA-Z]$/', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('nuhsa', 'nuhsa del paciente') !!}
                            {!! Form::text('nuhsa',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('fechaNac', 'Fecha de nacimiento del paciente') !!}
                            {!! Form::date('fechaNac',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('fechaInicioPD', 'Fecha de inicio de PD') !!}
                            {!! Form::text('fechaInicioPD',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('sintomasMotores', 'Sintomas motores del paciente') !!}
                            {!! Form::text('sintomasMotores',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('sintomasCognitivos', 'Sintomas cognitivos del paciente') !!}
                            {!! Form::text('sintomasCognitivos',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('observaciones', 'Observaciones') !!}
                            {!! Form::text('observaciones',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('grado', 'Grado de afectacion') !!}
                            {!! Form::text('grado',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!!Form::label('medico_id', 'Medico') !!}
                            <br>
                            {!! Form::select('medico_id', $medicos, ['class' => 'form-control', 'required']) !!}
                        </div>




                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

