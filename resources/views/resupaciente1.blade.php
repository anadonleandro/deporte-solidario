@extends ('layouts.admin')

@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Resultados <a href="{{url('archivo/pacientetalleres/create')}}"><button class="btn btn-success" title="Asignar Nuevo Taller"><i class="fa fa-tachometer"></i></button></a></h3>
	</div>
</div>

<div class="row">
	<div class="panel panel-primary">
		<div class="panel-body">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<tr style="background-color:#A9D0F5">
							<td><b>Paciente</b></td>
							<td><b>Nombre del Taller</b></td>
							<td align="center"><b>Opciones</b></td>
						</tr>
		               @foreach ($pacientes as $paci)
			               @if($paci->estado_paciente == '1' && $paci->estado_pacientetaller == '1' && $paci->estado_taller == '1')
							<tr>
								<td>{{ $paci->apeynom_paciente }}</td>
								<td>{{ $paci->nombre_taller }}</td>
								<td align="center">
									<a href="{{URL::action('TallerController@show',$paci->id_taller)}}">
										<button class="btn btn-light" title="Ver Taller">
											<i class="fa fa-eye" aria-hidden="true"></i>
										</button>
									</a>
									<a href="{{URL::action('PacienteTallerController@edit',$paci->id_pacientetaller)}}">
										<button class="btn btn-danger" title="Quitar Taller">
											<i class="fa fa-close" aria-hidden="true"></i>
										</button>
									</a>
								</td>
							</tr>
							@endif
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection