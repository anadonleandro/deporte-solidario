@extends ('layouts.admin')

@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Diagnósticos <a href="diagnosticos/create"><button class="btn btn-success" title="Nuevo Diagnóstico"><i class="fa fa-heartbeat"></i></button></a></h3>
		@include('archivo.diagnosticos.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color:#A9D0F5">
					<th>Código</th>
					<th>Detalle del Diagnóstico</th>
					<th>Opciones</th>
				</thead>
               @foreach ($diagnosticos as $diag)
               @if($diag->estado_diagnostico == '1')
				<tr>
					<td>{{ $diag->id_diagnostico }}</td>
					<td>{{ $diag->detalle_diagnostico }}</td>
					<td>
						<a href="{{URL::action('DiagnosticoController@edit',$diag->id_diagnostico)}}"><button class="btn btn-warning" title="Editar Diagnóstico"><i class="fa fa-edit"></i></button></a>
						<a href="" data-target="#modal-delete-{{$diag->id_diagnostico}}" data-toggle="modal"><button class="btn btn-danger" title="Eliminar Diagnóstico"><i class="fa fa-trash"></i></button></a>
					</td>
				</tr>
				@include('archivo.diagnosticos.modal')
				@endif
				@endforeach
			</table>
		</div>
		{{$diagnosticos->render()}}
	</div>
</div>

@endsection