@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar pregunta</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($pregunta, [ 'route' => ['pregunta.update',$pregunta->id], 'method'=>'PUT', 'class'=>'form-inline']) !!}
                        <div class="form-group">

                        {!! Form::label('enunciado', 'enunciado de la pregunta') !!}
                        {!! Form::text('enunciado',$pregunta->enunciado,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection