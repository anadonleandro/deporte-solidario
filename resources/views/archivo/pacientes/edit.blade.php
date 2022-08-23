@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Paciente: {{ $paciente->apeynom_paciente}}</h3>
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

	{!!Form::model($paciente,['url'=>['archivo/pacientes',$paciente->id_paciente],'method'=>'PATCH'])!!}
    {{Form::token()}}

    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
              <label for="apeynom_paciente">Apellido y Nombres</label>
                  <input type="text" name="apeynom_paciente" maxlength="40" required autofocus 
                    value="{{$paciente->apeynom_paciente}}" class="form-control" 
                    placeholder="Apellido y nombres...">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="fechanac_paciente">Fecha de Nacimiento</label>
                    <input type="date" name="fechanac_paciente" maxlength="40" 
                    value="{{$paciente->fechanac_paciente}}" max="<?php echo date("Y-m-d",strtotime(date("Y-m-d"))); ?>" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="dni_paciente">Documento</label>
                    <input type="text" name="dni_paciente" maxlength="10" 
                    value="{{$paciente->dni_paciente}}" class="form-control" 
                    placeholder="Documento...">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="telefono_paciente">Teléfono</label>
                    <input type="text" name="telefono_paciente" maxlength="20" 
                    value="{{$paciente->telefono_paciente}}" class="form-control" 
                    placeholder="Teléfono...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="obrasocial_paciente">Obra Social</label>
                    <input type="text" name="obrasocial_paciente" maxlength="40" 
                    value="{{$paciente->obrasocial_paciente}}" 
                    class="form-control" placeholder="Obra Social...">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="afiliado_paciente">N° de Afiliado</label>
                    <input type="text" name="afiliado_paciente" maxlength="20" 
                    value="{{$paciente->afiliado_paciente}}" 
                    class="form-control" placeholder="N° de Afiliado...">
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
            <div class="form-group">
                <label for="edad_paciente">Edad</label>
                    <input type="number" name="edad_paciente" maxlength="3" 
                    value="{{$paciente->edad_paciente}}" class="form-control">
            </div>
        </div>
        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-12">
            <div class="form-group">
                <label for="peso_paciente">Peso</label>
                    <input type="number" name="peso_paciente" maxlength="3" 
                    value="{{$paciente->peso_paciente}}" class="form-control">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="talla_paciente">Talla</label>
                    <input type="text" name="talla_paciente" maxlength="20" 
                    value="{{$paciente->talla_paciente}}" 
                    class="form-control" placeholder="Talla...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">    
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="domicilio_paciente">Domicilio</label>
                    <input type="text" name="domicilio_paciente" maxlength="40" 
                    value="{{$paciente->domicilio_paciente}}" 
                    class="form-control" placeholder="Domicilio...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="localidad_paciente">Localidad</label>
                    <input type="text" name="localidad_paciente" maxlength="30" 
                    value="{{$paciente->localidad_paciente}}" 
                    class="form-control" placeholder="Localidad...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center"> 
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="email_paciente">Email</label>
                    <input type="email" name="email_paciente" maxlength="40" 
                    value="{{$paciente->email_paciente}}" 
                    class="form-control" placeholder="Email...">
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="ocupacion_paciente">Ocupación</label>
                    <input type="text" name="ocupacion_paciente" maxlength="30" 
                    value="{{$paciente->ocupacion_paciente}}" 
                    class="form-control" placeholder="Ocupación...">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="fechaadmision_paciente">Fecha de Admisión</label>
                    <input type="date" name="fechaadmision_paciente" 
                    value="{{$paciente->fechaadmision_paciente}}" max="<?php echo date("Y-m-d",strtotime(date("Y-m-d"))); ?>" class="form-control">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Contactos del Paciente</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="contacto_paciente">Apellido y Nombres</label>
                    <input type="text" name="contacto_paciente" maxlength="40"
                    value="{{$paciente->contacto_paciente}}" class="form-control" 
                    placeholder="Apellido y nombres...">
            </div>
        </div>
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="domiciliocontacto_paciente">Domicilio</label>
                    <input type="text" name="domiciliocontacto_paciente" maxlength="40"
                    value="{{$paciente->domiciliocontacto_paciente}}" class="form-control" 
                    placeholder="Domicilio...">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="telefonocontacto_paciente">Teléfono</label>
                    <input type="text" name="telefonocontacto_paciente" maxlength="20"
                    value="{{$paciente->telefonocontacto_paciente}}" class="form-control" 
                    placeholder="Teléfono...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="contactodos_paciente">Apellido y Nombres</label>
                    <input type="text" name="contactodos_paciente" maxlength="40"
                    value="{{$paciente->contactodos_paciente}}" class="form-control" 
                    placeholder="Apellido y nombres...">
            </div>
        </div>
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="domiciliocontactodos_paciente">Domicilio</label>
                    <input type="text" name="domiciliocontactodos_paciente" maxlength="40"
                    value="{{$paciente->domiciliocontactodos_paciente}}" class="form-control" 
                    placeholder="Domicilio...">
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="telefonocontactodos_paciente">Teléfono</label>
                    <input type="text" name="telefonocontactodos_paciente" maxlength="20"
                    value="{{$paciente->telefonocontactodos_paciente}}" class="form-control" 
                    placeholder="Teléfono...">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label for="obscontacto_paciente">Observaciones del Contacto</label>
                    <input type="text" name="obscontacto_paciente" maxlength="120"
                    value="{{$paciente->obscontacto_paciente}}" class="form-control" 
                    placeholder="Observaciones...">
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center"> 
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">                
                <a type="button" class="btn btn-success btn-md btn-block"
                    data-toggle="collapse" href="#mostrarHistoriaClinica" role="button" aria-expanded="false" aria-control="mostrarHistoriaClinica"><i class="fa fa-list-alt"></i> 
                    Paciente HISTORIA CLÍNICA
                </a>
            </div>
        </div>
    </div>
   
    <div class="collapse multi-collapse" id="mostrarHistoriaClinica" hidden>   
        <div class="panel panel-default">
            <div class="panel-heading" align="center">
                <strong>      
                    CARGAR HISTORIA CLINICA
                </strong>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="motivoconsulta">Motivo de la Consulta</label>
                    <textarea class="form-control" name="motivoconsulta" rows="2"  
                        maxlength="1000" align="text-justify">{{$paciente->motivoconsulta}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="historiaenfermedadactual">Historia de la Enfermedad Actual</label>
                    <textarea class="form-control" name="historiaenfermedadactual" rows="2"  
                        maxlength="1000" align="text-justify">{{$paciente->historiaenfermedadactual}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="contextofamlabper">Contexto Familiar Laboral y Personal</label>
                    <textarea class="form-control" name="contextofamlabper" rows="2"  
                        maxlength="1000" align="text-justify">{{$paciente->contextofamlabper}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" align="left">
                <strong>      
                    ESTUDIOS CLINICOS
                </strong>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-sm-10 col-md-10 col-xs-12">
                <div class="form-group">
                    <label for="derutina">De Rutina</label>
                        <input type="text" name="derutina" maxlength="70"
                        value="{{$paciente->derutina}}" class="form-control">
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <label>Realizados</label>
                <select name="realizados" class="form-control">
                  @if($paciente->realizados=='SI')
                      <option value="SI" selected>SI</option>
                      <option value="NO">NO</option>
                  @else
                      <option value="SI">SI</option>
                      <option value="NO" selected>NO</option>
                  @endif
                </select>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="aclaraciones">Aclaraciones</label>
                    <textarea class="form-control" name="aclaraciones" rows="2"  
                        maxlength="1000" align="text-justify">{{$paciente->aclaraciones}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <label>Específicos</label>
                <select name="especificos" class="form-control">
                  @if($paciente->especificos=='SI')
                      <option value="SI" selected>SI</option>
                      <option value="NO">NO</option>
                  @else
                      <option value="SI">SI</option>
                      <option value="NO" selected>NO</option>
                  @endif
                </select>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="cuales">¿Cuáles?</label>
                    <textarea class="form-control" name="cuales" rows="2"  
                        maxlength="1000" align="text-justify">{{$paciente->cuales}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="diagnostico_paciente">Diagnóstico (DSM)</label>
                    <textarea class="form-control" name="diagnostico_paciente" rows="2"  
                        maxlength="1000" align="text-justify">{{$paciente->diagnostico_paciente}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" align="left">
                <strong>      
                    PLAN TERAPEUTICO DETALLADO
                </strong>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <label>Anexado</label>
                <select name="anexado_plan" class="form-control">
                  @if($paciente->anexado_plan=='SI')
                      <option value="SI" selected>SI</option>
                      <option value="NO">NO</option>
                  @else
                      <option value="SI">SI</option>
                      <option value="NO" selected>NO</option>
                  @endif
                </select>
            </div>
        </div>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading" align="left">
                <strong>      
                    CONSENTIMIENTO INFORMADO
                </strong>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <label>Anexado</label>
                <select name="anexado_consentimiento" class="form-control">
                  @if($paciente->anexado_consentimiento=='SI')
                      <option value="SI" selected>SI</option>
                      <option value="NO">NO</option>
                  @else
                      <option value="SI">SI</option>
                      <option value="NO" selected>NO</option>
                  @endif
                </select>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="epicrisis">Epicrisis</label>
                    <textarea class="form-control" name="epicrisis" rows="2"  
                        maxlength="1000" align="text-justify">{{$paciente->epicrisis}}
                    </textarea>
                </div>
            </div>
        </div>
        <br>
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