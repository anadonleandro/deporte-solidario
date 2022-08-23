@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Para quitar el taller debe seleccionar la opción "INACTIVO"</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

	{!!Form::model($taller,['url'=>['archivo/pacientetalleres',$taller->id_pacientetaller],'method'=>'PATCH'])!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="form-group">
                <label for="estado_pacientetaller">Seleccione una opción</label>
                    <select name="estado_pacientetaller" class="form-control" required>
                        <option value="1">ACTIVO</option>
                        <option value="0">INACTIVO</option>
                    </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit"><i class="fa fa-check-square-o"></i> Guardar</button>
                <button class="btn btn-danger" type="reset"><i class="fa fa-close"></i> Cancelar</button>
            </div>
        </div>
    </div> 
			
    {!!Form::close()!!}		
            
@endsection