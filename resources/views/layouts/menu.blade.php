@extends('layouts.app')

@section('content')





<div class="container">
  @guest
      @if (Route::has('login'))
      @endif
      @else
    <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="border-radius: 25px;">
  <div class="container-fluid ml-5" >



<div class="collapse navbar-collapse " id="navbarNav">
  <div class="ml-5">
    <div class="ml-5">
       <div class="ml-5">
      <div class="ml-5 "  >
        <ul class="navbar-nav ml-5">
        <li class="nav-item">

           @role('admin')


        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/registrar"><b>gestion de grados</b> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/registrar"><b>manejo de registro fotografico</b> </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/registrar"><b>gestion de Documentos</b> </a>
        </li>

   @else
<li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/registrar"><b>carga de documentos</b> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="/registrar"><b>Ver estatus de documentos</b> </a>
        </li>
@endrole

      </ul>
      </div>
    </div>

</div>
  </div>
        </div>

  </div>
</nav>
 @endguest
</div>


<br>





@yield('menu')

@endsection
