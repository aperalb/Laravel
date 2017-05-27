@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Detalles Paciente</div>

                    <div class="panel-body">
                        @include('flash::message')

                        <table>
                        <tr>
                            <td><strong><b>Datos del Paciente</b></strong></td>
                        </tr>
                            <tr>
                                <td><b>Nombre:</b></td>
                                <td>{{$paciente->nombre." ".$paciente->apellidos}}</td>
                            </tr>

                            <tr>
                                <td><b>Sexo</b></td>
                                @php if($paciente->sexo == 0){
                                $genero = "HOMBRE";
                                }else{
                                $genero= "MUJER";
                                }
                                @endphp
                                <td>{{$genero}}</td>
                            </tr>

                            <tr>
                                <td><b>DNI:</b></td>
                                <td>{{$paciente->dni}}</td>
                            </tr>
                            <tr>
                                <td><b>Fecha de nacimiento:</b></td>
                                <td>{{$paciente->fechaNac}}</td>
                            </tr>
                        </table>
                </div>

                    <div class="panel-body">
                        <strong><b>Datos relativos a la enfermedad</b></strong>
                    <table>
                        <tr>
                            <td><b>Fecha de inicio de Enfermedad:</b></td>
                            <td>{{$paciente->fechaInicioPD}}</td>
                        </tr>
                        <tr>
                            <td><b>Sintomas Motores:</b></td>
                            <td>{{$paciente->sintomasMotores}}</td>
                        </tr>
                        <tr>
                            <td><b>Sintomas Cognitivos:</b></td>
                            <td>{{$paciente->sintomasCognitivos}}</td>
                        </tr>
                        <tr>
                            <td><b>Observaciones:</b></td>
                            <td>{{$paciente->observaciones}}</td>
                        </tr>

                    </table>
                    </div>

                    <div class="panel-body"> <strong><b>Tratamientos</b></strong>

                        {!! Form::open(['route' => 'tratamiento.create', 'method' => 'get', 'class'=>'inline-important']) !!}
                        {!!   Form::submit('Crear tratamiento', ['class'=> 'btn btn-primary'])!!}
                        {!! Form::close() !!}

                        @php $tratamientos = $paciente->tratamientos @endphp

                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Medicamento</th>
                                <th>Finalidad</th>
                                <th>Posologia</th>
                                <th>Dosis Supramaxima</th>
                                <th>Accion</th>


                            </tr>

                            @foreach ($tratamientos as $tratamiento)
                                <tr>
                                    <td>{{ $tratamiento->medicamento }}</td>
                                    <td>{{ $tratamiento->finalidad }}</td>
                                    <td>{{ $tratamiento->dosis . " " . $tratamiento->frecuencia . " veces diarias"}}</td>
                                    <td>{{ $tratamiento->Supramax }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['tratamiento.edit', $tratamiento->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>

                                <tr>
                            @endforeach
                        </table>
                    </div>

                    <div class="panel-body"> <strong><b>Resoluciones</b></strong>
                        @php $resoluciones = $paciente->resoluciones @endphp

                        <table class="table table-striped table-bordered">

                        <tr>
                            <th>Formulario</th>
                            <th>Fecha</th>
                            <th>Puntuacion</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                            <tr>
                            @foreach ($resoluciones as $resolucion)
                                <tr>
                                    <td>{{ $resolucion->formulario->nombre }}</td>
                                    <td>{{ $resolucion->updated_at }}</td>
                                    <td>{{ $tratamiento->puntuacion }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['resolucion.edit', $resolucion->id], 'method' => 'get']) !!}
                                        {!! Form::submit('Editar', ['class'=> 'btn btn-warning'])!!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['resolucion.destroy',$resolucion->id], 'method' => 'delete']) !!}
                                        {!!   Form::submit('Borrar', ['class'=> 'btn btn-danger' ,'onclick' => 'if(!confirm("¿Está seguro?"))event.preventDefault();'])!!}
                                        {!! Form::close() !!}

                                    </td>


                                <tr>
                        @endforeach

                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection