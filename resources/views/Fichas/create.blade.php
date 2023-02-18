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
            <form action="{{route('Fichas.store')}}" method="post">
                @csrf
                @method('POST')
                <h3>CREAR FICHA FORMACIÓN</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Numero de ficha</label>
                    <input type="number" name="nombre" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="mb-3">

                    <label for="Tipo_Programa_id" class="form-label">Tipo de Programa</label>
                    <select class="form-select" name="Tipo_Programa_id" id="Tipo_Programa_id">


                        @foreach($Tipo_Programas as $Tipo_Programa)
                            <option value="{{$Tipo_Programa->id}}">{{$Tipo_Programa->nombre}}</option>
                        @endforeach

                    </select>


                <div class="mb-3">

                    <label for="Programas_id" class="form-label">¿En que programa desea asociarla?</label>
                    <select class="form-select" name="Programas_id" id="Programas_id">


                        @foreach($Programas as $Programa)
                            <option value="{{$Programa->id}}">{{$Programa->nombre}}</option>
                        @endforeach

                    </select>

                </div>

                <div class="mb-3">

                    <label for="Trimestre_id" class="form-label">¿En que Trimestre?</label>
                    <select class="form-select" name="Trimestre_id" id="Trimestre_id">


                        @foreach($Trimestres as $Trimestre)
                            <option value="{{$Trimestre->id}}">{{$Trimestre->nombre}}</option>
                        @endforeach

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
