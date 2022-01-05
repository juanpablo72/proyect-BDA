@extends('layouts.menu')

@section('menu')
<div class="container">
	
	<br>
	<h3 class="text-primary text-center">
	<b>BUSCAR ESTUDIANTES</b>
	</h3>
<div class="row">
	<div class="col-3"></div>
	<div class="col-9">
		<div class="col-6">
			<div class="card">
	<form action="/todoAS" method="get">
		@csrf
	<div class="col-11 mr-2 ml-2 mt-2">
		<label for=""> AÑO</label>
		<select  class="form-control" name="year">

<option value="1" >1ero</option>

<option value="2">2do</option>

<option value="3">3ero</option>

<option value="4">4to</option>
<option value="5">5to</option>
</select>
<br>
<label for=""> SECCION</label>
<select  class="form-control "name="secc">

<option value="A">A</option>

<option value="B">B</option>

<option value="C">C</option>


</select>

<BR></BR>
<button class="btn btn-block btn-primary  mb-4" > Buscar</button>
	</div>
</form>
</div>
		</div>
			


		</col-6>
	</div>
</div>
</div>
	@endsection