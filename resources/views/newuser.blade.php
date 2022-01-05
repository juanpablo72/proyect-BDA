@extends('layouts.menu')

@section('menu')
<div class="text-center">
	<h3 class="text-primary">Registro de Usuarios</h3>
 
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
	<div class="col-md-9">
		<form action="{{route('agregaruser')}}" method="POST">
		@csrf
		<div class="form-group ">
			<input class="form-control form-control-md" type="text" name="name" placeholder="nombre" id="usuarioreg">
		</div>
		
		<div class="form-group">
			<input  class="form-control form-control-md"type="text" name="email" placeholder="correo" id="correoreg">
		</div>
		
		<div class="form-group">
			<input class="form-control form-control-md" type="password" name="password" id="passw1" placeholder="contraseña">
		</div>
		
		<div class="form-group">
			<input class="form-control form-control-md" type="password" name="pass2" id="passw2" placeholder=" verifique su contraseña">
		</div>
		<div class="form-group">
			<input  onclick="return valreg();" type="submit" name="" value="registrar" class="btn btn-success btn-block">
		</div>
		
	</form>
	</div>
</div>


	
</div>
</div>
  </div>

@endsection