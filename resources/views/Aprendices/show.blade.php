@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">
                <a href="{{route('Aprendices.create')}}" class="list-group-item list-group-item-action">Crear
                    aprendiz</a>
                <a href="{{route('Aprendices.index')}}" class="list-group-item list-group-item-action">Listar
                    aprendiz</a>
            </div>
        </div>

        <div class="col-md-8">

            <div class="col py-3">
                <div>
                    <H4>Detalles del Aprendiz {{$Aprendiz->nombres}}  {{$Aprendiz->apellidos}}</H4>
                </div>

                <div>
                    <table class="table table-striped table-hover table info table-responsive ">
                        <thead style="text-align: center">
                        <tr>
                            <th scope="col">nombres</th>
                            <th scope="col">apellidos</th>
                            <th scope="col">correo</th>
                            <th scope="col">numero de documento</th>
                            <!--  <th scope="col">ficha</th>
                            <th scope="col">tipo de formacion</th>
                            <th scope="col">programa de formacion</th> -->
                            <th scope="col">fecha de nacimiento</th>
                            <!--<th scope="col">Trimestre</th>-->

                        </tr>
                        </thead>
                        <tbody>

                        <tr>

                            <td >{{$Aprendiz ->nombres}}</td>
                            <td>{{$Aprendiz ->apellidos}}</td>
                            <td>{{$Aprendiz ->email}}</td>
                            <td>{{$Aprendiz ->documento}}</td>
                           <!-- <td>{{$Aprendiz->Fichas_id}}</td>
                            <td>{{$Aprendiz->Fichas->Tipo_Programa_id}}</td>
                            <td>{{$Aprendiz ->Fichas->Programas_id}}</td> -->
                           <td>{{$Aprendiz ->fecha}}</td> -->
                            <!-- <td>{{$Aprendiz ->Fichas->Trimestre_id}}</td>-->

                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
