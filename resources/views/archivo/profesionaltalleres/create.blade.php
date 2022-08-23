@extends ('layouts.admin')

@section ('contenido')
	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Asignación de Talleres a Profesionales</h3>
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

	{!!Form::open(array('url'=>'archivo/profesionaltalleres','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
            <label for="id_paciente">Seleccione Profesional</label>
                <select name="id_profesional" class="form-control selectpicker" id="id_profesional" data-live-search="true" autofocus>
                    @foreach($profesionales as $prof)
                        @if($prof->estado_profesional=='1')
                        <option value="{{$prof->id_profesional}}">{{ $prof->apeynom_profesional}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
            <label for="id_taller">Seleccione Taller</label>
                <select name="id_taller" class="form-control selectpicker" id="id_taller" data-live-search="true">
                    @foreach($talleres as $tall)
                        @if($tall->estado_taller=='1')
                        <option value="{{$tall->id_taller}}">{{ $tall->nombre_taller}}</option>
                        @endif
                    @endforeach
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