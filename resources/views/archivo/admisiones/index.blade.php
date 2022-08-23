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
		<h3>Listado de Nuevos Contactos <a href="admisiones/create"><button class="btn btn-success" title="Nueva Cita"><i class="fa fa-check"></i></button></a></h3>
		@include('archivo.admisiones.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color:#A9D0F5">
					<th>Fecha y Hora</th>
					<th>Apellido y Nombres</th>
					<th>Documento</th>
					<th>Estado</th>
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
					<td>{{ $admi->dni_admision}}</td>
					<td>
						@if($admi->estado_admision == "Activa")
							<font color="olive">
								<h5><b>{{ $admi->estado_admision }}</b></h5>
							</font>
						@elseif($admi->estado_admision == "Realizada")
							<font color="green">
								<h5><b>{{ $admi->estado_admision }}</b></h5>
							</font>
						@else
							<font color="red">
								<h5><b>{{ $admi->estado_admision }}</b></h5>
							</font>
						@endif
					</td>
					<td>
						@if($admi->estado_admision == "Realizada")
							<button class="btn btn-warning" title="Turno REALIZADO... No se puede volver a modificar"><i class="fa fa-edit"></i></button>
						@else
							<a href="{{URL::action('AdmisionController@edit',$admi->id_admision)}}"><button class="btn btn-warning" title="Editar Cita"><i class="fa fa-edit"></i></button></a>
						@endif
						<a href="{{URL::action('AdmisionController@show',$admi->id_admision)}}"><button class="btn btn-light" title="Ver Cita"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$admisiones->render()}}
	</div>
</div>

@endsection