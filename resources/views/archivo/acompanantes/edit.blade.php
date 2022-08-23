@extends ('layouts.admin')

@section ('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Acompañante: {{ $acompanante->apeynom_acompanante}}</h3>
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

	{!!Form::model($acompanante,['url'=>['archivo/acompanantes',$acompanante->id_acompanante],'method'=>'PATCH'])!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="apeynom_acompanante">Apellido y Nombres</label>
                    <input type="text" name="apeynom_acompanante" maxlength="40" autofocus 
                    value="{{$acompanante->apeynom_acompanante}}" class="form-control" placeholder="Apellido y Nombres...">
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="fechanac_acompanante">Fecha Nacimiento</label>
                    <input type="date" name="fechanac_acompanante"  
                    value="{{$acompanante->fechanac_acompanante}}" max="<?php echo date("Y-m-d",strtotime(date("Y-m-d"))); ?>" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="edad_acompanante">Edad</label>
                    <input type="number" name="edad_acompanante"  
                    value="{{$acompanante->edad_acompanante}}" class="form-control">
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="telefono_acompanante">Teléfono</label>
                    <input type="text" name="telefono_acompanante" maxlength="20" required 
                    value="{{$acompanante->telefono_acompanante}}" class="form-control" placeholder="Teléfono...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="formacion_acompanante">Formación</label>
                    <input type="text" name="formacion_acompanante" maxlength="40" required 
                    value="{{$acompanante->formacion_acompanante}}" class="form-control" placeholder="Formación...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="disponibilidad_acompanante">Disponibilidad</label>
                    <input type="text" name="disponibilidad_acompanante" maxlength="60" required 
                    value="{{$acompanante->disponibilidad_acompanante}}" class="form-control" placeholder="Disponibilidad...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label for="obs_acompanante">Observaciones</label>
                    <input type="text" name="obs_acompanante" maxlength="120" autofocus 
                    value="{{$acompanante->obs_acompanante}}" class="form-control" placeholder="Observaciones...">
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