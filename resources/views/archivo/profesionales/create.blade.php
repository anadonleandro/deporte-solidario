@extends ('layouts.admin')

@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Profesional</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

	{!!Form::open(array('url'=>'archivo/profesionales','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="matricula_profesional">Matrícula</label>
                    <input type="text" name="matricula_profesional" maxlength="20" autofocus 
                    value="{{old('matricula_profesional')}}" class="form-control" 
                    placeholder="Matrícula...">
            </div>
        </div>
    	<div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
    		<div class="form-group">
            	<label for="apeynom_profesional">Apellido y Nombres</label>
            	    <input type="text" name="apeynom_profesional" maxlength="40" required 
                    value="{{old('apeynom_profesional')}}" class="form-control" 
                    placeholder="Apellido y nombres...">
            </div>
    	</div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="especialidad_profesional">Especialidad</label>
                    <input type="text" name="especialidad_profesional" maxlength="30" 
                    value="{{old('especialidad_profesional')}}" class="form-control" 
                    placeholder="Especialidad...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="dni_profesional">Documento</label>
                    <input type="text" name="dni_profesional" maxlength="9"  
                    value="{{old('dni_profesional')}}" class="form-control" 
                    placeholder="Documento...">
            </div>
        </div>
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="domicilio_profesional">Domicilio</label>
                    <input type="text" name="domicilio_profesional" maxlength="40"  
                    value="{{old('domicilio_profesional')}}" class="form-control" 
                    placeholder="Domicilio...">
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="localidad_profesional">Localidad</label>
                    <input type="text" name="localidad_profesional" maxlength="40" 
                    value="{{old('localidad_profesional')}}" class="form-control" 
                    placeholder="Localidad...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="fechanac_profesional">Fecha de Naciemiento</label>
                    <input type="date" name="fechanac_profesional"  
                     value="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d",strtotime(date("Y-m-d"))); ?>" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="edad_profesional">Edad</label>
                    <input type="number" name="edad_profesional" maxlength="3"
                    value="{{old('edad_profesional')}}" class="form-control">
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="telefono_profesional">Teléfono</label>
                    <input type="text" name="telefono_profesional" maxlength="20"
                    value="{{old('telefono_profesional')}}" class="form-control"
                    placeholder="Teléfono...">
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="email_profesional">Email</label>
                    <input type="email" name="email_profesional" maxlength="40" 
                    value="{{old('email_profesional')}}" class="form-control" 
                    placeholder="Email...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    		<div class="form-group">
            	<button class="btn btn-primary" type="submit"><i class="fa fa-check-square-o"></i> Guardar</button>
                <button class="btn btn-danger" type="reset"><i class="fa fa-close"></i> Cancelar</button>
            </div>
    	</div>
    </div>   

	{!!Form::close()!!}		

@endsection