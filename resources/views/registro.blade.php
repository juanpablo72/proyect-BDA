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
		<form action="/upload" method="Post">
			@csrf
			<div class="row">


				<div class="col-md-3"><label for="cireg" class="form-label">fotocopia de CI:</label>
				<input type="file"    class="form-control " id="cireg" name="cireg" >
			</div>
			<div class="col-md-3">
				<label for="cireg" class="form-label">Solvencia academica:</label>
				<input type="file"   class="form-control " id="solvencia_academica" name="solvencia_academica" >
			</div>
			<div class="col-md-3"><label for="cireg" class="form-label">Culminacion del servicio social comunitario:</label>
				<input type="file"    class="form-control " id="serviciocomunitario" name="serviciocomunitario" >
			</div>
			<div class="col-md-3">
				<label for="cireg" class="form-label">Acta de evaluacion de las pasantias:</label>
				<input type="file" name="actapasantias"   class="form-control " id="actapasantias"  >
			</div>
			</div>
			<div class="row mt-2 mb-2">


				<div class="col-md-3"><label for="cireg" class="form-label">certificado de pasantias:</label>
				<input type="file"  class="form-control " id="certificadopasantias" name="certificadopasantias" >
			</div>
			<div class="col-md-3"><label for="cireg" class="form-label">Acta de defensa de trabajo especial de grado</label>
				<input type="file"    class="form-control " id="defensadegrado" name="defensadegrado" >
			</div>
			<div class="col-md-3"><label for="cireg" class="form-label">Constancia de practicas educaticas:</label>
				<input type="file"    class="form-control " id="practicaseducativas" name="practicaseducativas" >
			</div>
			<div class="col-md-3"><label for="cireg" class="form-label">Acta Pasantias Hospitalarias y Comunitarias</label>
				<input type="file"    class="form-control " id="pasantiashosp" name="pasantiashosp" >
			</div>
			</div>
			<div class="row mt-2 mb-2">


				<div class="col-md-3"><label for="cireg" class="form-label">Comunicacion relacionada en caso de reingreso translado o equivaencia</label>
				<input type="file" name="cireg"   class="form-control " id="transladooreingro" name="transladooreingro" >
			</div>
			<div class="col-md-3"><label for="cireg" class="form-label">Reconocimiento o amonestaciones</label>
				<input type="file"    class="form-control " id="amonestaciones" name="amonestaciones" >
			</div>
			<div class="col-md-3"><label for="cireg" class="form-label">Fondo Negro del titulo de bachiller</label>
				<input type="file"   class="form-control " id="fondonegro" name="fondonegro" >
			</div>
			<div class="col-md-3"><label for="cireg" class="form-label">fotocopia simple del titulo de bachiller</label>
				<input type="file"   class="form-control " id="capiatitulo" name="capiatitulo" >
			</div>
			</div>
			<div class="row mt-2 mb-2">


				<div class="col-md-3"><label for="cireg" class="form-label">Copia de notas</label>
				<input type="file"   class="form-control " id="copiadenotas" name="copiadenotas" >
			</div>
			<div class="col-md-3"><label for="cireg" class="form-label">Copia de partida de nacimiento</label>
				<input type="file"    class="form-control " id="copiadepartnacimiento" name="copiadepartnacimiento" >
			</div>
			<div class="col-md-3"><label for="cireg" class="form-label">Planilla de inscripcion de la Rusny</label>
				<input type="file" name="cireg"   class="form-control " id="pla_inscripcion" name="pla_inscripcion" >
			</div>
			<div class="col-md-3"><label for="cireg" class="form-label">Fotocopia de la planilla de registro militar</label>
				<input type="file"  class="form-control " id="regmilitar" name="regmilitar" >
			</div>
			</div>

<button onclick="return val_camp(); "type="submit" class="btn btn-success btn-block mt-3 mb-2"><b>Guardar</b> </button>





</div>
@endsection
