@extends ('layouts.admin')

@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Profesionales <a href="profesionales/create"><button class="btn btn-success" title="Nuevo Profesional"><i class="fa fa-user-md"></i></button></a></h3>
		@include('archivo.profesionales.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<tr style="background-color:#A9D0F5">
					<td><b>Matrícula</b></td>
					<td><b>Apellido y Nombres</b></td>
					<td><b>Especialidad</b></td>
					<td><b>Teléfono</b></td>
					<td><b>Opciones</b></td>
				</tr>
               @foreach ($profesionales as $prof)
               @if($prof->estado_profesional == '1')
				<tr>
					<td>{{ $prof->matricula_profesional }}</td>
					<td>{{ $prof->apeynom_profesional }}</td>
					<td>{{ $prof->especialidad_profesional }}</td>
					<td>{{ $prof->telefono_profesional }}</td>
					<td>
						<a href="{{URL::action('ProfesionalController@edit',$prof->id_profesional)}}"><button class="btn btn-warning" title="Editar Profesional"><i class="fa fa-edit"></i></button></a>
						<a href="{{URL::action('ProfesionalController@show',$prof->id_profesional)}}"><button class="btn btn-light" title="Ver Profesional"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
						<a href="" data-target="#modal-delete-{{$prof->id_profesional}}" data-toggle="modal"><button class="btn btn-danger" title="Eliminar Profesional"><i class="fa fa-trash"></i></button></a>
					</td>
				</tr>
				@include('archivo.profesionales.modal')
				@endif
				@endforeach
			</table>
		</div>
		{{$profesionales->render()}}
	</div>
</div>

@endsection