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
		<form action="/registroestudent" method="Post">
			<div class="row">
				@csrf

				<div class="col-md-4"><label for="cireg" class="form-label">CI:</label>
				<input type="file" name="cireg"   class="form-control " id="cireg" name="cireg" >
			<div class="valid-feedback">

<button onclick="return val_camp(); "type="submit" class="btn btn-success btn-block mt-3 mb-2"><b>Guardar</b> </button>





</div>
@endsection
