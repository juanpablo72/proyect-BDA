@extends('layouts.menu')

@section('menu')
<div class="container">
	<div class="text-center">
		<h2 class="text-primary">Registro de nuevos Estudiantes</h2>
		<br>
	</div>

<div class="text-centet">
          <p id="error"> </p>
        </div> 
	<hr class="divider my-4 bg-primary ">
<h4>Datos del Estudiante</h4>
	
@if(session('agregar'))
<div class="alert alert-danger">
	{{session('agregar')}}
</div>

@endif
		
		<br>
		<form action="/registroestudent" method="Post">
			<div class="row">
				@csrf
				<div class="col-md-4"><label>CI:</label>
				<input type="number" name="cireg" placeholder="Ingrese ci estudiante"  class="form-control " id="cireg" >
			<div class="valid-feedback">
        Looks good!
      </div></div>
				<div class="col-md-4"><label>NOMBRE:</label>
				<input type="text" name="nombreg" placeholder="Ingrese nombre del estudiante" id="nomreg" class="form-control"></div>
				<div class="col-md-4"><label>APELLIDO:</label>
				<input type="text" name="apelreg" placeholder="Ingrese apellido del estudiante" id="apelreg" class="form-control"></div>
</div>
			
<div class="row mt-3">
				<div class="col-md-4"><label>EDAD:</label>
				<input type="number" name="edadreg" placeholder="Ingrese edad estudiante" id="edadreg" class="form-control"></div>
				<div class="col-md-4"><label>LUGAR DE NACIMIENTO:</label>
				<input type="text" name="nacreg" placeholder="Ingrese lugar de nacimiento del estudiante" id="nacreg" class="form-control"></div>
				<div class="col-md-4"><label>CORREO:</label>
				<input type="text" name="mailreg" placeholder="Ingrese Correo del estudiante" id="mailreg" class="form-control"></div>
</div>
<br>
<h4>Datos Academicos</h4>
<div class="row ml-5">
				
<div class="col-5 mr-2">
	<label for=""><b>Año:</b></label>
	<select class="form-control ml-5" name="Areg" id="Areg">
   <option value="1">1</option> 
   <option value="2">2</option> 
   <option value="3">3</option>
   <option value="4">4</option> 
   <option value="5">5</option> 
 
</select>
</div>
<br>
<div class="col-5 ml-5">
	<label for=""><b>Seccion</b></label>
	<select class="form-control" name="seccreg" id="seccreg">
   <option value="A">A</option> 
   <option value="B">B</option> 
   <option value="C">C</option>
   <option value="D">D</option> 
   <option value="E">E</option> 
 
</select>
</div>

				
				
</div>
<br>
<h4>Datos del Representante</h4>
<div class="row">
				<div class="col-md-3"><label>CI REPRESENTANTE:</label>
				<input type="number" name="cirepreg" placeholder="Ingrese ci Representante" id="cirepreg" class="form-control"></div>
				<div class="col-md-3"><label>NOMBRE REPRESENTANTE:</label>
				<input type="text" name="nombrepreg" placeholder="Ingrese nombre del Representante" id="nomrepreg" class="form-control"></div>
				<div class="col-md-3"><label>DIRECCION:</label>
				<input type="text" name="dirreg" placeholder="Ingrese Direccion de habitacio" id="direc" class="form-control"></div>
				<div class="col-md-3"><label>TELEFONO:</label>
				<input type="text" name="telefono" placeholder="Ingrese telefono" id="telefono" class="form-control"></div>
				
</div>

<button onclick="return val_camp(); "type="submit" class="btn btn-success btn-block mt-3 mb-2"><b>Guardar</b> </button>

		
		
	
	
</div>
@endsection