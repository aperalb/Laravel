@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear medico</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'medico.store']) !!}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre del medico') !!}
                            {!! Form::text('nombre',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('apellido', 'Apellidos del medico') !!}
                            {!! Form::text('apellido',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('dni', 'DNI del medico') !!}
                            {!! Form::text('dni',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'email del medico') !!}
                            {!! Form::text('email',null,['class'=>'form-control', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('especialidad', 'Especialidad medico') !!}
                            <br>
                            {!!Form::text('especialidad',null,['class'=>'form-control', 'required', ]) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('codigo', 'Codigo Identificador') !!}
                            <br>
                            {!!Form::text('codigo',null,['class'=>'form-control', 'required', ]) !!}
                        </div>


                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection