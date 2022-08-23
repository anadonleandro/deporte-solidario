@extends ('layouts.admin')

@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Talleres 
			<a href="talleres/create"><button class="btn btn-success" title="Nuevo Taller"><i class="fa fa-tachometer"></i></button></a>
		</h3>
		@include('archivo.talleres.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<tr style="background-color:#A9D0F5">
					<td align="center"><b>#</b></td>
					<td><b>Nombre del Taller</b></td>
					<td><b>Opciones</b></td>
				</tr>
               @foreach ($talleres as $tall)
               @if($tall->estado_taller == '1')
				<tr>
					<td align="center">{{ $tall->id_taller }}</td>
					<td>{{ $tall->nombre_taller }}</td>
					<td>
						<a href="{{URL::action('TallerController@edit',$tall->id_taller)}}"><button class="btn btn-warning" title="Editar Taller"><i class="fa fa-edit"></i></button></a>
						<a href="{{URL::action('TallerController@show',$tall->id_taller)}}"><button class="btn btn-light" title="Ver Taller"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
						<a href="" data-target="#modal-delete-{{$tall->id_taller}}" data-toggle="modal"><button class="btn btn-danger" title="Eliminar Taller"><i class="fa fa-trash"></i></button></a>
						<a target="_blank" href="{{URL::action('TallerController@reportec',$tall->id_taller)}}"><button class="btn btn-primary" title="Imprimir"><i class="fa fa-print"></i></button></a>
					</td>
				</tr>
				@include('archivo.talleres.modal')
				@endif
				@endforeach
			</table>
		</div>
		{{$talleres->render()}}
	</div>
</div>

@endsection