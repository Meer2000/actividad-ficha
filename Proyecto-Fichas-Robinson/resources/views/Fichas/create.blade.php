@extends('layouts.app')
@section('content2')
    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">

                <a href="{{route('Fichas.create')}}" class="list-group-item list-group-item-action">Crear ficha</a>
                <a href="{{route('Fichas.index')}}" class="list-group-item list-group-item-action">Listar</a>
            </div>

        </div>

        <div class="col-md-8">
            <form>
                <h3>CREAR FICHA FORMACIÓN</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Numero de ficha</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" >
                </div>
                @foreach($Fichas as $Ficha)
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nivel formativo</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">{{$Ficha ->nombre}}</option>
                    </select>
                </div>
                @endforeach

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">¿En que programa se encuentra?</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1"></option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">¿Trimestre actual?</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1"></option>
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
