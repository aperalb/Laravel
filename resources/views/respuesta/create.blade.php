@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear resolucion</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'respuesta.store', 'class'=>'form-inline']) !!}
                        <div class="form-group">
                            {!! Form::label('respuesta', 'Respuesta') !!}
                            {!! Form::text('respuesta',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>


                        @if (isset($pregunta))
                            <div class="form-group">
                                {!!Form::hidden('pregunta',$pregunta->id) !!}
                                <br>
                                {!! Form::text('respuesta', $respuesta , ['class' => 'form-control', 'required']) !!}
                            </div>
                        @endif

                        <div class="form-group">
                            {!!Form::label('pregunta_id', 'Pregunta') !!}
                            <br>
                            {!! Form::select('pregunta_id', $preguntas, ['class' => 'form-control', 'required']) !!}
                        </div>


                        <div class="form-group">
                            {!!Form::hidden($value=$pregunta->id, 'Pregunta') !!}
                            <br>
                            {!! Form::select('pregunta_id', $preguntas, ['class' => 'form-control', 'required']) !!}
                        </div>


                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection