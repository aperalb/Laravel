@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Resolucion</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::open(['route' => 'resolucion.store', 'class'=>'form-inline']) !!}

                        <P ALIGN=center>
                            <b>{{$formulario->nombre}}</b>
                            <br>
                        </P>

                        <div class="content-box-red">
                            <b>
                        {{'Paciente: '}}
                        {{$paciente->nombre}}
                        {{$paciente->apellidos}}
                            </b>
                            <br>
                            <br>
                        </div>


                        {!! Form::label('estado', 'Estado del paciente') !!}
                            {!! Form::select('sexo', ["OFF", "ON"],null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br>
                            <br>
                            {!! Form::label('latencia', 'Latencia de la medicación') !!}
                            {!! Form::text('latencia',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br>
                            <br>
                            {!! Form::label('talla', 'Talla del paciente') !!}
                            {!! Form::text('talla',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br>
                            <br>
                            {!! Form::label('peso', 'Peso del paciente') !!}
                            {!! Form::text('peso',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br>
                            <br>
                            {!! Form::label('tension', 'Tension del paciente') !!}
                            {!! Form::text('tension',null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br>
                            <br>
                            {!! Form::label('donante', '¿Es donante?') !!}
                            {!! Form::select('donante', ["SI", "NO"],null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            <br>
                            <br>

                        <P ALIGN=center>
                        <b>{{'PREGUNTAS DE LA UPDRS'}}</b>
                            <br>
                        </P>
                        <?php $i = 0; ?>
                        @foreach($formulario->preguntas as $pregunta)
                            <div>
                                <?php $i = $i+1; ?>
                                {{$pregunta->enunciado}}

                                    <input type="text" name = "<?php echo  $pregunta->id ?>" web required= true />

                            </div>
                            <br>
                        @endforeach

                        <input type = "hidden" name ="paciente_id" value ="[<?php echo $paciente->id ?>]">
                        <input type = "hidden" name ="formulario_id" value = "[<?php echo $formulario->id ?>]">
                        <input type = "hidden" name ="updrs" value = "[<?php echo "1" ?>]">

                            {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection