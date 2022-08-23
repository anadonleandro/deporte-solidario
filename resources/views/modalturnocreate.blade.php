<div class="modal fade modal-slide-in-right" aria-hidden="true"
	role="dialog" tabindex="-1" id="modalturnocreate-create-{{$pacienteid->apeynom_paciente}}">
	{{Form::Open(array('action'=>array('TurnoController@store',$pacienteid->apeynom_paciente),'method'=>'POST'))}}
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" style="background-color:#bec2c4">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">X</span>
                </button>
                <h4 class="modal-title"><b>NUEVO TURNO</b></h4>
			</div>
			<div class="modal-body" style="background-color:#f2f4f7">
				<div class="row">
					
				</div>
				<div class="row">
					
				</div>
				<div class="row">
					
			   	</div>			   
				<div class="row">
					
				</div>
				<div class="row">
					
				</div>
				<div class="row">

				</div>
            </div>  
            <div class="modal-footer" style="background-color:#f2f4f7">
				<div class="row justify-content-center">
				    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">	  
                        <button class="btn btn-primary" id="validar" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
                        <button class="btn btn-primary" type="reset"><i class="fa fa-close"></i> Cancelar</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button>
                    </div>
                </div>
            </div>
		</div>
	</div>
	{{Form::Close()}}
</div>
<script>    
	function mayus(e) {
	    e.value = e.value.toUpperCase();
	}	
</script>
