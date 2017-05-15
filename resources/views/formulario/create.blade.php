@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Formulario</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'formulario.store', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                        {!! Form::label('nombre', 'Nombre del formulario') !!}
                        {!! Form::text('nombre',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection