@extends ('layouts.admin')

@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Taller</h3>
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

	{!!Form::open(array('url'=>'archivo/talleres','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre_taller">Nombre del Taller</label>
                    <input type="text" name="nombre_taller" maxlength="20" autofocus 
                    value="{{old('nombre_taller')}}" class="form-control" placeholder="Nombre del taller...">
            </div>
        </div>
        <!--<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="horainicio_taller">Hora Inicio</label>
                    <input type="time" name="horainicio_taller"  
                    value="{{old('horainicio_taller')}}" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="horafin_taller">Hora Finalización</label>
                    <input type="time" name="horafin_taller"  
                    value="{{old('horafin_taller')}}" class="form-control">
            </div>
        </div>-->
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label for="">Agregar Días y Horarios</label>
            </div>
        </div>
    </div>    
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">            
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="lunes" 
            value="LUNES">  
            <label class="form-check-label" for="inlineCheckbox1">
                    Lunes</label>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="iniciolunes_taller"  
            value="{{old('iniciolunes_taller')}}" class="form-control">
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="finlunes_taller"  
            value="{{old('finlunes_taller')}}" class="form-control">
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">            
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="martes" 
            value="MARTES">  
            <label class="form-check-label" for="inlineCheckbox2">
                    Martes</label>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="iniciomartes_taller"  
            value="{{old('iniciomartes_taller')}}" class="form-control">
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="finmartes_taller"  
            value="{{old('finmartes_taller')}}" class="form-control">
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">            
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="miercoles" 
            value="MIERCOLES">  
            <label class="form-check-label" for="inlineCheckbox3">
                    Miércoles</label>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="iniciomiercoles_taller"  
            value="{{old('iniciomiercoles_taller')}}" class="form-control">
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="finmiercoles_taller"  
            value="{{old('finmiercoles_taller')}}" class="form-control">
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">            
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="jueves" 
            value="JUEVES">  
            <label class="form-check-label" for="inlineCheckbox4">
                    Jueves</label>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="iniciojueves_taller"  
            value="{{old('iniciojueves_taller')}}" class="form-control">
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="finjueves_taller"  
            value="{{old('finjueves_taller')}}" class="form-control">
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">            
            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="viernes" 
            value="VIERNES">  
            <label class="form-check-label" for="inlineCheckbox5">
                    Viernes</label>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="inicioviernes_taller"  
            value="{{old('inicioviernes_taller')}}" class="form-control">
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input type="time" name="finviernes_taller"  
            value="{{old('finviernes_taller')}}" class="form-control">
        </div>
    </div>

        <!--<div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="martes"
            value="MARTES">
            <label class="form-check-label" for="inlineCheckbox2">
                    Martes&nbsp;&nbsp;</label>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="miercoles" 
            value="MIERCOLES">
            <label class="form-check-label" for="inlineCheckbox3">
                    Miércoles&nbsp;&nbsp;</label>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="jueves" 
            value="JUEVES">
            <label class="form-check-label" for="inlineCheckbox4">
                    Jueves&nbsp;&nbsp;</label>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="viernes" 
            value="VIERNES">
            <label class="form-check-label" for="inlineCheckbox5">
                    Viernes</label> 
        </div> 
    </div> -->
    <br>
    <div class="row justify-content-center"> 
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button class="btn btn-primary" type="submit"><i class="fa fa-check-square-o"></i> Guardar</button>
            <button class="btn btn-danger" type="reset"><i class="fa fa-close"></i> Cancelar</button>
        </div>
    </div>         

	{!!Form::close()!!}		

@endsection