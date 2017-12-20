@extends('layout')
@section('content')
<center><h1>{{ $title }}</h1></center>
	<form action="{{ route("/registrar") }} " method="POST">
		{{ csrf_field() }}

		<div class="row justify-content-center">
		    <div class="col-6 col-sm-3">
		      <label for="validationServer01">C.I.</label>
		      	<input name="ci" type="text" class="form-control is-valid" id="ci" placeholder="C.I." value="">
		    </div>
		    <div class="col-6 col-sm-3">
		      
		    </div>
		  </div>

		  <div class="row justify-content-center">
		    <div class="col-6 col-sm-3">
		      <label for="validationServer01">Nombres</label>
		      	<input name="nombre" type="text" class="form-control is-valid" id="nombre" placeholder="Nombres" value="">
		    </div>
		    <div class="col-6 col-sm-3">
		      <label for="validationServer02">Apellidos</label>
		      <input name="apellido" type="text" class="form-control is-valid" id="apellido" placeholder="Apellidos" value="">
		    </div>
		  </div>
		  <div class="row justify-content-center">
		  	<div class="col-6 col-sm-3">
		      <label for="validationServer04">Genero</label>
		      <br>
		      <label class="form-check-label">
			    <input name="genero" class="form-check-input" type="radio" id="genero" value="Femenino"> Femenino
			  </label>
			  <label class="form-check-label">
			    <input name="genero" class="form-check-input" type="radio" id="genero" value="Masculino"> Masculino
			  </label>
		    </div>
		    <div class="col-6 col-sm-3">
		      <label for="validationServer03">Fecha Nacimiento</label>
		      <input name="fec_nac" type="text" class="form-control is-invalid" id="fec_nac" placeholder="Fecha Nacimiento">
		    </div>
		  </div>
	 <br>
	  	<div align="center">
		  <button type="submit" class="btn btn-outline-warning">Registrar</button>
		  <button type="reset" class="btn btn-outline-warning">Cancelar</button>
		</div>
</form>
@endsection
