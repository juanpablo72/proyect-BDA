<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/prac.css">
    <link rel="stylesheet" href="icon.css">
    </head>
    <body class="antialiased">




<section class="page-section" id="inicio">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">

                <div class="col-md-2">
                    logo

                </div>
                <div class="col-md-3">
                    <a class="navbar-brand text-light" href="/">algo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="col-md-5">


                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">


                            <div class="btn-group" role="group">


@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6  sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn   ml-2" style="border-color: #fff;border-radius: 20px; color: #fff;">Home</a>
                    @else
                        <div class="dropdown ml-5">
                                    <button class="btn  dropdown-toggle ml-2" style="border-color: #fff;border-radius: 20px; color: #fff;" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="icon icon-user"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="{{ route('login') }}" class="text-sm btn-block btn btn-success"><b>Iniciar sesion</b></a>
                                        </li>

                                    </ul>
                                </div>



                    @endauth
                </div>
            @endif






                            </div>
                        </div>
                    </div>
        </nav>




        </div>
        </div>


    </section>

    <section id="pie_pag" class="mb-2">
        <div class="text-center mt-3">
            <h2 class="text-primary">Pagina de bda

            </h2>
        </div>
        <hr class="divider my-4 bg-primary ">


        <div class="row mb-4">
            <div class="col-md-4 col-sm-12">
                <img class="ml-5" src="img/escudo.gif" style="height: 80px;width: 84px; margin-left: 110px" alt="">
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="text-center">
                    <div class="row text-primary" style=" margin-left: 110px">Realizado por Juan Pablo Morales Contreras</div>

                    <div class=" ml-5 row text-dark" style=" margin-left: 210px">Desing byJpMc</div>
                </div>
            </div>
            <
        </div>

    </section>
        </div>

        <script src="js/validaciones_login.js" type="text/javascript"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    </body>
</html>
