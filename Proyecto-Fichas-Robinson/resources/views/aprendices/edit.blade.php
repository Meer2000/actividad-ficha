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
            <form>
                <h3>EDITAR APRENDICES</h3>
                <div class="mb-3">
                    <label for="nombres" id="nombres" class="form-label">nombres</label>
                    <input type="text" class="form-control" id="nombres" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">apellido</label>
                    <input type="text" class="form-control" id="apellidos" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">correo</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefono</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="fecha de nacimiento" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha de nacimiento" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="numero de documento" class="form-label">numero de documento</label>
                    <input type="number" class="form-control" id="numero de documento" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <h3>Asignacion de ficha</h3>
                </div>
                <div class="mb-3">
                    <label for="fichas_id" class="form-label">Programa de formacion:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">hacer foreach</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fichas_id" class="form-label">Numero de ficha:</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">hacer foreach</option>
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" style="float:right">Crear</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>




@endsection
