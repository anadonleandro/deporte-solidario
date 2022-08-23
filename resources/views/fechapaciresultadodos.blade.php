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
		<h3>Resultados <a href="{{url('archivo/pacienteacompanantes/create')}}"><button class="btn btn-success" title="Asignar Nuevo Acompañante"><i class="fa fa-street-view"></i></button></a> </h3>
	</div>
</div>

<div class="row">
	<div class="panel panel-primary">
		<div class="panel-body">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<tr style="background-color:#A9D0F5">
							<td><b>Fecha Asignada</b></td>
							<td><b>Hora (Desde - Hasta)</b></td>
							<td><b>Total Hs.</b></td>
							<td><b>Acompañante Asignado</b></td>
							<td><b>Paciente</b></td>
							<td><b>Estado</b></td>
							<td align="center"><b>Opciones</b></td>
						</tr>
		               @foreach ($pacientes as $paci)
						<tr>
							<td>
								<?php
		                            $fecha = ($paci->fecha_pacienteacompanante);
		                            if ($fecha > 0)
		                            {
		                              $fecha=date("d-m-Y",strtotime($fecha));
		                              echo  $fecha;
		                            }
		                            else
		                            {
		                            echo "SIN DATOS";
		                            } 
		                        ?>   
							</td>
							<td>{{ $paci->horainicio_pacienteacompanante.' - '.$paci->horafin_pacienteacompanante }}</td>
							<td>{{ $paci->diferencia }}</td>
							<td>{{ $paci->apeynom_acompanante }}</td>
							<td>{{ $paci->apeynom_paciente }}</td>
							<td>
								@if($paci->estado_pacienteacompanante == "Activo")
									<font color="olive">
										<h5><b>{{ $paci->estado_pacienteacompanante }}</b></h5>
									</font>
								@elseif($paci->estado_pacienteacompanante == "Realizado")
									<font color="green">
										<h5><b>{{ $paci->estado_pacienteacompanante }}</b></h5>
									</font>
								@else
									<font color="red">
										<h5><b>{{ $paci->estado_pacienteacompanante }}</b></h5>
									</font>
								@endif
							</td>
							<td align="center">
								@if($paci->estado_pacienteacompanante == "Realizado")
									<button class="btn btn-warning" title="Turno REALIZADO... No se puede volver a modificar"><i class="fa fa-edit"></i></button>
								@else
									<a href="{{URL::action('PacienteAcompananteController@edit',$paci->id_pacienteacompanante)}}"><button class="btn btn-warning" title="Editar Turno"><i class="fa fa-edit"></i></button></a>
								@endif
								<a href="{{URL::action('PacienteAcompananteController@show',$paci->id_pacienteacompanante)}}"><button class="btn btn-light" title="Ver"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
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