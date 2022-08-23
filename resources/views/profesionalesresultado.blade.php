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
<?php
    $profesionales=DB::table('profesionales')
       ->orderBy('apeynom_profesional','ASC')
       ->get();
?>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Resultados <a href="{{url('archivo/turnos/create')}}"><button class="btn btn-success" title="Nuevo Turno"><i class="fa fa-calendar"></i></button></a></h3>
	</div>
</div>

<div class="row">
	<div class="panel-body">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">				
				@foreach ($profesionales as $profesional)
				<div class="panel panel-primary">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<tr style="background-color:#A9D0F5">
						<td colspan="4" align="center">						
							<b>PROFESIONAL: {{ $profesional->apeynom_profesional }}</b>
						</td>
					</tr>
					<tr style="background-color:#A9D0F5">
						<td><b>Turno (Fecha y Hora)</b></td>
						<td><b>Paciente Atendido</b></td>
						<td><b>Estado del Turno</b></td>
						<td align="center"><b>Opciones</b></td>						
					</tr>
					@if ($turnos->count())
			            @foreach ($turnos as $turno)
				            @if($turno->id_profesional == $profesional->id_profesional)
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
			                            /* $fecha = ($turno->fecha_turno);
			                            if ($fecha > 0)
			                            {
				                            $fecha=date("d-m-Y",strtotime($fecha));
				                            echo  $fecha.' / '.$turno->hora_turno;
			                            }
			                            else
			                            {
			                            	echo "SIN DATOS";
			                            }  */
			                        ?>
								</td>
								<td>{{ $turno->apeynom_paciente }}</td>
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
								<td align="center">
								    @if($turno->estado_turno == "Realizado")
										<button class="btn btn-warning" title="Turno REALIZADO... No se puede volver a modificar"><i class="fa fa-edit"></i></button>
									@else
										<a href="{{URL::action('TurnoController@edit',$turno->id_turno)}}"><button class="btn btn-warning" title="Editar Turno"><i class="fa fa-edit"></i></button></a>
									@endif
									<a href="{{URL::action('TurnoController@show',$turno->id_turno)}}"><button class="btn btn-light" title="Ver Turno"><i class="fa fa-eye" aria-hidden="true"></i></button></a>		
								</td>
							</tr>
							@endif
						@endforeach
					@endif
				</table>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection