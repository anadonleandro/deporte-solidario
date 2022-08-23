@extends ('layouts.admin')

@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Pacientes <a href="pacientes/create"><button class="btn btn-success" title="Nuevo Paciente"><i class="fa fa-user"></i></button></a></h3>
		@include('archivo.pacientes.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color:#A9D0F5">
					<th>Apellido y Nombres</th>
					<th>Documento</th>
					<th>Teléfono</th>
					<th>Opciones</th>
				</thead>
               @foreach ($pacientes as $paci)
               @if($paci->estado_paciente == '1')
				<tr>
					<td>{{ $paci->apeynom_paciente }}</td>
					<td>{{ $paci->dni_paciente }}</td>
					<td>{{ $paci->telefono_paciente }}</td>
					<td>
						<a href="{{URL::action('PacienteController@edit',$paci->id_paciente)}}"><button class="btn btn-warning" title="Editar Paciente"><i class="fa fa-edit"></i></button></a>
						<a href="" data-target="#modal-delete-{{$paci->id_paciente}}" data-toggle="modal"><button class="btn btn-danger" title="Eliminar Paciente"><i class="fa fa-trash"></i></button></a>
						<a href="{{URL::action('PacienteController@show',$paci->id_paciente)}}"><button class="btn btn-light" title="Ver Paciente"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
						<a href=""><button class="btn btn-primary" title="Imprimir"><i class="fa fa-print" aria-hidden="true"></i></button></a>
					</td>
				</tr>
				@include('archivo.pacientes.modal')
				@endif
				@endforeach
			</table>
		</div>
		{{$pacientes->render()}}
	</div>
</div>

@endsection