@extends ('layouts.admin')

@section ('contenido')

    <!--<div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>DATOS DEL TALLER</h3>
        </div>
    </div>-->

    @foreach($talleres as $tall)
    <div class="row justify-content-center">
    	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">NOMBRE DEL TALLER</label>
            	<p>{{$tall->nombre_taller}}</p>
            </div>
    	</div>
    </div>
    @endforeach
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <label for="">DIAS Y HORARIOS DEL TALLER</label>
                <table>
                        @foreach($talleres as $tall)
                        <tr>
                            <td>
                                <?php
                                    $lunes = ($tall->lunes);
                                    if(!empty($lunes))
                                    {
                                        echo $lunes.'  -  desde '.$tall->iniciolunes_taller.'  hasta  '.$tall->finlunes_taller;
                                    }
                                    else
                                    {
                                        echo "";
                                    } 
                                ?>       
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    $martes = ($tall->martes);
                                    if(!empty($martes))
                                    {
                                        echo $martes.'  -  desde '.$tall->iniciomartes_taller.'  hasta  '.$tall->finmartes_taller;
                                    }
                                    else
                                    {
                                        echo "";
                                    } 
                                ?>       
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    $miercoles = ($tall->miercoles);
                                    if(!empty($miercoles))
                                    {
                                        echo $miercoles.'  -  desde '.$tall->iniciomiercoles_taller.'  hasta  '.$tall->finmiercoles_taller;
                                    }
                                    else
                                    {
                                        echo "";
                                    } 
                                ?>       
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    $jueves = ($tall->jueves);
                                    if(!empty($jueves))
                                    {
                                        echo $jueves.'  -  desde '.$tall->iniciojueves_taller.'  hasta  '.$tall->finjueves_taller;
                                    }
                                    else
                                    {
                                        echo "";
                                    } 
                                ?>       
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    $viernes = ($tall->viernes);
                                    if(!empty($viernes))
                                    {
                                        echo $viernes.'  -  desde '.$tall->inicioviernes_taller.'  hasta  '.$tall->finviernes_taller;
                                    }
                                    else
                                    {
                                        echo "";
                                    } 
                                ?>       
                            </td>
                        </tr>
                        @endforeach
                    </table>           
            </div>
        </div>
    </div> 
    
@endsection