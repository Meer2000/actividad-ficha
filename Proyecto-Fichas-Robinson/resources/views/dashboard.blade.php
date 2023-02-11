@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <header class="headers" style="">
        <div class="inner-top d-flex justify-content-center justify-content-sm-center justify-content-md-between justify-content-lg-between" >
            <a href="{{url('auth.login')}}" id="logo-sena" class="img-fluid" title="Logo Sena"></a>

            <div class="d-none d-sm-none d-md-block">
                <a class="waves-effect waves-dark" onclick="document.getElementById('cerrar').submit()" >
                    <i class="fa fa-sign-out"></i>
                    <span class="hide-menu">Cerrar Sesión</span>
                </a>
            </div>


        </div>
    </header>
@endsection
