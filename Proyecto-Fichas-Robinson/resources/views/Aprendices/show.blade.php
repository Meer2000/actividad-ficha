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
                    <H3>detalles del aprendiz {{$Aprendiz->nombres}}{{$Aprendiz->apellidos}}</H3>
                </div>

                <div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">nombres</th>
                            <th scope="col">apellidos</th>
                            <th scope="col">correo</th>
                            <th scope="col">numero de documento</th>
                            <th scope="col">ficha</th>
                            <th scope="col">tipo de formacion</th>
                            <th scope="col">programa de formacion</th>
                            <th scope="col">fecha de nacimiento</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>

                            <td>{{$Aprendiz ->nombres}}</td>
                            <td>{{$Aprendiz ->apellidos}}</td>
                            <td>{{$Aprendiz ->email}}</td>
                            <td>{{$Aprendiz ->documento}}</td>
                            <td>ficha</td>
                            <td>tipo de formacion</td>
                            <td>programa de formacion</td>
                            <td>{{$Aprendiz ->fecha}}</td>

                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
