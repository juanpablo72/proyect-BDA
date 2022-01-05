@extends('layouts.menu')

@section('menu')




<div class="container">
<div class="text-center">
<h1 class="text-primary">Administrador de Usuarios</h1>

</div>
<a href="/nuevo"  class="btn btn-success"> nuevo usuario</a>
<br>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">usuario</th>
      <th scope="col">Correo</th>
      
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    
     @foreach( $datos as $item )
      </td>
     
    </tr>
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      
      
      <td>
      
      
<a href="{{route('edit',$item->id)}}" class="btn-sm  btn btn-primary"> modificar</a>
  <a href="{{route('eliminar',$item->id)}}"  class="btn-sm btn btn-danger"> eliminar  </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>





    

@endsection