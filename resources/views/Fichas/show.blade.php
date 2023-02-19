@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">
                <a href="{{route('Fichas.create')}}" class="list-group-item list-group-item-action">Crear ficha</a>
                <a href="{{route('Fichas.index')}}" class="list-group-item list-group-item-action">Listar</a>
            </div>
        </div>

        <div class="col-md-8">

            <div class="col py-3">
                <div>
                    <H3>DETALLES DE LA FICHA   {{$Ficha->nombre}}</H3>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped ">
                        <thead>
                        <tr>


                            <th scope="col">Nombre del Programa</th>
                            <th scope="col">Trimestre</th>
                            <th scope="col">Tipo de programa</th>
                        <tbody>

                        <tr>
                            <td>{{$Ficha ->Programas->nombre }}</td>
                            <td>{{$Ficha ->Trimestre->nombre }}</td>
                            <td>{{$Ficha ->Tipo_Programa->nombre }}</td>
                        </tr>
                        </tbody>

                        </tr>
                        </thead>
                    </table>
                    <div class="mb-3">
                    <a href="{{route('Fichas.index')}}" class="btn btn-primary" style="float: right">volver</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
