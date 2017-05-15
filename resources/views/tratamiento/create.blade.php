@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear Tratamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'tratamiento.store', 'class'=>'form-inline']) !!}

                        <div class="form-group">
                        {!! Form::label('medicamento', 'Medicamento') !!}
                        {!! Form::text('medicamento',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('finalidad', 'Finalidad') !!}
                            {!! Form::text('finalidad',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('dosis', 'Dosis') !!}
                            {!! Form::text('dosis',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!! Form::label('frecuencia', 'Frecuencia Diaria') !!}
                            {!! Form::text('frecuencia',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br> </br>
                        </div>

                        <div class="form-group">
                            {!!Form::label('paciente_id', 'Paciente') !!}
                            <br>
                            {!! Form::select('paciente_id', $pacientes, ['class' => 'form-control', 'required']) !!}
                        </div>




                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection