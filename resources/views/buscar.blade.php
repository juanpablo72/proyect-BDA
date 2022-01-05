@extends('layouts.menu')

@section('menu')
<div class="container">
	
   <H2 class=" text-primary text-center"><b>Buscar estudiante</b></H2>
   <br>
   
   	<div class="col-8">
   		<div class="row">
   			<div class="col-6"></div>
   		<div class="col-6 ">
   			<div class="card" style="border-color: #007bff;">
   			<div class="mt-3 mb-2">
               @if($errors->any())
   

   @foreach($errors->all() as $error)
   

<div class="alert alert-danger alert-dismissible">
 
<p>{{$error}}
   </p>
</div>
   
   @endforeach
   @endif
   				<form action="/buscarest" method="POST" >
@csrf
   					<label  class="ml-5"><b> Ingrese la ci del estudiante</b> </label>


   					<div class="form-group ml-2">

   						<div class="col-11">

   							<input type="number" name="bci" placeholder="ingrese la ci del estudiante  " class="form-control">
   						</div>

   						<br>
   						<div class="col-10 ml-3">
   							<button class="btn btn-block btn-success"><b>Buscar</b></button>
   						</div>
   						
   					</div>
   				</form>
   			</div>
   			</div>
   		</div>
   		</div>
   	
   </div>


	
</div>
@endsection