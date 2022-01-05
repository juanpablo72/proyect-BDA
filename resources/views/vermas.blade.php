@extends('layouts.menu')

@section('menu')
<div class="container">
	<div class="text-center">
		<h4 class="text-primary mb-2 mt-2"><b>Datos Estudiante: {{$result->ciest}}</b></h4>
	</div>
<H3>Datos estudiante:</H3>
	<div class="row">
		<div class="col-md-4"><label for=""><b>Nombre:</b> </label>{{$result->nombre}}</div>
		<div class="col-md-4"><label for=""><b>apellido: </b></label>{{$result->apellidos}}</div>
		<div class="col-md-4"><label for=""><b>Edad:</b> </label>
			{{$result->edad}}
		</div>
	</div>
	<div class="row">
		<div class="col-md-4"><label for=""><b>correo: </b></label>{{$result->correo}}</div>
		<div class="col-md-4"><label for=""><b>lugar de nacimiento:</b>  </label>{{$result->lugarnac}}</div>
		
	</div>
	<br>
	<H3>Datos Academicos:</H3>
	<div class="row">
		<div class="col-md-4"><label for=""><b>Año: </b></label>{{$result2->codmat}}</div>
		<div class="col-md-4"><label for=""><b>seccion:</b>  </label>{{$result2->secmat}}</div>
		
	</div>
	<H3>Datos del representante:</H3>
	<div class="row">
		<div class="col-md-4"><label for=""><b>Nombre del representante</b>  </label>{{$result1->nombrerep}}</div>
		<div class="col-md-4"><label for=""> <B>ci del representante</B> </label>{{$result1->ci}}</div>
		<div class="col-md-4"><label for=""><B>telefono:</B>  </label>{{$result1->telefono}}</div>
		
	</div>
	<div class="row">
		<div class="col-md-4"><label for=""><B>direccion del representante</B> </label>{{$result1->direccion}}</div>
		
		
	</div>
</div>


@endsection