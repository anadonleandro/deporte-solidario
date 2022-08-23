@extends ('layouts.admin')

@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Turno</h3>
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

	{!!Form::open(array('url'=>'archivo/turnos','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <div class="form-group">
                <label for="id_paciente">Seleccione Paciente </label>
                <select name="id_paciente" class="form-control selectpicker" id="id_paciente" 
                data-live-search="true"required autofocus>
                @foreach ($pacientes as $paci)
                    @if($paci->estado_paciente=='1')
                    <option value="{{$paci->id_paciente}}">{{$paci->apeynom_paciente}}</option>
                    @endif
                @endforeach                
                </select>                
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <div class="form-group">
                <label for="id_profesional">Seleccione Profesional </label>
                <select name="id_profesional" class="form-control selectpicker" id="id_profesional" 
                data-live-search="true" required>
                @foreach ($profesionales as $prof)
                    @if($prof->estado_profesional=='1')
                    <option value="{{$prof->id_profesional}}">{{$prof->apeynom_profesional}}</option>
                     @endif
                @endforeach                
                </select>                
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label for="fecha_turno">Fecha del turno</label>
                    <input type="date" name="fecha_turno" value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d",strtotime(date("Y-m-d"))); ?>" class="form-control" required 
                    value="{{old('fecha_turno')}}">
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <div class="form-group">
                <label for="hora_turno">Hora</label>
                    <input type="time" name="hora_turno" class="form-control" required 
                    value="{{old('hora_turno')}}">
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label>Seleccione Estado</label>
                <select name="estado_turno" class="form-control" required>
                    <option value="" selected disabled>Seleccione...</option>
                    <option value="Activo">ACTIVO</option>
                    <option value="Realizado">REALIZADO</option>
                    <option value="Cancelado">CANCELADO</option>
                </select>
            </div>
        </div>
    </div>    
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <div class="form-group">
                <label for="obs_turno">Observaciones del Turno</label>
                    <input type="text" maxlength="70" name="obs_turno" 
                    value="{{old('obs_turno')}}" class="form-control" 
                    placeholder="Observaciones...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <a href="{{url('archivo/pacientes/create')}}">
                    <i class="fa fa-users"></i> Nuevo Paciente
                </a>
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