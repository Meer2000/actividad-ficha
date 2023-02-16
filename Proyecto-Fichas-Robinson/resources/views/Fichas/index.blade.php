@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">
                <a href="{{route('Fichas.create')}}" class="list-group-item list-group-item-action">Crear ficha</a>
                <a href="{{route('Fichas.index')}}" class="list-group-item list-group-item-action">listar fichas</a>
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
                            <th scope="col">Nivel Formativo</th>
                            <th scope="col">Nombre del Programa</th>
                            <th scope="col">Trimestre</th>
                            <th scope="col">Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach($Fichas as $Ficha)
                            <td>{{$Ficha ->nombre}}</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>{{$Ficha->Trimestre_id}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-danger">Borrar</button>
                                    <button type="button" class="btn btn-warning">Editar</button>
                                    <button type="button" class="btn btn-success">Ver</button>
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
