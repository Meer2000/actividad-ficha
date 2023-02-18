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

                <div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>


                            <th scope="col">Nombre del Programa</th>
                            <th scope="col">Trimestre</th>
                            <th scope="col">Tipo de progrma</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>{{$Ficha ->Programas_id }}</td>
                            <td>{{$Ficha ->Trimestre_id }}</td>

                            <td>{{$Ficha ->Tipo_Programa_id }}</td>






                        </tr>
                        </tbody>



                    </table>
                    <div class="mb-3">
                    <a href="{{route('Fichas.index')}}" class="btn btn-primary" style="float: right">volver</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
