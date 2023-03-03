@extends('layouts.app')
@section('content2')

    <div class="row" style="margin-top:5%">
        <div class="col-md-2">
            <div class="list-group">
                <a href="{{route('Aprendices.create')}}"
                   class="list-group-item list-group-item-action list-group-item-primary">Crear
                    aprendiz</a>
                <a href="{{route('Aprendices.index')}}"
                   class="list-group-item list-group-item-action list-group-item-warning">Listar
                    aprendiz</a>
            </div>
            <br><br><br>
            <div class="col-md-12">

                @if(Session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                    </div>
                @endif

            </div>
        </div>

        <div class="col-md-10">
            <form action="" method="get">
                <div class="row">
                    <div class="col-md-4">
                        <input type="search" class="form-control" name="q" value="{{request()->get('q')}}"
                               placeholder="Buscar Documento">
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary">Buscar</button>
                    </div>
                </div>
            </form>
            <br>
            <div class="row">

                <div class="col-md-9">

                    <H3>LISTA DE APRENDICES</H3>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3" style="max-width: 500px; margin: 0 auto;">
                                <div class="custom-file text-left">
                                    <input type="file" name="file" class="custom-file-input" id="customFile" required>
                                </div>
                            </div>
                            <button class="btn btn-primary">Import data</button>

                        </form>
                    </div>
                    <div class="col-md-9"><br><br>
                        <a class="btn btn-success" href="{{ route('export') }}" style="float: right">Export data</a>

                    </div>


                    <!--       <br>
                  <div>
                   <a href="{{route('import')}}" type="button" class="btn btn-success ">IMPORTAR</a> >

                </div>
                    <a href="{{route('export')}}" type="button" class="btn btn-success ">EXPORTAR</a>
                </div>-->

                </div>


                <div class="table-responsive">
                    <table class="table table-striped table-info  ">
                        <thead>
                        <tr>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">fecha de nacimiento</th>
                            <th scope="col">Numero de documento</th>
                            <th scope="col">Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Aprendices as $Aprendiz)
                            <tr>

                                <td>{{$Aprendiz ->nombres}}</td>
                                <td>{{$Aprendiz ->apellidos}}</td>
                                <td>{{$Aprendiz ->email}}</td>
                                <td>{{$Aprendiz ->telefono}}</td>
                                <td>{{$Aprendiz ->fecha}}</td>
                                <td>{{$Aprendiz ->documento}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-danger">Inhabilitar</button>
                                        <a href="{{route('Aprendices.edit',$Aprendiz->id)}}"
                                           class="btn btn-warning">Editar</a>
                                        <a href="{{route('Aprendices.show',$Aprendiz->id)}}"
                                           class="btn btn-success">Ver</a>
                                    </div>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                    {{$Aprendices->links()}}

                </div>


            </div>
        </div>
    </div>

@endsection
