@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">
                <a href="{{route('Fichas.create')}}" class="list-group-item list-group-item-action">Crear</a>
                <a href="{{route('Fichas.index')}}" class="list-group-item list-group-item-action">Listar </a>
            </div>
        </div>

        <div class="col-md-8">

            <div class="col py-3">
                <div>
                    <H3>LISTA DE FICHAS</H3>
                </div>

                <div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Ficha</th>

                            <th scope="col">Nombre del Programa</th>
                            <th scope="col">Trimestre</th>
                            <th scope="col">Tipo de programa</th>
                            <th scope="col">Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Fichas as $Ficha)
                        <tr>
                            <th>{{$Ficha ->nombre }}</th>
                            <th>{{$Ficha ->Programas_id }}</th>

                            <td>{{$Ficha ->Trimestre_id}}</td>

                            <td>{{$Ficha ->Tipo_Programa_id}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-danger">Borrar</button>
                                    <a  href="{{route('Fichas.edit',$Ficha->id)}}" class="btn btn-warning" >Editar</a>
                                    <a href="{{route('Fichas.show',$Ficha->id)}}" class="btn btn-success">Ver</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
