@extends('layouts.menu')

@section('menu')
<div class="container">
	<div class="text-center">
		<h2 class="text-primary">Registro de documentos</h2>
		<br>
	</div>

<div class="text-centet">
          <p id="error"> </p>
        </div>
	<hr class="divider my-4 bg-primary ">


@if(session('agregar'))
<div class="alert alert-danger">
	{{session('agregar')}}
</div>

@endif

		<br>
		<form action="{{route ('image.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">


				<div class="col-md-3"><label for="cireg" class="form-label">fotocopia de CI:</label>
				<input type="file"    class="form-control " id="cireg" name="cireg" accept="image/*" >
				@error('cireg')
				<small class="text-danger">{{$message}}</small>
				@enderror
			</div>
			<div class="col-md-3">
				<label for="" class="form-label">Solvencia academica:</label>
				<input type="file"   class="form-control " id="solvencia_academica" name="solvencia_academica" accept="image/*" >
				@error('solvencia_academica')
				<small class="text-danger">{{$message}}</small>
				@enderror
			</div>
			<div class="col-md-3"><label for="" class="form-label">Culminacion del servicio social comunitario:</label>
				<input type="file"    class="form-control " id="serviciocomunitario" name="serviciocomunitario" accept="image/*" >
				@error('serviciocomunitario')
				<small class="text-danger">{{$message}}</small>
				@enderror
			</div>

			</div>

<button onclick="return val_camp(); "type="submit" class="btn btn-success btn-block mt-3 mb-2"><b>Guardar</b> </button>





</div>
@endsection
