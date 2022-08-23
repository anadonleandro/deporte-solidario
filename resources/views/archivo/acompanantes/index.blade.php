@extends ('layouts.admin')

@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Acompañantes Terapéuticos <a href="acompanantes/create"><button class="btn btn-success" title="Nuevo Acompañante"><i class="fa fa-street-view"></i></button></a></h3>
		@include('archivo.acompanantes.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<tr style="background-color:#A9D0F5">
					<td><b>Apellido y Nombres</b></td>
					<td><b>Formación</b></td>
					<td><b>Teléfono</b></td>
					<td><b>Opciones</b></td>
				</tr>
               @foreach ($acompanantes as $acomp)
               		@if($acomp->estado_acompanante == '1')
					<tr>
						<td>{{ $acomp->apeynom_acompanante }}</td>
						<td>{{ $acomp->formacion_acompanante }}</td>
						<td>{{ $acomp->telefono_acompanante }}</td>
						<td>
							<a href="{{URL::action('AcompananteController@edit',$acomp->id_acompanante)}}"><button class="btn btn-warning" title="Editar Acompañante"><i class="fa fa-edit"></i></button></a>
							<a href="" data-target="#modal-delete-{{$acomp->id_acompanante}}" data-toggle="modal"><button class="btn btn-danger" title="Eliminar Acompañante"><i class="fa fa-trash"></i></button></a>
						</td>
					</tr>
					@include('archivo.acompanantes.modal')
					@endif
				@endforeach
			</table>
		</div>
		{{$acompanantes->render()}}
	</div>
</div>

@endsection