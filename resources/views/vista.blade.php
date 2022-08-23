<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pdf</title>
    <link rel="stylesheet" type="text/css" href="app.css">
</head>

<!--ESTILO...................................................................................-->
<style>

   header { position: fixed;
     left: 0px;
     top: -110px;
     right: 0px;
     height: 50px;
     background-color: white;
     text-align: center;
   }

   body{
     font-family: sans-serif;
     margin: 10mm 2mm 10mm 2mm;
   }

   body tr{
    font-size: 12px;
   }

   @page
   {
   /*margin: 95px 70px;*/
   margin: -5px 90px;
   margin-bottom: 0px;
   }

   footer {
     position: fixed;
     left: 0px;
     bottom: -40px;
     right: 0px;
     height: 40px;
     border-bottom: 2px solid #ddd;

   }
   footer .page:after {
     content: counter(page);
   }
   footer table {
     width: 100%;
   }
   footer p {
     text-align: center;
   }
   footer .izq {
     text-align: center;
   }

</style>
<!--ESTILO...................................................................................-->

<!--HEADER...................................................................................-->
<!--
<header>
    <div>
        <p><img src="images/pdi0.png"></p>
    </div>    
</header>
-->
<!--BODY.....................................................................................-->
    <body>
        <section>
            <br>
            <div style="text-align: center">
                <h4><u>HISTORIA CLINICA</u></h4>
            </div>  
            <div style="text-align: left">
                <h5><u>DATOS PERSONALES</u></h5>
            </div>
            <table>  
                <tr>
                    <td align="left" width="150"><b>FECHA ADMISION: </b>
                        <?php
                                $fechaadmi = ($historiaclinica->fechaadmision_paciente);
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
                    </td>                     
                </tr>
            </table>
            <table>  
                <tr>
                    <td align="left" width="110"><b>APELLIDO Y NOMBRES: </b>{{ $historiaclinica->apeynom_paciente }} </td>                    
                    <td align="left" width="110"><b>DNI:  </b>{{ $historiaclinica->dni_paciente }}  </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td align="left" width="110"><b>OBRA SOCIAL:  </b>{{ $historiaclinica ->obrasocial_paciente }}  </td>
                    <td align="left" width="110"><b>N° AFILIADO:  </b>{{ $historiaclinica->afiliado_paciente }}  </td> 
                </tr>
            </table>
            <table>
                <tr>
                    <td align="left" width="110"><b>FECHA NACIMIENTO: </b>
                        <?php
                                $fecha = ($historiaclinica->fechanac_paciente);
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
                    </td> 
                    <td align="left" width="110"><b>EDAD: </b>{{ $historiaclinica->edad_paciente }} </td>
                    <td align="left" width="110"><b>TELEFONO: </b>{{ $historiaclinica->telefono_paciente }} </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td align="left" width="110"><b>DIRECCION: </b>{{ $historiaclinica->domicilio_paciente }} </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td align="left" width="110"><b>PESO: </b>{{ $historiaclinica->peso_paciente }} </td>
                    <td align="left" width="110"><b>TALLA: </b>{{ $historiaclinica->talla_paciente }} </td>  
                </tr>
            </table>
            <br>
            <table>  
                <tr>
                    <td align="left" width="350"><b>CONTACTO 1: </b>{{ $historiaclinica->contacto_paciente }} </td>
                </tr>
                <tr>
                    <td align="left" width="350"><b>DIRECCION: </b>{{ $historiaclinica->domiciliocontacto_paciente }} </td>
                </tr>
                <tr>
                    <td align="left" width="350"><b>TELEFONO: </b>{{ $historiaclinica->telefonocontacto_paciente }} </td> 
                </tr>
            </table>
            <br>
            <table>  
                <tr>
                    <td align="left" width="350"><b>CONTACTO 2: </b>{{ $historiaclinica->contactodos_paciente }} </td>
                </tr>
                <tr>
                    <td align="left" width="350"><b>DIRECCION: </b>{{ $historiaclinica->domiciliocontactodos_paciente }} </td>
                </tr>
                <tr>
                    <td align="left" width="350"><b>TELEFONO: </b>{{ $historiaclinica->telefonocontactodos_paciente }} </td> 
                </tr>                
            </table>
            <br>
            <table>
                <tr>
                    <td align="left" width="350"><b>OBSERVACIONES: </b>{{ $historiaclinica->obscontacto_paciente }} </td> 
                </tr>
            </table>
            <div style="text-align: left">
                <h5><u>RESUMEN PLAN TERAPEUTICO</u></h5>
            </div>
            <table>  
                <tr>
                    <td align="left" width="110"><b>Profesionales: </td>
                </tr>
                <tr>
                    <td align="left" width="110"><b>Psicólogo:</b></td>
                </tr>
                <tr>
                    <td align="left" width="110"><b>Psiquiatra:</b></td> 
                </tr>
                <tr>
                    <td align="left" width="110"><b>Clínico:</b></td>
                </tr>
                <tr>
                    <td align="left" width="110"><b>Nutricionista:</b></td>
                </tr>
                <tr>
                    <td align="left" width="110"><b>AT: SI - NO</b></td>
                </tr>
            </table>
            <div style="text-align: left">
                <h5><u>MOTIVO DE LA CONSULTA</u></h5>
            </div>
            <table>  
                <tr>
                    <td align="left" width="110" align="text-justify">{{ $historiaclinica->motivoconsulta }}</td>
                </tr>
            </table>
            <div style="text-align: left">
                <h5><u>HISTORIA DE LA ENFERMEDAD ACTUAL</u></h5>
            </div>
            <table>  
                <tr>
                    <td align="left" width="110" align="text-justify">{{ $historiaclinica->historiaenfermedadactual }}</td>
                </tr>
            </table>
            <div style="text-align: left">
                <h5><u>CONTEXTO FAMILIAR, LABORAL Y PERSONAL</u></h5>
            </div>
            <table>  
                <tr>
                    <td align="left" width="110" align="text-justify">{{ $historiaclinica->contextofamlabper }}</td>
                </tr>
            </table>
            <div style="text-align: left">
                <h5><u>ESTUDIOS CLINICOS</u></h5>
            </div>
            <table>  
                <tr>
                    <td align="left" width="110"><b>De Rutina: </b>{{ $historiaclinica->derutina }} </td>
                </tr>
                <tr>
                    <td align="left" width="110"><b>Realizados: </b>{{ $historiaclinica->realizados }} </td>
                </tr>
                <tr>
                    <td align="left" width="110" align="text-justify"><b>Aclaraciones: </b>{{ $historiaclinica->aclaraciones }} </td> 
                </tr>
                <tr>
                    <td align="left" width="110"><b>Específicos: </b>{{ $historiaclinica->especificos }} </td> 
                </tr>
                <tr>
                    <td align="left" width="110" align="text-justify"><b>¿Cuáles?: </b>{{ $historiaclinica->cuales }} </td> 
                </tr>
            </table>
            <div style="text-align: left">
                <h5><u>DIAGNOSTICO (DSM)</u></h5>
            </div>
            <table>  
                <tr>
                    <td align="left" width="110" align="text-justify">{{ $historiaclinica->diagnostico_paciente }} </td>
                </tr>
            </table>
            <div style="text-align: left">
                <h5><u>PLAN TERAPEUTICO DETALLADO</u></h5>
            </div>
            <table>  
                <tr>
                    <td align="left" width="110"><b>Anexado: </b>{{ $historiaclinica->anexado_plan }} </td>
                </tr>
            </table>
            <div style="text-align: left">
                <h5><u>CONSENTIMIENTO INFORMADO</u></h5>
            </div>
            <table>  
                <tr>
                    <td align="left" width="110"><b>Anexado: </b>{{ $historiaclinica->anexado_consentimiento }} </td>
                </tr>
            </table>
            <div style="text-align: left">
                <h5><u>EPICRISIS</u></h5>
            </div>
            <table>  
                <tr>
                    <td align="left" width="110" align="text-justify">{{ $historiaclinica->epicrisis }} </td>
                </tr>
            </table>
        </section>
    </body>
</html>






