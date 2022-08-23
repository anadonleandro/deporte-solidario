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
		<h3>Resultados <a href="{{url('archivo/turnos/create')}}"><button class="btn btn-success" title="Nuevo Turno"><i class="fa fa-calendar"></i></button></a></h3>
	</div>
</div>

<div class="row">
	<div class="panel panel-primary">
		<div class="panel-body">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<tr style="background-color:#A9D0F5">
							<td><b>Turno (Fecha y Hora)</b></td>
							<td><b>Paciente Atendido</b></td>
							<td><b>Profesional a Cargo</b></td>
							<td><b>Estado del Turno</b></td>
							<td align="center"><b>Opciones</b></td>
						</tr>
		               @foreach ($profesionales as $prof)
						<tr>
							<td>
								<?php
									$fecha = ($prof->fecha_turno);
									$mes=date("n",strtotime($fecha));
									$mesArray = array( 1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre" );
										
									$semana=date("D",strtotime($fecha));
									$semanaArray = array( "Mon" => "Lunes", "Tue" => "Martes", "Wed" => "Miercoles", "Thu" => "Jueves", "Fri" => "Viernes", "Sat" => "Sábado", "Sun" => "Domingo", );
										
									$mesReturn = $mesArray[$mes];
									$semanaReturn = $semanaArray[$semana];
									$dia=$dia=date("d",strtotime($fecha)); 
									$año=date("Y",strtotime($fecha));
									echo $semanaReturn." ".$dia." de ".$mesReturn." de ".$año.' / '.$prof->hora_turno;
		                            /* $fecha = ($prof->fecha_turno);
		                            if ($fecha > 0)
		                            {
		                              $fecha=date("d-m-Y",strtotime($fecha));
		                              echo  $fecha.' / '.$prof->hora_turno;
		                            }
		                            else
		                            {
		                            echo "SIN DATOS";
		                            } */ 
		                        ?> 
							</td>
							<td>{{ $prof->apeynom_paciente }}</td>
							<td>{{ $prof->apeynom_profesional }}</td>
								
							<td>
								@if($prof->estado_turno == "Activo")
									<font color="olive">
										<h5><b>{{ $prof->estado_turno }}</b></h5>
									</font>
								@elseif($prof->estado_turno == "Realizado")
									<font color="green">
										<h5><b>{{ $prof->estado_turno }}</b></h5>
									</font>
								@else
									<font color="red">
										<h5><b>{{ $prof->estado_turno }}</b></h5>
									</font>
								@endif
							</td>
							<td align="center">
								@if($prof->estado_turno == "Realizado")
									<button class="btn btn-warning" title="Turno REALIZADO... No se puede volver a modificar"><i class="fa fa-edit"></i></button>
								@else
									<a href="{{URL::action('TurnoController@edit',$prof->id_turno)}}"><button class="btn btn-warning" title="Editar Turno"><i class="fa fa-edit"></i></button></a>
								@endif
								<a href="{{URL::action('TurnoController@show',$prof->id_turno)}}"><button class="btn btn-light" title="Ver Turno"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection