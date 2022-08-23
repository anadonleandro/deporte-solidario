@extends ('layouts.admin')

@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Asignación de Acompañantes Terapéuticos a Pacientes</h3>
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

	{!!Form::open(array('url'=>'archivo/pacienteacompanantes','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="form-group">
            <label for="id_paciente">Seleccione Paciente</label>
                <select name="id_paciente" class="form-control selectpicker" id="id_paciente" 
                data-live-search="true" autofocus>
                    @foreach($pacientes as $paci)
                        @if($paci->estado_paciente=='1')
                        <option value="{{$paci->id_paciente}}">{{ $paci->apeynom_paciente}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="form-group">
            <label for="id_acompanante">Seleccione Acompañante</label>
                <select name="id_acompanante" class="form-control selectpicker" id="id_acompanante" 
                data-live-search="true">
                    @foreach($acompanantes as $acomp)
                        @if($acomp->estado_acompanante=='1')
                        <option value="{{$acomp->id_acompanante}}">{{ $acomp->apeynom_acompanante}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="fecha_pacienteacompanante">Seleccione Día</label>
                    <input type="date" name="fecha_pacienteacompanante"  
                     value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d",strtotime(date("Y-m-d"))); ?>" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="horainicio_pacienteacompanante">Hora Inicio</label>
                    <input type="time" name="horainicio_pacienteacompanante"  
                    value="{{old('horainicio_pacienteacompanante')}}" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="horafin_pacienteacompanante">Hora Fin</label>
                    <input type="time" name="horafin_pacienteacompanante"  
                    value="{{old('horafin_pacienteacompanante')}}" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="form-group">
                <label>Seleccione Estado</label>
                <select name="estado_pacienteacompanante" class="form-control" required>
                    <option value="" selected disabled>Seleccione...</option>
                    <option value="Activo">ACTIVO</option>
                    <option value="Realizado">REALIZADO</option>
                    <option value="Cancelado">CANCELADO</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-12">
            <div class="form-group">
                <label for="obs_pacienteacompanante">Observaciones</label>
                    <input type="text" name="obs_pacienteacompanante" maxlength="100" 
                    value="{{old('obs_pacienteacompanante')}}" class="form-control" placeholder="Observaciones...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="form-group"> 
                    <label for="informe_pacienteacompanante">Informe del Acompañante</label>
                    <textarea class="form-control" name="informe_pacienteacompanante" rows="2"  
                        maxlength="1000" align="text-justify"></textarea>
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