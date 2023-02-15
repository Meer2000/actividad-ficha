@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">

        <div class="col-md-2">
            <div class="list-group">

                <a href="{{route('Aprendices.create')}}" class="list-group-item list-group-item-action">Crear aprendiz</a>
                <a href="{{route('Aprendices.index')}}" class="list-group-item list-group-item-action">Listar aprendices</a>
            </div>

        </div>

        <div class="col-md-8">
            <form action="{{route('Aprendices.update',$Aprendiz->id)}}" method="post">
                @csrf
                @method('PUT')
                <h3>EDITAR APRENDICES</h3>
                <div class="mb-3">
                    <label for="nombres" id="nombres" class="form-label">nombres</label>
                    <input type="text" name="nombres" value="{{$Aprendiz->nombres}}" class="form-control" id="nombres" required>
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">apellido</label>
                    <input type="text" name="apellidos" value="{{$Aprendiz->apellidos}}" class="form-control" id="apellidos" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">correo</label>
                    <input type="email" name="email" value="{{$Aprendiz->email}}" class="form-control" id="email"  required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="number"  name="telefono" value="{{$Aprendiz->telefono}}" class="form-control" id="telefono" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="fecha de nacimiento" class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="fecha" value="{{$Aprendiz->fecha}}" class="form-control" id="fecha de nacimiento" required>
                </div>
                <div class="mb-3">
                    <label for="numero de documento" class="form-label">numero de documento</label>
                    <input type="number" name="documento" value="{{$Aprendiz->documento}}" class="form-control" id="numero de documento" required>
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
                    <button type="submit" class="btn btn-primary" style="float:right">Actualizar</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>




@endsection
