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
                <h3>Gestionar Entrada y Salida del aprendiz michell</h3>
                <div class="mb-3">
                    <label for="nombres" id="nombres" class="form-label">nombres</label>
                    <input type="text" class="form-control" id="nombres" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">apellido</label>
                    <input type="text" class="form-control" id="apellidos" aria-describedby="emailHelp">
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
                    <input type="text" class="form-control" id="apellidos" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="fichas_id" class="form-label">Numero de ficha:</label>
                    <input type="text" class="form-control" id="apellidos" aria-describedby="emailHelp">

                </div>
            </form>

            <form>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" style="float:right">Crear</button>
                </div>
            </form>

        </div>
        <div class="mb-3">
            <label for="fichas_id" class="form-label">hora de entrada</label>
            <input type="text" class="form-control" id="apellidos" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="fichas_id" class="form-label">hora de salida:</label>
            <input type="text" class="form-control" id="apellidos" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" style="float:right">Crear</button>
        </div >
        <div class="col-md-2"></div>
    </div>




@endsection
