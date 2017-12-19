@extends('layout')
@section('content')
	<form>

		<div class="row justify-content-center">
		    <div class="col-6 col-sm-3">
		      <label for="validationServer01">C.I.</label>
		      	<input type="text" class="form-control is-valid" id="validationServer01" placeholder="C.I." value="">
		    </div>
		    <div class="col-6 col-sm-3">
		      
		    </div>
		  </div>

		  <div class="row justify-content-center">
		    <div class="col-6 col-sm-3">
		      <label for="validationServer01">Nombres</label>
		      	<input type="text" class="form-control is-valid" id="validationServer01" placeholder="Nombres" value="">
		    </div>
		    <div class="col-6 col-sm-3">
		      <label for="validationServer02">Apellidos</label>
		      <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Apellidos" value="">
		    </div>
		  </div>
		  <div class="row justify-content-center">
		  	<div class="col-6 col-sm-3">
		      <label for="validationServer04">Genero</label>
		      <br>
		      <label class="form-check-label">
			    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Femenino"> Femenino
			  </label>
			  <label class="form-check-label">
			    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Masculino"> Masculino
			  </label>
		    </div>
		    <div class="col-6 col-sm-3">
		      <label for="validationServer03">Fecha Nacimiento</label>
		      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Dirección">
		    </div>
		    
		  </div>
	 <br>
	  	<div align="center">
		  <button type="submit" class="btn btn-outline-warning">Registrar</button>
		  <button type="reset" class="btn btn-outline-warning">Cancelar</button>
		</div>
</form>
@endsection
