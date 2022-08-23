@extends ('layouts.admin')

@section ('contenido')

{!! Form::open(array('url'=>'/admisionresultado','method'=>'get','autocomplete'=>'off')) !!}
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
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Búsqueda de Citas por Estado</h3>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Ingrese Estado</label>
			<input type="text" name="dato" maxlength="20" class="form-control" value="" autofocus required>
			<input type="hidden" name="valor" value='1'>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Desde</label>
				<input type="date" name="fecha_desde" class="form-control" maxDate="+0D" required>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<div class="form-group">
			<label>Hasta</label>
		        <input type="date" name="fecha_hasta" class="form-control" required>
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