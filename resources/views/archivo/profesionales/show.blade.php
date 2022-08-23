@extends ('layouts.admin')

@section ('contenido')

    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Datos del Profesional</h3>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="matricula_profesional">MATRICULA</label>
                <p>
                    <?php
                        $matricula = ($profesional->matricula_profesional);
                        if(!empty($matricula))
                        {
                            echo  $matricula;
                        }
                        else
                        {
                            echo "<font color='#FF0000'>SIN DATOS</font>";
                        } 
                    ?>  
                </p>
            </div>
        </div>
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="apeynom_profesional">APELLIDO Y NOMBRES</label>
                <p>
                    <?php
                        $apeynom = ($profesional->apeynom_profesional);
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
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="especialidad_profesional">ESPECIALIDAD</label>
                <p>
                    <?php
                        $especialidad = ($profesional->especialidad_profesional);
                        if(!empty($especialidad))
                        {
                            echo  $especialidad;
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
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="dni_profesional">DOCUMENTO</label>
                <p>
                    <?php
                        $dni = ($profesional->dni_profesional);
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
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="domicilio_profesional">DOMICILIO</label>
                <p>
                    <?php
                        $domicilio = ($profesional->domicilio_profesional);
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
        <div class="col-lg-5 col-sm-5 col-md-5 col-xs-12">
            <div class="form-group">
                <label for="localidad_profesional">LOCALIDAD</label>
                <p>
                    <?php
                        $localidad = ($profesional->localidad_profesional);
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
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="fechanac_profesional">FECHA DE NACIMIENTO</label>
                <p>
                    <?php
                        $fecha = ($profesional->fechanac_profesional);
                        if ($fecha > 0)
                        {
                            $fecha=date("d-m-Y",strtotime($fecha));
                            echo  $fecha;
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
                <label for="edad_profesional">EDAD</label>
                <p>
                    <?php
                        $edad = ($profesional->edad_profesional);
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
        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
            <div class="form-group">
                <label for="telefono_profesional">TELEFONO</label>
                <p>
                    <?php
                        $telefono = ($profesional->telefono_profesional);
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
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="email_profesional">EMAIL</label>
                <p>
                    <?php
                        $email = ($profesional->email_profesional);
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
        
@endsection