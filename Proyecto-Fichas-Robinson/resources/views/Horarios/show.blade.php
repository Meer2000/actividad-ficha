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
                    <H3>historial de entrada y salida de </H3>
                </div>

                <div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> Numero de fecha</th>
                            <th scope="col">Hora de entrada</th>
                            <th scope="col">Hora de salida</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>08:00</td>
                            <td>17:00</td>

                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
