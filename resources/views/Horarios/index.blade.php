@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">

                <a href="{{route('Horarios.index')}}" class="list-group-item list-group-item-action">Listar horarios</a>
            </div>
        </div>

        <div class="col-md-8">

            <div class="col py-3">
                <div>
                    <H3>ENTRADA Y SALIDA DE APRENDICES</H3>
                </div>

                <div>
                    <table class="table table-striped">
                        <thead>
                        <tr>

                            <th scope="col">Nombres del aprendiz</th>
                            <th scope="col">Numero de ficha</th>
                            <th scope="col">Programa de formación</th>
                            <th scope="col">numero de documento</th>
                            <th scope="col">Hora de entrada</th>
                            <th scope="col">Hora de salida</th>
                            <th scope="col">Entrada / Salida</th>
                            <th scope="col">Hitorial</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Aprendices as $Aprendiz)
                            @foreach($Horarios as $Horario)

                            <tr>
                                <td>{{$Aprendiz ->nombres}} {{$Aprendiz ->apellidos}}</td>
                                <td>ficha</td>
                                <td>programa de formacion</td>
                                <td>{{$Aprendiz ->documento}}</td>

                                <td>{{$Horario->entrada}}</td>
                                <td>{{$Horario->salida}}</td>



                               <td> <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-success">Añadir</button>
                                </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <a href="{{route('Horarios.show',$Horario->id)}}" class="btn btn-warning">detalles</a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        @endforeach



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
