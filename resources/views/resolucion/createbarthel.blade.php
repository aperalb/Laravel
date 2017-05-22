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
                        {{$formulario->nombre}}
                        <br>
                        {{$paciente->nombre}}
                        {{$paciente->apellidos}}
                        <br>

                        <input type = "hidden" name ="paciente_id" value ="[<?php echo $paciente->id ?>]">
                        <input type = "hidden" name ="formulario_id" value = "[<?php echo $formulario->id ?>]">
                        <input type = "hidden" name ="edc" value = "[<?php echo "2" ?>]">


                    <?php $i = 0; ?>
                        @foreach($formulario->preguntas as $pregunta)
                            <div>
                                <?php $i = $i+1; ?>
                            {{$pregunta->enunciado}}
                                    <input type="hidden" name = "res[<?php echo 'preguntaedc'.(string)$pregunta->id ?>]" value ="[<?php echo $pregunta->id?>]" />
                                    <input type="text"   name = "res[<?php echo "respuestaedc".(string)$i ?>]" required= true />
                            </div>
                            <br>
                        @endforeach



                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection