@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Resolucion</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($resolucion, [ 'route' => ['resolucion.update',$resolucion->id], 'method'=>'PUT', 'class'=>'form-inline']) !!}

                        @php
                            $formulario = $resolucion->formulario;
                            $nomform = $formulario->nombre;
                            $respuestas = $resolucion->respuestas;
                        @endphp

                        @if($resolucion->formulario_id == 1)
                            <div><b>{{$resolucion->formulario->nombre}}</b></div><br>
                            <b>{{"Datos del paciente"}}</b>
                        <table>
                            <tr>
                                <td>
                            <div class="form-group">
                            {!! Form::label('estado', 'Estado') !!}
                                {!! Form::select('estado', ["ON", "OFF"],null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            </div>
                            <br>
                                </td>
                                <td>
                            <div class="form-group">
                                {!! Form::label('donante', 'Donante') !!}
                                {!! Form::select('donante', ["SI", "NO"],null,['class'=>'form-control', 'required', 'autofocus']) !!}
                            </div>
                            <br>
                                </td>
                                <td>
                            <div class="form-group">
                            {!! Form::label('latencia', 'Latencia') !!}
                            {!! Form::text('latencia',$resolucion->latencia,['class'=>'form-control', 'required', 'autofocus']) !!}
                             </div>
                            <br>
                                </td>
                            </tr>
                            <br>
                            <br>
                            <tr>
                                <td>
                            <div class="form-group">
                                {!! Form::label('talla', 'Talla') !!}
                                {!! Form::text('talla',$resolucion->talla,['class'=>'form-control', 'required', 'autofocus']) !!}
                            </div>
                            <br>
                                </td>
                                <td>
                            <div class="form-group">
                                {!! Form::label('peso', 'Peso') !!}
                                {!! Form::text('peso',$resolucion->peso,['class'=>'form-control', 'required', 'autofocus']) !!}
                            </div>
                            <br>
                                </td>
                                <td>
                            <div class="form-group">
                                {!! Form::label('tension', 'Tension') !!}
                                {!! Form::text('tension',$resolucion->tension,['class'=>'form-control', 'required', 'autofocus']) !!}
                            </div>
                            <br>
                                </td>
                            </tr>
                        </table>

                        @foreach($respuestas as $respuesta)

                                <div>
                                    <b>{{$respuesta->pregunta->enunciado}}</b>
                                    <br>
                                    {{$respuesta->respuesta}}
                                    <br>
                                    {{'Nueva respuesta: '}}
                                    <br>
                                    <input type="text" name = "<?php echo  $respuesta->id ?>"  />

                                </div>
                            <br>
                        @endforeach
                                    @elseif($resolucion->formulario_id == 2 or $resolucion->formulario_id == 3 )
                            <div><b>{{$resolucion->formulario->nombre}}</b></div><br>
                            @foreach($respuestas as $respuesta)

                                <div>
                                   <b>{{$respuesta->pregunta->enunciado}}</b>
                                    <br>
                                    {{$respuesta->respuesta}}
                                    <br>
                                    {{'Nueva respuesta: '}}
                                    <br>
                                    <input type="text" name = "<?php echo  $respuesta->id ?>"  />

                                </div>
                                <br>
                            @endforeach

                        @endif


                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection