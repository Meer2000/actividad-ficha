<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Sena Sistemas de Información</title>
    <link rel="stylesheet" href="{{url('../../recursos/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


</head>
<body>

<form action="{{route('logout')}}" method="post" id="cerrar">
    @csrf
</form>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark  " style="background-color: #F78C0C ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('dashboard')}}"><img class="img-fluid" src='img/logoSenas.png' alt=""
                                                                       style="max-width: 50px;"></a>



            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{route('Horarios.index')}}">Ingreso/Salida del
                            aprendiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{route('Aprendices.create')}}">crear
                            aprendiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{route('Fichas.create')}}">crear ficha
                            tecnica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{route('Fichas.index')}}">listar fichas</a>
                    </li>


                </ul>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-light">Cerrar sesión</button>
                </form>
            </div>
        </div>


    </nav>

    @yield('content2')
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $(".alert-dismissible").fadeTo(5000, 500).slideUp(500, function(){
            $(".alert-dismissible").alert('close');
        });

        $('[data-toggle="tooltip"]').tooltip({
            trigger : 'hover'
        });
    });
</script>


</body>
</html>
