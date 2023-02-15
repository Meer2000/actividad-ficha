@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">

                <a href="{{route('Aprendices.create')}}" class="list-group-item list-group-item-action">Crear
                    aprendiz</a>
                <a href="{{route('Aprendices.index')}}" class="list-group-item list-group-item-action">Listar
                    aprendices</a>
            </div>

        </div>

        <div class="col-md-8">
            <form action="{{route('Aprendices.store')}}" method="post">
                @csrf
                @method('POST')
                <h3>CREAR NUEVO APRENDIZ</h3>
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" name="nombres" class="form-control" id="nombres" required>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" id="apellidos" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="number" name="telefono" class="form-control" id="telefono" required>
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="fecha" class="form-control" id="fecha"
                           required>
                </div>
                <div class="mb-3">
                    <label for="documento" class="form-label">Numero de Documento</label>
                    <input type="number" name="documento" class="form-control" id="documento"
                           required>
                </div>

                <h4>Asigancion de ficha</h4>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Programa de formacion</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">hacer foreach</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Numero de ficha</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">hacer foreach</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary" style="float:right">Crear</button>
                </div>
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>

@endsection
