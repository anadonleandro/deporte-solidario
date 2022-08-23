@extends ('layouts.admin')

@section ('contenido')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Calendario Talleres/Pacientes</h3>
		{!! Form::open(array('url'=>'/talleresdos','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
			<div class="form-group">
				<div class="input-group">
					<input type="text" class="form-control" name="searchText" placeholder="Buscar paciente..." value="{{$searchText}}">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-primary" class="btn btn-search" type="button"><i class="fa fa-search"></i> Buscar</button>
					</span>
				</div>
			</div>
		{{Form::close()}}
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color:#A9D0F5">
					<th style="text-align: center;">LUNES</th>
					<th style="text-align: center;">MARTES</th>
					<th style="text-align: center;">MIERCOLES</th>
					<th style="text-align: center;">JUEVES</th>
					<th style="text-align: center;">VIERNES</th>
				</thead>
               	@foreach ($talleres as $tall)
               		@if($tall->estado_pacientetaller == '1' && $tall->estado_taller == '1')
					<tr>
						<td>
							<table>
							    <tr style="text-align: center;">
							   		<td>
							   			<?php
					                        $lunes = ($tall->lunes);
					                        if(!empty($lunes))
					                        {
					                        echo  $tall->nombre_taller;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		 
							   		</td>
							   	</tr>
							    <tr style="text-align: center;">
							    	<td>
							    		<?php
					                        $lunes = ($tall->lunes);
					                        if(!empty($lunes))
					                        {
					                        echo  'Horario: '.$tall->iniciolunes_taller.' - '.$tall->finlunes_taller;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		
							    	</td>
							    </tr>
							    <tr style="text-align: center;">
							    	<td>
							    		<?php
					                        $lunes = ($tall->lunes);
					                        if(!empty($lunes))
					                        {
					                        echo  $tall->apeynom_paciente;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		
							    	</td>
							    </tr>
							</table>							                
						</td>
						<td>
							<table>
							    <tr>
							   		<td style="text-align: center;">
							   			<?php
					                        $martes = ($tall->martes);
					                        if(!empty($martes))
					                        {
					                        echo  $tall->nombre_taller;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		 
							   		</td>
							   	</tr>
							    <tr>
							    	<td style="text-align: center;">
							    		<?php
					                        $martes = ($tall->martes);
					                        if(!empty($martes))
					                        {
					                        echo  'Horario: '.$tall->iniciomartes_taller.' - '.$tall->finmartes_taller;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		
							    	</td>
							    </tr>
							    <tr>
							    	<td style="text-align: center;">
							    		<?php
					                        $martes = ($tall->martes);
					                        if(!empty($martes))
					                        {
					                        echo  $tall->apeynom_paciente;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		
							    	</td>
							    </tr>
							</table>							
						</td>
						<td>
							<table>
							    <tr>
							   		<td style="text-align: center;">
							   			<?php
					                        $miercoles = ($tall->miercoles);
					                        if(!empty($miercoles))
					                        {
					                        echo  $tall->nombre_taller;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		 
							   		</td>
							   	</tr>
							    <tr>
							    	<td style="text-align: center;">
							    		<?php
					                        $miercoles = ($tall->miercoles);
					                        if(!empty($miercoles))
					                        {
					                        echo  'Horario: '.$tall->iniciomiercoles_taller.' - '.$tall->finmiercoles_taller;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		
							    	</td>
							    </tr>
							    <tr>
							    	<td style="text-align: center;">
							    		<?php
					                        $miercoles = ($tall->miercoles);
					                        if(!empty($miercoles))
					                        {
					                        echo  $tall->apeynom_paciente;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		
							    	</td>
							    </tr>
							</table>			
						</td>
						<td>
							<table>
							    <tr>
							   		<td style="text-align: center;">
							   			<?php
					                        $jueves = ($tall->jueves);
					                        if(!empty($jueves))
					                        {
					                        echo  $tall->nombre_taller;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		 
							   		</td>
							   	</tr>
							    <tr>
							    	<td style="text-align: center;">
							    		<?php
					                        $jueves = ($tall->jueves);
					                        if(!empty($jueves))
					                        {
					                        echo  'Horario: '.$tall->iniciojueves_taller.' - '.$tall->finjueves_taller;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		
							    	</td>
							    </tr>
							    <tr>
							    	<td style="text-align: center;">
							    		<?php
					                        $jueves = ($tall->jueves);
					                        if(!empty($jueves))
					                        {
					                        echo  $tall->apeynom_paciente;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		
							    	</td>
							    </tr>
							</table>
						</td>
						<td>
							<table>
							    <tr>
							   		<td style="text-align: center;">
							   			<?php
					                        $viernes = ($tall->viernes);
					                        if(!empty($viernes))
					                        {
					                        echo  $tall->nombre_taller;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		 
							   		</td>
							   	</tr>
							    <tr>
							    	<td style="text-align: center;">
							    		<?php
					                        $viernes = ($tall->viernes);
					                        if(!empty($viernes))
					                        {
					                        echo  'Horario: '.$tall->inicioviernes_taller.' - '.$tall->finviernes_taller;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		
							    	</td>
							    </tr>
							    <tr>
							    	<td style="text-align: center;">
							    		<?php
					                        $viernes = ($tall->viernes);
					                        if(!empty($viernes))
					                        {
					                        echo  $tall->apeynom_paciente;
					                        }
					                        else
					                        {
					                        echo "";
					                        } 
					                    ?> 		
							    	</td>
							    </tr>
							</table>
						</td>
					</tr>
					@endif
				@endforeach
			</table>
		</div>
		{{$talleres->render()}}
	</div>
</div>

@endsection