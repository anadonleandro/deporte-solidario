@extends ('layouts.admin')

@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Paciente</h3>
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

	{!!Form::open(array('url'=>'archivo/pacientes','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}

    <div class="row justify-content-center">
    	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
    		<div class="form-group">
            	<label for="apeynom_paciente">Apellido y Nombres</label>
            	    <input type="text" name="apeynom_paciente" maxlength="40" required autofocus 
                    value="{{old('apeynom_paciente')}}" class="form-control" 
                    placeholder="Apellido y nombres...">
            </div>
    	</div>
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="fechanac_paciente">Fecha de Nacimiento</label>
                    <input type="date" name="fechanac_paciente" 
                     value="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d",strtotime(date("Y-m-d"))); ?>" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="dni_paciente">Documento</label>
                    <input type="text" name="dni_paciente" maxlength="9" 
                    value="{{old('dni_paciente')}}" 
                    class="form-control" placeholder="Documento...">
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="telefono_paciente">Teléfono</label>
                    <input type="text" name="telefono_paciente" maxlength="20" 
                    value="{{old('telefono_paciente')}}" 
                    class="form-control" placeholder="Teléfono...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="obrasocial_paciente">Obra Social</label>
                    <input type="text" name="obrasocial_paciente" maxlength="40" 
                    value="{{old('obrasocial_paciente')}}" 
                    class="form-control" placeholder="Obra Social...">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="afiliado_paciente">N° de Afiliado</label>
                    <input type="text" name="afiliado_paciente" maxlength="20" 
                    value="{{old('afiliado_paciente')}}" 
                    class="form-control" placeholder="N° de Afiliado...">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="edad_paciente">Edad</label>
                    <input type="number" name="edad_paciente" maxlength="3" 
                    value="{{old('edad_paciente')}}" 
                    class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="peso_paciente">Peso</label>
                    <input type="number" name="peso_paciente" maxlength="3" 
                    value="{{old('peso_paciente')}}" 
                    class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="talla_paciente">Talla</label>
                    <input type="text" name="talla_paciente" maxlength="20" 
                    value="{{old('talla_paciente')}}" 
                    class="form-control" placeholder="Talla...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="domicilio_paciente">Domicilio</label>
                    <input type="text" name="domicilio_paciente" maxlength="40" 
                    value="{{old('domicilio_paciente')}}" 
                    class="form-control" placeholder="Domicilio...">
            </div>
        </div>
    	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="localidad_paciente">Localidad</label>
                    <input type="text" name="localidad_paciente" maxlength="30" 
                    value="{{old('localidad_paciente')}}" 
                    class="form-control" placeholder="Localidad...">
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="email_paciente">Email</label>
                    <input type="email" name="email_paciente" maxlength="40" 
                    value="{{old('email_paciente')}}" 
                    class="form-control" placeholder="Email...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="ocupacion_paciente">Ocupación</label>
                    <input type="text" name="ocupacion_paciente" maxlength="30" 
                    value="{{old('ocupacion_paciente')}}" 
                    class="form-control" placeholder="Ocupación...">
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="fechaadmision_paciente">Fecha de Admisión</label>
                    <input type="date" name="fechaadmision_paciente" 
                     value="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d",strtotime(date("Y-m-d"))); ?>" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Contactos del Paciente</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="contacto_paciente">Apellido y Nombres</label>
                    <input type="text" name="contacto_paciente" maxlength="40"
                    value="{{old('contacto_paciente')}}" class="form-control" 
                    placeholder="Apellido y nombres...">
            </div>
        </div>
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="domiciliocontacto_paciente">Domicilio</label>
                    <input type="text" name="domiciliocontacto_paciente" maxlength="40"
                    value="{{old('domiciliocontacto_paciente')}}" class="form-control" 
                    placeholder="Domicilio...">
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="telefonocontacto_paciente">Teléfono</label>
                    <input type="text" name="telefonocontacto_paciente" maxlength="20"
                    value="{{old('telefonocontacto_paciente')}}" class="form-control" 
                    placeholder="Teléfono...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="contactodos_paciente">Apellido y Nombres</label>
                    <input type="text" name="contactodos_paciente" maxlength="40"
                    value="{{old('contactodos_paciente')}}" class="form-control" 
                    placeholder="Apellido y nombres...">
            </div>
        </div>
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="domiciliocontactodos_paciente">Domicilio</label>
                    <input type="text" name="domiciliocontactodos_paciente" maxlength="40"
                    value="{{old('domiciliocontactodos_paciente')}}" class="form-control" 
                    placeholder="Domicilio...">
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="telefonocontactodos_paciente">Teléfono</label>
                    <input type="text" name="telefonocontactodos_paciente" maxlength="20"
                    value="{{old('telefonocontactodos_paciente')}}" class="form-control" 
                    placeholder="Teléfono...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label for="obscontacto_paciente">Observaciones del Contacto</label>
                    <input type="text" name="obscontacto_paciente" maxlength="120"
                    value="{{old('obscontacto_paciente')}}" class="form-control" 
                    placeholder="Observaciones...">
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