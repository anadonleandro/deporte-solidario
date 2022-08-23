@extends ('layouts.admin')

@section ('contenido')

<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3>Datos del Día Asignado</h3>
    </div>
</div>  
<div class="row justify-content-center">
	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
	 	<div class="form-group">
	        <label for="">PACIENTE</label>
	     	<p>
	           <?php
	               $apeynompaci = ($acompanante->apeynom_paciente);
	               if(!empty($apeynompaci))
	               {
	                   echo  $apeynompaci;
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
	        <label for="">ACOMPAÑANTE</label>
	     	<p>
	           <?php
	               $apeynomacomp = ($acompanante->apeynom_acompanante);
	               if(!empty($apeynomacomp))
	               {
	                   echo  $apeynomacomp;
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
            <label for="fechanac_paciente">FECHA ASIGNADA</label>
            <p>
                <?php
                    $fecha = ($acompanante->fecha_pacienteacompanante);
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
	        <label for="">HORA DESDE</label>
	     	<p>
	           <?php
	               $inicio = ($acompanante->horainicio_pacienteacompanante);
	               if(!empty($inicio))
	               {
	                   echo  $inicio;
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
	        <label for="">HORA HASTA</label>
	     	<p>
	           <?php
	               $fin = ($acompanante->horafin_pacienteacompanante);
	               if(!empty($fin))
	               {
	                   echo  $fin;
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
	        <label for="">ESTADO</label>
	     	<p>
	           <?php
	               $estado = ($acompanante->estado_pacienteacompanante);
	               if(!empty($estado))
	               {
	                   echo  $estado;
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
	<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
	 	<div class="form-group">
	        <label for="">OBSERVACIONES</label>
	     	<p>
	           <?php
	               $obs = ($acompanante->obs_pacienteacompanante);
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
<div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group"> 
            <label for="informe_pacienteacompanante">INFORME DEL ACOMPAÑANTE</label>
            <textarea class="form-control" name="informe_pacienteacompanante" rows="2"  
                maxlength="1000" readonly>{{$acompanante->informe_pacienteacompanante}}
            </textarea>
        </div>
    </div>
</div>

@endsection