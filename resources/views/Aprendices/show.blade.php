@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">
                <a href="{{route('Aprendices.create')}}" class="list-group-item list-group-item-action list-group-item-primary" >Crear
                    aprendiz</a>
                <a href="{{route('Aprendices.index')}}" class="list-group-item list-group-item-action list-group-item-warning">Listar
                    aprendiz</a>
            </div>
        </div>

        <div class="col-md-8">

            <div class="col py-3">
                <div>
                    <H3>Detalles del Aprendiz {{$Aprendiz->nombres}}  {{$Aprendiz->apellidos}}</H3>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover table-info table-responsive ">
                        <thead style="text-align: center">
                        <tr>
                            <th scope="col">nombres</th>
                            <th scope="col">apellidos</th>
                            <th scope="col">correo</th>
                            <th scope="col">numero de documento</th>
                              <th scope="col">ficha</th>
                            <th scope="col">tipo de formacion</th>
                            <th scope="col">programa de formacion</th>
                            <th scope="col">fecha de nacimiento</th>
                            <th scope="col">Trimestre</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr>

                            <td >{{$Aprendiz ->nombres}}</td>
                            <td>{{$Aprendiz ->apellidos}}</td>
                            <td>{{$Aprendiz ->email}}</td>
                            <td>{{$Aprendiz ->documento}}</td>
                           <td>{{$Aprendiz->Fichas->nombre}}</td>
                            <td>{{$Aprendiz->Fichas->Tipo_Programa->nombre}}</td>
                            <td>{{$Aprendiz ->Fichas->Programas->nombre}}</td>
                           <td>{{$Aprendiz ->fecha}}</td>
                            <td>{{$Aprendiz ->Fichas->Trimestre->nombre}}</td>

                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
