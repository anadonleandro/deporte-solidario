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
		<h3>Resultados </h3>
	</div>
</div>

<div class="row">
	<div class="panel panel-primary">
		<div class="panel-body">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead style="background-color:#A9D0F5">
							<th>Cita (Fecha y Hora)</th>
							<th>Apellido y Nombres del Contacto</th>
							<th>Estado de la Cita</th>
							<th>Opciones</th>
						</thead>
		               @foreach ($admisiones as $admi)
						<tr>
							<td>
								<?php
		                            $fecha = ($admi->fecha_admision);
		                            if ($fecha > 0)
		                            {
		                              $fecha=date("d-m-Y",strtotime($fecha));
		                              echo  $fecha.' / '.$admi->hora_admision;
		                            }
		                            else
		                            {
		                            echo "SIN DATOS";
		                            } 
		                        ?>   
							</td>
							<td>{{ $admi->apeynom_admision}}</td>
							<td>{{ $admi->estado_admision}}</td>
							<td>
								<a href="{{URL::action('AdmisionController@edit',$admi->id_admision)}}"><button class="btn btn-warning" title="Editar Cita"><i class="fa fa-edit"></i></button></a>
								<a href="{{URL::action('AdmisionController@show',$admi->id_admision)}}"><button class="btn btn-light" title="Ver Cita"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
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