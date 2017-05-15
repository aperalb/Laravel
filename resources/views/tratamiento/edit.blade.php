@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar tratamiento</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($tratamiento, [ 'route' => ['tratamiento.update',$tratamiento->id], 'method'=>'PUT', 'class'=>'form-inline']) !!}

                        <div class="form-group">
                        {!! Form::label('medicamento', 'Medicamento') !!}
                        {!! Form::text('medicamento',$tratamiento->medicamento,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <br></br>

                        <div class="form-group">
                            {!! Form::label('finalidad', 'Finalidad') !!}
                            {!! Form::text('finalidad',$tratamiento->finalidad,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <br></br>

                        <div class="form-group">
                            {!! Form::label('dosis', 'Dosis') !!}
                            {!! Form::text('dosis',$tratamiento->dosis,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <br></br>

                        <div class="form-group">
                            {!! Form::label('frecuencia', 'Frecuencia Diaria') !!}
                            {!! Form::text('frecuencia',$tratamiento->frecuencia,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <br></br>


                        {!! Form::submit('Actualizar',['class'=>'btn-primary btn']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection