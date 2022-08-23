@extends ('layouts.admin')

@section ('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Diagnóstico: {{ $diagnostico->id_diagnostico}}</h3>
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

	{!!Form::model($diagnostico,['url'=>['archivo/diagnosticos',$diagnostico->id_diagnostico],'method'=>'PATCH'])!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="detalle_diagnostico">Detalle del Diagnóstico</label>
                    <input type="text" name="detalle_diagnostico" maxlength="60" autofocus 
                    value="{{$diagnostico->detalle_diagnostico}}" class="form-control" placeholder="Detalle del Diagnóstico...">
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