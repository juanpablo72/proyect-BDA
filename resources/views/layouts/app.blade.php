<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="stylesheet" href=" {{asset( 'css/bootstrap.css')}} ">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/style_navbar.css') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  degradado shadow-sm">
            <div class="container">





                <div class="col-md-3">
                    <a class="navbar-brand text-light" href="/">Registro de proceso de grado</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <div class="dropdown">
  <button class="btn btn-outline-success dropdown-toggle"  style="border-radius: 20px; " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <b>{{ Auth::user()->name }}</b>

  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li> <a class="dropdown-item btn btn-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>


     @role('admin')
   <li><a class="dropdown-item" href="/admin">admin</a></li>
   @else

@endrole


  </ul>
</div>



                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="mt-2">
            @yield('content')
        </main>
    </div>











    <div class="text-center mt-3 bg-primary">
      <h2 class="text-light">Registro de Graduandos
        <br><hr class="divider my-4 bg-primary ">

</h2>
    </div>


    <div class="text-center mt-2 mb-2">

    </div>
<div class="row mb-4">
  <div class="col-md-4 col-sm-12">
    <img class="ml-5" src="{{asset('img/escudo.gif')}}   " style="height: 80px;width: 84px; margin-left: 110px" alt="">
  </div>
  <div class="col-md-4 col-sm-12">
    <div class="text-center">
      <div class="row text-primary" style=" margin-left: 110px" ><b>Realizado por Juan Pablo Morales Contreras</b></div>

      <div class=" ml-5 row text-dark" style=" margin-left: 210px">Desing byJpMc</div>
    </div>
  </div>

</div>
<script type="" src="js/rng.js"></script>
<script type="text/javascript" src="js/Alerts.js"></script>
<script src="js/get_user.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src=" js/validations_newuser.js "></script>




</body>
</html>
