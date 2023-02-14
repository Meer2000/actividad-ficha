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
                    <H3>Lista de aprendices</H3>
                </div>

                <div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">fecha de nacimiento</th>
                            <th scope="col">Numero de documento</th>
                            <th scope="col">Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Aprendices as $Aprendiz)
                        <tr>

                            <td>{{$Aprendiz ->nombres}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
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
