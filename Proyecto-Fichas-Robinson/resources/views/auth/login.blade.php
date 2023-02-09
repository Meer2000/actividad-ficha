@extends('layouts.guest')
@section('title', 'Iniciar Sesión')
@section('content')
    <header class="headers" style="">
        <div class="inner-top d-flex justify-content-center justify-content-sm-center justify-content-md-between justify-content-lg-between" >
                <a href="{{url('auth.login')}}" id="logo-sena" class="img-fluid" title="Logo Sena"></a>

                <div class="d-none d-sm-none d-md-block">
                    <input class="img-fluid " type="image" style="height: 127px; margin-top: -12px; " name="imgbtn" src="{{url('../../recursos/img/login-via-microsoft.png')}}" id="">
                </div>


        </div>
    </header>
    <div class="linea"></div>
    <main style="height: 75vh">
        <div id="content" style="background-color: #ffffff">
            <div class="inner-mid d-flex align-items-center justify-content-center">
                <div class="container col-sm-12 col-lg-5 form-container-login">
                    <form action="">
                        <div class="" style="background: white;">
                            <div class="title-content mb-4">
                                <p>Ingreso Usuarios registrados</p>
                            </div>
                            <div class="content-login">
                                <div class="form-floating  mb-3 ">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">Correo Electronico</label>
                                </div>
                                <div class="form-floating ">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" required>
                                    <label for="floatingPassword">Contraseña</label>
                                </div>
                                <div>
                                    <p><i></i>¿Olvidé mi contraseña?</p>
                                </div>
                                <div class="d-flex justify-content-center mt-3 mb-3">
                                    <button type="submit" class="btn btn-outline-success">Ingresar</button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <footer class="footer-login" style="font-size: 14.3px; max-height: 100vh!important; height: 10%!important;">
        <div class="d-flex justify-content-center align-items-center" style="height: 8%;">
            <div class="row ">
                <div class="col-12 col-md-3 col-lg-2">
                    <p><I></I>Sena ADSI</p>
                </div>
                <div class="col-12 col-md-6 col-lg-8">
                    <P>Sena ADSI 2023 &#169; Todos los derechos son reservados </P>
                </div>
                <div class="col-12 col-md-3 col-lg-2">
                    <p>V1.1.15373</p>
                </div>
            </div>
        </div>

    </footer>

@endsection
