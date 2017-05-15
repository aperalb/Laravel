@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Pregunta</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'pregunta.store', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                        {!! Form::label('enunciado', 'Enunciado de la pregunta') !!}
                        {!! Form::text('enunciado',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('formulario_id', 'Formularios') !!}
                            <br>
                            {!! Form::select('formulario_id', $formularios, ['class' => 'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection