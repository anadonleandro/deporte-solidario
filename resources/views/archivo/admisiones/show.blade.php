@extends ('layouts.admin')

@section ('contenido')

    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>DATOS DE LA CITA</h3>
        </div>
    </div>

    @foreach($admisiones as $admi)
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
            <div class="form-group">
                <label for="apeynom_admision">APELLIDO Y NOMBRES</label>
                <p>
                    <?php
                        $paciente = ($admi->apeynom_admision);
                        if(!empty($paciente))
                        {
                        echo  $paciente;
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
                <label for="telefono_admision">DOCUMENTO</label>
                <p>
                    <?php
                        $dni = ($admi->dni_admision);
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
                <label for="telefono_admision">TELEFONO</label>
                <p>
                    <?php
                        $telefono = ($admi->telefono_admision);
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
                <label for="telefono_admision">OBRA SOCIAL</label>
                <p>
                    <?php
                        $obrasocial = ($admi->obrasocial_admision);
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
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="fecha_admision">FECHA DE LA CITA</label>
                <p>
                    <?php
                        $fecha = ($admi->fecha_admision);
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
                <label for="hora_admision">HORA</label>
                <p>
                    <?php
                        $hora = ($admi->hora_admision);
                        if ($hora > 0)
                        {
                        echo  $hora;
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
                <label for="lugar_admision">LUGAR</label>
                <p>{{$admi->lugar_admision}}</p>
            </div>
        </div>
        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
            <div class="form-group">
                <label for="estado_admision">ESTADO</label>
                <p>{{$admi->estado_admision}}</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <div class="form-group">
                <label for="obs_admision">OBSERVACIONES</label>
                <p>
                    <?php
                        $obs = ($admi->obs_admision);
                        if(!empty($obs))
                        {
                        echo  $obs;
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
    @endforeach
   
@endsection