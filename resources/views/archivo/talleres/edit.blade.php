@extends ('layouts.admin')

@section ('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Taller: {{ $taller->nombre_taller}}</h3>
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

	{!!Form::model($taller,['url'=>['archivo/talleres',$taller->id_taller],'method'=>'PATCH'])!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre_taller">Nombre del Taller</label>
                    <input type="text" name="nombre_taller" maxlength="20" autofocus 
                    value="{{$taller->nombre_taller}}" class="form-control" placeholder="Nombre del taller...">
            </div>
        </div>
        <!--<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="horainicio_taller">Hora Inicio</label>
                    <input type="time" name="horainicio_taller"  
                    value="{{$taller->horainicio_taller}}" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="horafin_taller">Hora Finalización</label>
                    <input type="time" name="horafin_taller"  
                    value="{{$taller->horafin_taller}}" class="form-control">
            </div>
        </div>-->
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label for="">Editar Días y Horarios</label>
            </div>
        </div>
    </div>
    <div class="row justify-content-center"> 
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            @if($taller->lunes == "LUNES")
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" 
                name="lunes" value="{{ $taller->lunes }}" checked>
                <label class="form-check-label" for="inlineCheckbox1">
                Lunes&nbsp;&nbsp;</label>
            @else
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" 
                name="lunes" value="LUNES">
                <label class="form-check-label">
                Lunes&nbsp;&nbsp;</label>
            @endif
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="iniciolunes_taller"  
            value="{{$taller->iniciolunes_taller}}" class="form-control">
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="finlunes_taller"  
            value="{{$taller->finlunes_taller}}" class="form-control">
        </div>
    </div>
    <br>
    <div class="row justify-content-center"> 
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            @if($taller->martes == "MARTES")
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" 
                name="martes" value="{{ $taller->martes }}" checked>
                <label class="form-check-label" for="inlineCheckbox2">
                Martes&nbsp;&nbsp;</label>
            @else
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" 
                name="martes" value="MARTES">
                <label class="form-check-label">
                Martes&nbsp;&nbsp;</label>
            @endif
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="iniciomartes_taller"  
            value="{{$taller->iniciomartes_taller}}" class="form-control">
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="finmartes_taller"  
            value="{{$taller->finmartes_taller}}" class="form-control">
        </div>
    </div>
    <br>
    <div class="row justify-content-center"> 
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            @if($taller->miercoles == "MIERCOLES")
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" 
                name="miercoles" value="{{ $taller->miercoles }}" checked>
                <label class="form-check-label" for="inlineCheckbox3">
                Miércoles&nbsp;&nbsp;</label>
            @else
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" 
                name="miercoles" value="MIERCOLES">
                <label class="form-check-label">
                Miércoles&nbsp;&nbsp;</label>
            @endif
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="iniciomiercoles_taller"  
            value="{{$taller->iniciomiercoles_taller}}" class="form-control">
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="finmiercoles_taller"  
            value="{{$taller->finmiercoles_taller}}" class="form-control">
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            @if($taller->jueves == "JUEVES")
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" 
                name="jueves" value="{{ $taller->jueves }}" checked>
                <label class="form-check-label" for="inlineCheckbox4">
                Jueves&nbsp;&nbsp;</label>
            @else
                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" 
                name="jueves" value="JUEVES">
                <label class="form-check-label">
                Jueves&nbsp;&nbsp;</label>
            @endif
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="iniciojueves_taller"  
            value="{{$taller->iniciojueves_taller}}" class="form-control">
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="finjueves_taller"  
            value="{{$taller->finjueves_taller}}" class="form-control">
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            @if($taller->viernes == "VIERNES")
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" 
                name="viernes" value="{{ $taller->viernes }}" checked>
                <label class="form-check-label" for="inlineCheckbox5">
                Viernes&nbsp;&nbsp;</label>
            @else
                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" 
                name="viernes" value="VIERNES">
                <label class="form-check-label">
                Viernes&nbsp;&nbsp;</label>
            @endif
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="inicioviernes_taller"  
            value="{{$taller->inicioviernes_taller}}" class="form-control">
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="finviernes_taller"  
            value="{{$taller->finviernes_taller}}" class="form-control">
        </div> 
    </div> 
    <br>
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