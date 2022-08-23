@extends ('layouts.admin')

@section ('contenido')

{!! Form::open(array('url'=>'/profesionalesresultado','method'=>'get','autocomplete'=>'off')) !!}
{{Form::token()}}

<div class="row justify-content-center">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		@if(Session::has('message'))
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-label="close"><spam aria-hidden="true">Aceptar</spam></button> 
			{{Session::get('message')}}
		</div>
		@endif
	</div>
</div>

<div class="row justify-content-center">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Búsqueda General de Turnos (Profesionales)</h3>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Desde</label>
				<input type="date" name="fecha_desde" value="<?php echo date("Y-m-d"); ?>" class="form-control" maxDate="+0D" required>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		<div class="form-group">
			<label>Hasta</label>
		        <input type="date" name="fecha_hasta" value="<?php echo date("Y-m-d"); ?>" class="form-control" required>
		        <input type="hidden" name="valor" value='1'>
		</div>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
	    <div class="form-group">
		    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Buscar</button>
		</div>
	</div>  
</div>
	
{!! Form::close() !!}

@endsection