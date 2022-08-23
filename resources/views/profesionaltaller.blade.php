@extends ('layouts.admin')

@section ('contenido')

{!! Form::open(array('url'=>'/resuprofesional1','method'=>'get','autocomplete'=>'off')) !!}
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
		<h3>Ingrese el Nombre del Profesional</h3>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<input type="text" name="dato" maxlength="40" class="form-control" value="" autofocus required>
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