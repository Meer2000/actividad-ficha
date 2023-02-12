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
                <h3>CREAR NUEVO APRENDIZ</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellido</label>
                    <input type="text" name="Apellido" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefono</label>
                    <input type="nimber" name="telefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="Fecha de nacimiento" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tipo de documento</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">Hacer un foreach</option>
                    </select>
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
                </div >
            </form>
        </div>
    </div>


    <div class="col-md-2"></div>


    </div>
@endsection
