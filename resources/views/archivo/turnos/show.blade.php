@extends ('layouts.admin')

@section ('contenido')

    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>DATOS DEL TURNO</h3>
        </div>
    </div>

    @foreach($turnos as $turno)
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="apeynom_paciente">PACIENTE</label>
                <p>
                    <?php
                        $paciente = ($turno->apeynom_paciente);
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
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="apeynom_profesional">PROFESIONAL</label>
                <p>
                    <?php
                        $profesional = ($turno->apeynom_profesional);
                        if(!empty($profesional))
                        {
                        echo  $profesional;
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
            	<label for="fecha_turno">FECHA DEL TURNO</label>
            	<p>
                    <?php
                        $fecha = ($turno->fecha_turno);
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
                <label for="hora_cita">HORA</label>
                <p>
                    <?php
                        $hora = ($turno->hora_turno);
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
                <label for="estado_turno">ESTADO</label>
                <p>{{$turno->estado_turno}}</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="obs_turno">OBSERVACIONES DEL TURNO</label>
                <p>
                    <?php
                        $obs = ($turno->obs_turno);
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