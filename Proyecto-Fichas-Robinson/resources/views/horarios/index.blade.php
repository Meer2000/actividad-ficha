@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Crear</a>
                <a href="#" class="list-group-item list-group-item-action">Listar</a>
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

                            <th scope="col">Nivel Formativo</th>
                            <th scope="col">Nombre del Programa</th>
                            <th scope="col">Trimestre</th>
                            <th scope="col">Numero de aprendices</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-danger">Borrar</button>
                                    <button type="button" class="btn btn-warning">Editar</button>
                                    <button type="button" class="btn btn-success">Ver</button>
                                </div>
                            </td>

                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
