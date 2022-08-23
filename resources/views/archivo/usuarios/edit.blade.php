@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Usuario: {{ $usuario->name}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

	{!!Form::model($usuario,['url'=>['archivo/usuarios',$usuario->id],'method'=>'PATCH'])!!}
    {{Form::token()}}

    <div class="row justify-content-center">
    	<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
    		<div class="form-group">
	        	<label for="name">Apellido y Nombres</label>
	        	<div class="input-group">
			        <input id="name" type="text" maxlength="40" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $usuario->name }}" required autofocus>
			            @if ($errors->has('name'))
			                <span class="invalid-feedback" role="alert">
			                    <strong>{{ $usuario->first('name') }}</strong>
			                </span>
			            @endif
			    </div>
	        </div>
	    </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <div class="form-group">
                <label for="username">Nombre de Usuario</label>
                <div class="input-group">
                    <input id="username" type="text" maxlength="10" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ $usuario->username }}" required>
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $usuario->first('username') }}</strong>
                            </span>
                        @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
    		<div class="form-group">
	        	<label for="password">Password</label>
	        	<div class="input-group">
                   	<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                     	@if ($errors->has('password'))
                         	<span class="invalid-feedback" role="alert">
                             	<strong>{{ $errors->first('password') }}</strong>
                         	</span>
                     	@endif
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
    		<div class="form-group">
	        	<label for="password-confirm">Confirmar Password</label>
	        	<div class="input-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit"><i class="fa fa-check-square-o"></i> Guardar</button>
                <button class="btn btn-danger" type="reset"><i class="fa fa-close"></i> Cancelar</button>
            </div>
        </div>
    </div> 
	
    {!!Form::close()!!}		
            
@endsection