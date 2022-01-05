@extends('layouts.menu')

@section('menu')
<div class="container">
    <div class="row justify-content-center">
        
            
            <div class="text-center">
    <h3>Estudiantes registrados</h3>
</div>
<br>


<div class="container">
@if(session('eliminar'))
<div class="alert alert-danger">
  {{session('eliminar')}}
</div>

@endif
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">ci</th>
      <th scope="col">nombres</th>
      <th scope="col">apellidos</th>
      <th scope="col">edad</th>
      <th scope="col">año</th>
      <th scope="col">seccion</th>
      <th scope="col">telefono</th>
      <th scope="col">correo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
@foreach( $datos as $item )
      </td>
     
    </tr>
    <tr>
      <th scope="row">#</th>
      <th >{{$item->ciest}}</th>
      <th >{{$item->nombre}}</th>
      <th >{{$item->apellidos}}</th>
      <th >{{$item->edad}}</th>
      <th >{{$item->codmat}}</th>
      <th >{{$item->secmat}}</th>
      <th >{{$item->telefono}}</th>
      <th >{{$item->correo}}</th>
      <td>
        <a href="/vermas/{{$item->id}}"  class="btn-sm  btn  btn-primary"> ver mas</a>  

<a href="/modificar/{{$item->id}}" class="btn-sm btn  btn btn-success">modificar</a>  
      
    <a href="/eliminarestudiante/{{$item->id}}" class="btn-sm btn btn-danger">eliminar</a>  
      </td>
      

    @endforeach
   
  </tbody>
</table>




</div>
        </div>
    </div>

@endsection
