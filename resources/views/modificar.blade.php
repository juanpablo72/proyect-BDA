@extends('layouts.menu')

@section('menu')

<div class="text-centet">
          <p id="error"> </p>
          @if($errors->any())
   

   @foreach($errors->all() as $error)
   

<div class="alert alert-danger alert-dismissible">
 
<p>{{$error}}
   </p>
</div>
   
   @endforeach
   @endif




  <div class="container">
  	 @if(session('agregar'))
<div class="alert alert-success">
	{{session('agregar')}}
</div>

@endif
  </div>
        </div> 
        <br>
<form action="{{route('cambiodatos' , $result->id)}}" method="POST">
	<div class="container">
	
<div class="row">

				@csrf
				<div class="col-md-4"><label>CI:</label>
				<input type="number" name="cireg" value="{{$result->ciest}}"  class="form-control " id="cireg" >
			<div class="valid-feedback">
        Looks good!
      </div></div>
				<div class="col-md-4"><label>NOMBRE:</label>
				<input type="text" name="nombreg" value="{{$result->nombre}}" id="nomreg" class="form-control"></div>
				<div class="col-md-4"><label>APELLIDO:</label>
				<input type="text" name="apelreg" value="{{$result->apellidos}}" id="apelreg" class="form-control"></div>
				</div>

			
<div class="row mt-3">
				<div class="col-md-4"><label>EDAD:</label>
				<input type="number" name="edadreg" value="{{$result->edad}}" id="edadreg" class="form-control"></div>
				<div class="col-md-4"><label>LUGAR DE NACIMIENTO:</label>
				<input type="text" name="nacreg" value="{{$result->lugarnac}}" id="nacreg" class="form-control"></div>
				<div class="col-md-4"><label>CORREO:</label>
				<input type="text" name="mailreg" value="{{$result->correo}}" id="mailreg" class="form-control"></div>
</div>
<br>
<h4>Datos Academicos</h4>
<div class="row">
				

<select name="Areg" id="Areg">
	<option value="{{$result2->codmat}}">{{$result2->codmat}}</option>
   <option value="1">1</option> 
   <option value="2">2</option> 
   <option value="3">3</option>
   <option value="4">4</option> 
   <option value="5">5</option> 
 
</select>
<select name="seccreg" id="seccreg">
   <option value="A">A</option> 
   <option value="B">B</option> 
   <option value="C">C</option>
   <option value="D">D</option> 
   <option value="E">E</option> 
 
</select>
				
				
</div>
<br>
<h4>Datos del Representante</h4>
<div class="row">
				<div class="col-md-3"><label>CI REPRESENTANTE:</label>
				<input type="number" name="cirepreg"  id="cirepreg" class="form-control" value="{{$result1->ci}}"></div>
				<div class="col-md-3"><label>NOMBRE REPRESENTANTE:</label>
				<input type="text" name="nombrepreg" value="{{$result1->nombrerep}}" id="nomrepreg" class="form-control"></div>
				<div class="col-md-3"><label>DIRECCION:</label>
				<input type="text" name="dirreg" value="{{$result1->direccion}}" id="direc" class="form-control"></div>
				<div class="col-md-3"><label>TELEFONO:</label>
				<input type="text" name="telefono" value="{{$result1->telefono}}" id="telefono" class="form-control"></div>




	</div>
	<button  onclick="return val_camp();" class="btn btn-success btn-block mt-2 mb-"><b>MODIFICAR</b></button>
	</div>
</form>

@endsection