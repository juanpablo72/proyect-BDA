@extends('layouts.menu')

@section('menu')
<div class="text-center">
	<h3 class="text-primary">Modificar  Usuarios</h3>
 
</div>
<div class="row justify-content-center">
    <div class="col-3">
     
    @if(session('agregar'))
<div class="alert alert-success">
	{{session('agregar')}}
</div>

@endif
	<br>
<p id="error"> </p>
<div class="row">


	@if($errors->any())
	<h5 class="text-center text-danger"><b>CAMBIOS NO GUARDADOS
		<br>
	Vuelva agregar los nuevos valores!</b></h5>

	@foreach($errors->all() as $error)
	

<div class="alert alert-danger alert-dismissible">
 
<p>{{$error}}
	</p>
</div>
	
	@endforeach
	@endif
	<div class="col-md-9">
		<form action="{{route('update' , $editar->id)}}" method="POST">
		@csrf
		<div class="form-group ">
			<input class="form-control form-control-md" type="text" name="name" value="{{$editar->name}}" id="usuarioreg">
		</div>
		
		<div class="form-group">
			<input  class="form-control form-control-md"type="email" name="email" value="{{$editar->email}}" id="correoreg">
		</div>
		
		<div class="form-group">
			<input class="form-control form-control-md" type="password" name="password" id="passw1" value="{{$editar->password}}">
		</div>
		
		
		<div class="form-group">
			<input  onclick="return valreg();" type="submit" name="" value="Modificar" class="btn btn-success btn-block">
		</div>
		
	</form>
	</div>
</div>


	
</div>
</div>
  </div>

@endsection