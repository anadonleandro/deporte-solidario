@extends ('layouts.admin')

@section ('contenido')
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	@if(Session::has('message'))
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-label="close"><spam aria-hidden="true">Aceptar</spam></button> 
		{{Session::get('message')}}
	</div>
	@endif
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Turnos <a href="turnos/create"><button class="btn btn-success" title="Nuevo Turno"><i class="fa fa-calendar"></i></button></a></h3>
		@include('archivo.turnos.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<tr style="background-color:#A9D0F5">
					<td><b>Fecha y Hora</b></td>
					<td><b>Paciente</b></td>
					<td><b>Profesional</b></td>
					<td><b>Estado</b></td>
					<td><b>Opciones</b></td>
				</tr>
               @foreach ($turnos as $turno)
				<tr>
					<td>
						<?php
							$fecha = ($turno->fecha_turno);
							$mes=date("n",strtotime($fecha));
							$mesArray = array( 1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre" );
								
							$semana=date("D",strtotime($fecha));
							$semanaArray = array( "Mon" => "Lunes", "Tue" => "Martes", "Wed" => "Miercoles", "Thu" => "Jueves", "Fri" => "Viernes", "Sat" => "Sábado", "Sun" => "Domingo", );
								
							$mesReturn = $mesArray[$mes];
							$semanaReturn = $semanaArray[$semana];
							$dia=$dia=date("d",strtotime($fecha)); 
							$año=date("Y",strtotime($fecha));
							echo $semanaReturn." ".$dia." de ".$mesReturn." de ".$año.' / '.$turno->hora_turno;
                        ?>    
					</td>
					<td>{{ $turno->apeynom_paciente}}</td>
					<td>{{ $turno->apeynom_profesional}}</td>
					<td>
						@if($turno->estado_turno == "Activo")
							<font color="olive">
								<h5><b>{{ $turno->estado_turno }}</b></h5>
							</font>
						@elseif($turno->estado_turno == "Realizado")
							<font color="green">
								<h5><b>{{ $turno->estado_turno }}</b></h5>
							</font>
						@else
							<font color="red">
								<h5><b>{{ $turno->estado_turno }}</b></h5>
							</font>
						@endif
					</td>
					<td>
						@if($turno->estado_turno == "Realizado")
							<button class="btn btn-warning" title="Turno REALIZADO... No se puede volver a modificar"><i class="fa fa-edit"></i></button>
						@else
							<a href="{{URL::action('TurnoController@edit',$turno->id_turno)}}"><button class="btn btn-warning" title="Editar Turno"><i class="fa fa-edit"></i></button></a>
						@endif
						<a href="{{URL::action('TurnoController@show',$turno->id_turno)}}"><button class="btn btn-light" title="Ver Turno"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$turnos->render()}}
	</div>
</div>

@endsection

<?php
		

?>