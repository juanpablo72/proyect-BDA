@extends('layouts.menu')

@section('menu')
<div class="container">
<div class="text-center">
	<div class="row">
		
		<div class="col-md-6">
			<h1><b>AÑO:</b> <span class="text-primary">{{$year}}</span></h1>
		</div>
		<div class="col-md-6">
			<h1><b>Seccion:</b> <span class="text-primary">{{$seccion}}</span></h1>
		</div>
	</div>
</div>

@foreach( $result as $item )
<br>
<div class="container">
<div class="card">
	<div class="row">
		<div class="col-md-3">
			<label for=""><b>Nombres:</b></label>
			<h5>{{$item->nombre}}</h5>
		</div>
		<div class="col-md-3">
<label for=""><b>Apellidos:</b></label>
<h5>{{$item->apellidos}}</h5>
		</div>
		<div class="col-md-3">
<label for=""><B>CI:</B></label>
<h5>{{$item->ciest}}</h5>
		</div>
		<div class="col-md-3">
<label for="">	<b>Edad:</b></label>
<h5>{{$item->edad}}</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
<label for=""><b>Correo electronico:</b></label>
<h5>{{$item->correo}}</h5>
		</div>
		<div class="col-md-3">
<label for="">Lugar de Nacimiento</label>
<h5>{{$item->correo}}</h5>
		</div>
		<div class="col-md-3">
<label for=""><b>Año:</b></label>
<h5>{{$item->codmat}}</h5>
		</div>
		<div class="col-md-3">
<label for=""><b>Seccion</b></label>
<h5>{{$item->secmat}}</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
<label for=""><b>Nombre del Represntante:</b></label>
<h5>{{$item->nombrerep}}</h5>
		</div>
		<div class="col-md-3">
<label for="">CI del Representante:</label>
<h5>{{$item->cirep}}</h5>
		</div>
		<div class="col-md-3">
<label for=""><b>Telefono:</b></label>
<h5>{{$item->telefono}}</h5>
		</div>
		<div class="col-md-3">
<label for=""><b>Direccion:</b></label>
<h5>{{$item->correo}}</h5>
		</div>
	</div>

</div>
</div>
 @endforeach
 </div>
@endsection
