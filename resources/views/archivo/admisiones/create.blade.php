@extends ('layouts.admin')

@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Cita</h3>
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

	{!!Form::open(array('url'=>'archivo/admisiones','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="apeynom_admision">Apellido y Nombres</label>
                    <input type="text" maxlength="40" name="apeynom_admision" 
                    value="{{old('apeynom_admision')}}" class="form-control" 
                    placeholder="Apellido y Nombres..." autofocus>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="dni_admision">Documento</label>
                    <input type="text" maxlength="10" name="dni_admision" 
                    value="{{old('dni_admision')}}" class="form-control" 
                    placeholder="Documento...">
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="telefono_admision">Teléfono</label>
                    <input type="text" maxlength="40" name="telefono_admision" 
                    value="{{old('telefono_admision')}}" class="form-control" 
                    placeholder="Teléfono...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="obrasocial_admision">Obra Social</label>
                    <input type="text" maxlength="40" name="obrasocial_admision" 
                    value="{{old('obrasocial_admision')}}" class="form-control" 
                    placeholder="Obra Social...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="fecha_admision">Fecha</label>
                    <input type="date" name="fecha_admision" value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d",strtotime(date("Y-m-d"))); ?>" class="form-control">
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="hora_admision">Hora</label>
                    <input type="time" name="hora_admision" 
                    value="{{old('hora_admision')}}" class="form-control">
            </div>
        </div> 
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label>Seleccione Lugar</label>
                <select name="lugar_admision" class="form-control" required>
                    <option value="" selected disabled>Seleccione...</option>
                    <option value="Consultorio">CONSULTORIO</option>
                    <option value="Domicilio">DOMICILIO</option>
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label>Seleccione Estado</label>
                <select name="estado_admision" class="form-control" required>
                    <option value="" selected disabled>Seleccione...</option>
                    <option value="Activa">ACTIVA</option>
                    <option value="Realizada">REALIZADA</option>
                    <option value="Cancelada">CANCELADA</option>
                </select>
            </div>
        </div>
    </div> 
    <div class="row justify-content-center"> 
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="obs_admision">Observaciones</label>
                    <input type="text" maxlength="100" name="obs_admision" 
                    value="{{old('obs_admision')}}" class="form-control" 
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