@extends('layout')
@section('content')
<center><h1>{{ $title }}</h1></center>
	<form action="{{ route("/modifica") }} " method="POST">

		{{ csrf_field() }}

		{{-- {{ $estudiante }} --}}
		<div class="row justify-content-center">
		    <div class="col-6 col-sm-3">
		      <label for="validationServer01">C.I.</label>
		      	<input name="ci" type="text" class="form-control is-valid" id="ci" placeholder="C.I." value="{{ $estudiante->ci }}" readonly="true">
		    </div>
		    <div class="col-6 col-sm-3">
		      <input name="id" type="hidden" id="id" value="{{ $estudiante->id }}">
		    </div>
		  </div>

		  <div class="row justify-content-center">
		    <div class="col-6 col-sm-3">
		      <label for="validationServer01">Nombres</label>
		      	<input name="nombre" type="text" class="form-control is-valid" id="nombre" placeholder="Nombres" value="{{ $estudiante->nombre }}">
		    </div>
		    <div class="col-6 col-sm-3">
		      <label for="validationServer02">Apellidos</label>
		      <input name="apellido" type="text" class="form-control is-valid" id="apellido" placeholder="Apellidos" value="{{ $estudiante->apellido }}">
		    </div>
		  </div>
		  <div class="row justify-content-center">
		  	<div class="col-6 col-sm-3">
		      <label for="validationServer04">Genero</label>
		      <br>
		      
			  @if($estudiante->genero=='Masculino')
				<label class="form-check-label">
			    	<input name="genero" class="form-check-input" type="radio" id="genero" value="Masculino" checked="checked"> Masculino
			  	</label>
			  	<label class="form-check-label">
			    	<input name="genero" class="form-check-input" type="radio" id="genero" value="Femenino"> Femenino
			  	</label>
			  @else
				  <label class="form-check-label">
				    	<input name="genero" class="form-check-input" type="radio" id="genero" value="Masculino"> Masculino
				  	</label>
					<label class="form-check-label">
				    	<input name="genero" class="form-check-input" type="radio" id="genero" value="Femenino" checked="checked"> Femenino
				  	</label>
			  @endif
			  
		    </div>
		    <div class="col-6 col-sm-3">
		      <label for="validationServer03">Fecha Nacimiento</label>
		      <input name="fec_nac" type="date" class="form-control is-invalid" id="fec_nac" placeholder="Fecha Nacimiento" value="{{ $estudiante->fec_nac }}">
		    </div>
		  </div>
		<br>
		  	<div align="center">
			  <button type="submit" class="btn btn-outline-warning">Modificar</button>
			  <button  class="btn btn-outline-warning">Cancelar</button>
			</div>
	</form>
@endsection
