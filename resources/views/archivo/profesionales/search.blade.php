{!! Form::open(array('url'=>'archivo/profesionales','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
	
	<div class="form-group">
		<div class="input-group">
			<input type="text" class="form-control" name="searchText" placeholder="Buscar profesional..." value="{{$searchText}}">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary" class="btn btn-search" type="button"><i class="fa fa-search"></i> Buscar</button>
			</span>
		</div>
	</div>

{{Form::close()}}