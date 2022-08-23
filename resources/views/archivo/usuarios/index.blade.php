@extends ('layouts.admin')

@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Usuarios <a href="usuarios/create"><button class="btn btn-success" title="Nuevo Usuario"><i class="fa fa-user-plus"></i></button></a></h3>
		@include('archivo.usuarios.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<tr style="background-color:#A9D0F5">
					<td><b>Apellido y Nombres</b></td>
					<td><b>Opciones</b></td>
				</tr>
               @foreach ($usuarios as $usuario)               
				<tr>
					<td>{{ $usuario->name}}</td>					
					<td>
						<a href="{{URL::action('UsuarioController@edit',$usuario->id)}}"><button class="btn btn-warning" title="Editar Usuario"><i class="fa fa-edit"></i></button></a>
						<a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-danger" title="Eliminar Usuario"><i class="fa fa-trash"></i></button></a>
					</td>
				</tr>
				@include('archivo.usuarios.modal')
				@endforeach
			</table>
		</div>
		{{$usuarios->render()}}
	</div>
</div>

@endsection