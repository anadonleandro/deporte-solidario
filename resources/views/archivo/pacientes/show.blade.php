@extends ('layouts.admin')

@section ('contenido')

    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Datos del Paciente</h3>
        </div>
    </div>

    <div class="row justify-content-center">
    	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
    		<div class="form-group">
            	<label for="apeynom_paciente">APELLIDO Y NOMBRES</label>
            	<p>
                    <?php
                        $apeynom = ($paciente->apeynom_paciente);
                        if(!empty($apeynom))
                        {
                            echo  $apeynom;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?>  
                </p>
            </div>
    	</div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="fechaadmision_paciente">FECHA ADMISION</label>
                <p>
                    <?php
                        $fechaadmi = ($paciente->fechaadmision_paciente);
                        if ($fechaadmi > 0)
                        {
                            $fechaadmi=date("d-m-Y",strtotime($fechaadmi));
                            echo  $fechaadmi;
                        }
                        else
                        {
                            echo "SIN DATOS";
                        } 
                    ?>  
                </p>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="fechanac_paciente">FECHA NACIMIENTO</label>
                <p>
                    <?php
                        $fecha = ($paciente->fechanac_paciente);
                        if ($fecha > 0)
                        {
                            $fecha=date("d-m-Y",strtotime($fecha));
                            echo  $fecha;
                        }
                        else
                        {
                            echo "SIN DATOS";
                        } 
                    ?>  
                </p>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="dni_paciente">DOCUMENTO</label>
                <p>
                    <?php
                        $dni = ($paciente->dni_paciente);
                        if(!empty($dni))
                        {
                            echo  $dni;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?>  
                </p>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="telefono_paciente">TELEFONO</label>
                <p>
                    <?php
                        $telefono = ($paciente->telefono_paciente);
                        if(!empty($telefono))
                        {
                            echo  $telefono;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?>
                </p>  
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="obrasocial_paciente">OBRA SOCIAL</label>
                <p>
                    <?php
                        $obrasocial = ($paciente->obrasocial_paciente);
                        if(!empty($obrasocial))
                        {
                            echo  $obrasocial;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?>  
                </p>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="obrasocial_paciente">N° DE AFILIADO</label>
                <p>
                    <?php
                        $afiliado = ($paciente->afiliado_paciente);
                        if(!empty($afiliado))
                        {
                            echo  $afiliado;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?>  
                </p>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="edad_paciente">EDAD</label>
                <p>
                    <?php
                        $edad = ($paciente->edad_paciente);
                        if(!empty($edad))
                        {
                            echo  $edad;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?>  
                </p>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="peso_paciente">PESO</label>
                <p>
                    <?php
                        $peso = ($paciente->peso_paciente);
                        if(!empty($peso))
                        {
                            echo  $peso;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?>  
                </p>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="talla_paciente">TALLA</label>
                <p>
                    <?php
                        $talla = ($paciente->talla_paciente);
                        if(!empty($talla))
                        {
                            echo  $talla;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?>  
                </p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="domicilio_paciente">DOMICILIO</label>
                <p>
                    <?php
                        $domicilio = ($paciente->domicilio_paciente);
                        if(!empty($domicilio))
                        {
                            echo  $domicilio;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?> 
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="localidad_paciente">LOCALIDAD</label>
                <p>
                    <?php
                        $localidad = ($paciente->localidad_paciente);
                        if(!empty($localidad))
                        {
                            echo  $localidad;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?> 
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="email_paciente">EMAIL</label>
                <p>
                    <?php
                        $email = ($paciente->email_paciente);
                        if(!empty($email))
                        {
                            echo  $email;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?> 
                </p>
            </div>
        </div>        
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Contactos del Paciente</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="contacto_paciente">APELLIDO Y NOMBRES</label>
                <p>
                    <?php
                        $contacto = ($paciente->contacto_paciente);
                        if(!empty($contacto))
                        {
                            echo  $contacto;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?> 
                </p>
            </div>
        </div> 
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="domiciliocontacto_paciente">DOMICILIO</label>
                <p>
                    <?php
                        $domiciliocontacto = ($paciente->domiciliocontacto_paciente);
                        if(!empty($domiciliocontacto))
                        {
                            echo  $domiciliocontacto;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?> 
                </p>
            </div>
        </div> 
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="telefonocontacto_paciente">TELEFONO</label>
                <p>
                    <?php
                        $telefonocontacto = ($paciente->telefonocontacto_paciente);
                        if(!empty($telefonocontacto))
                        {
                            echo  $telefonocontacto;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?> 
                </p>
            </div>
        </div> 
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="contactodos_paciente">APELLIDO Y NOMBRES</label>
                <p>
                    <?php
                        $contactodos = ($paciente->contactodos_paciente);
                        if(!empty($contactodos))
                        {
                            echo  $contactodos;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?> 
                </p>
            </div>
        </div> 
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="domiciliocontactodos_paciente">DOMICILIO</label>
                <p>
                    <?php
                        $domiciliocontactodos = ($paciente->domiciliocontactodos_paciente);
                        if(!empty($domiciliocontactodos))
                        {
                            echo  $domiciliocontactodos;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?> 
                </p>
            </div>
        </div> 
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="telefonocontactodos_paciente">TELEFONO</label>
                <p>
                    <?php
                        $telefonocontactodos = ($paciente->telefonocontactodos_paciente);
                        if(!empty($telefonocontactodos))
                        {
                            echo  $telefonocontactodos;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?> 
                </p>
            </div>
        </div> 
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label for="obscontacto_paciente">OBSERVACIONES DEL CONTACTO</label>
                <p>
                    <?php
                        $obscontacto = ($paciente->obscontacto_paciente);
                        if(!empty($obscontacto))
                        {
                            echo  $obscontacto;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?> 
                </p>
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
    
    <!--<div id="mostrarCargaDiagnostico" hidden>   
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="diagnostico_paciente">Diagnóstico del Paciente</label>
                    <textarea class="form-control" name="diagnostico_paciente" rows="2"  
                        maxlength="300" readonly>{{$paciente->diagnostico_paciente}}
                    </textarea>
                </div>
            </div>
        </div>
    </div>-->
    <div class="collapse multi-collapse" id="mostrarHistoriaClinica" hidden>   
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="motivoconsulta">Motivo de la Consulta</label>
                    <textarea class="form-control" name="motivoconsulta" rows="2"  
                        maxlength="1000" readonly>{{$paciente->motivoconsulta}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="historiaenfermedadactual">Historia de la Enfermedad Actual</label>
                    <textarea class="form-control" name="historiaenfermedadactual" rows="2"  
                        maxlength="1000" readonly>{{$paciente->historiaenfermedadactual}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="contextofamlabper">Contexto Familiar Laboral y Personal</label>
                    <textarea class="form-control" name="contextofamlabper" rows="2"  
                        maxlength="1000" readonly>{{$paciente->contextofamlabper}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3>Estudios Clínicos</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label for="derutina">DE RUTINA</label>
                    <p>
                        <?php
                            $derutina = ($paciente->derutina);
                            if(!empty($derutina))
                            {
                                echo  $derutina;
                            }
                            else
                            {
                                echo "<font color='#FF0000'>SIN DATOS</font>";
                            } 
                        ?> 
                    </p>
                </div>
            </div> 
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                    <label for="derutina">REALIZADOS</label>
                    <p>
                        <?php
                            $realizados = ($paciente->realizados);
                            if(!empty($realizados))
                            {
                                echo  $realizados;
                            }
                            else
                            {
                                echo "<font color='#FF0000'>NO</font>";
                            } 
                        ?> 
                    </p>
                </div>
            </div> 
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="aclaraciones">Aclaraciones</label>
                    <textarea class="form-control" name="aclaraciones" rows="2"  
                        maxlength="1000" readonly>{{$paciente->aclaraciones}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                    <label for="especificos">ESPECIFICOS</label>
                    <p>
                        <?php
                            $especificos = ($paciente->especificos);
                            if(!empty($especificos))
                            {
                                echo  $especificos;
                            }
                            else
                            {
                                echo "<font color='#FF0000'>NO</font>";
                            } 
                        ?> 
                    </p>
                </div>
            </div> 
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="cuales">¿Cuáles?</label>
                    <textarea class="form-control" name="cuales" rows="2"  
                        maxlength="1000" readonly>{{$paciente->cuales}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="diagnostico_paciente">Diagnóstico (DSM)</label>
                    <textarea class="form-control" name="diagnostico_paciente" rows="2"  
                        maxlength="1000" readonly>{{$paciente->diagnostico_paciente}}
                    </textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3>Plan Terapéutico Detallado</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                    <label for="anexado">ANEXADO</label>
                    <p>
                        <?php
                            $anexado = ($paciente->anexado_plan);
                            if(!empty($anexado))
                            {
                                echo  $anexado;
                            }
                            else
                            {
                                echo "<font color='#FF0000'>NO</font>";
                            } 
                        ?> 
                    </p>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3>Consentimiento Informado</h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                <div class="form-group">
                    <label for="anexado">ANEXADO</label>
                    <p>
                        <?php
                            $anexado = ($paciente->anexado_consentimiento);
                            if(!empty($anexado))
                            {
                                echo  $anexado;
                            }
                            else
                            {
                                echo "<font color='#FF0000'>NO</font>";
                            } 
                        ?> 
                    </p>
                </div>
            </div> 
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group"> 
                    <label for="epicrisis">Epicrisis</label>
                    <textarea class="form-control" name="epicrisis" rows="2"  
                        maxlength="1000" readonly>{{$paciente->epicrisis}}
                    </textarea>
                </div>
            </div>
        </div>
    </div>

@endsection