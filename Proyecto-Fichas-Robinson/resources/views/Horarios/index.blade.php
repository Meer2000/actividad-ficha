@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">
                <a href="{{route('Horarios.create')}}" class="list-group-item list-group-item-action">Crear</a>
                <a href="{{route('Horarios.index')}}" class="list-group-item list-group-item-action">Listar</a>
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

                            <th scope="col">Nombre de aprendiz</th>
                            <th scope="col">Numero de ficha </th>
                            <th scope="col">Programa de formación </th>
                            <th scope="col">numero de documento</th>
                            <th scope="col">Hora de entrada </th>
                            <th scope="col">Hora de salida</th>
                            <th scope="col">Entrada / Salida</th>
                            <th scope="col">Hitorial</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>2338319</td>
                            <td>ADSI</td>
                            <td>1020030040</td>
                            <td>08:00</td>
                            <td>17:00</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-success">Añadir</button>
                                </div>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-warning">Detalles</button>
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
