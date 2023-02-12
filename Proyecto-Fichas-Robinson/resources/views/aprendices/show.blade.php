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
                    <H3>detalles del aprendiz</H3>
                </div>

                <div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">nombre</th>
                            <th scope="col">apellido</th>
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
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>escarraga</td>
                            <td>prueba@gmail.com</td>
                            <td>45555544</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection