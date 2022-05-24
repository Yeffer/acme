@extends('layout')
@section('title','crear')
@section('content')	

<div class="container" id="productos">
<br>
<div class="card">
  	<div class="card-header">NUEVO PROPIETARIO</div>
 		<div class="card-body">
			<form class="form-horizontal" id="clienteForm" method="POST" action="{{ route('propietarios.store') }}">
				@csrf
				<div class="form-group row">
			     	<label class="control-label col-sm-2" for="cedula">Cedula:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="cedula"
				        	   id="cedula" 
				        	   placeholder="Ingrese cedula" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('cedula', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
			  <div class="form-group row">
			     	<label class="control-label col-sm-2" for="primerNombre">Primer Nombre:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="primerNombre"
				        	   id="primerNombre" 
				        	   placeholder="Ingrese primer nombre" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('primerNombre', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
				<div class="form-group row">
			     	<label class="control-label col-sm-2" for="segundoNombre">Segundo Nombre:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="segundoNombre"
				        	   id="segundoNombre" 
				        	   placeholder="Ingrese segundo nombre" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        
			      	</div>
				</div>
				<div class="form-group row">
			     	<label class="control-label col-sm-2" for="apellidos">Apellidos:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="apellidos"
				        	   id="apellidos" 
				        	   placeholder="Ingrese apellidos" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('apellidos', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
				<div class="form-group row">
			     	<label class="control-label col-sm-2" for="direccion">Dirección:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="direccion"
				        	   id="direccion" 
				        	   placeholder="Ingrese dirección" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('direccion', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
			     <div class="form-group row">
			      	<label class="control-label col-sm-2" for="telefono">Teléfono:</label>
			     	<div class="col-sm-10">
			        	<input type="number" 
			        		   id="telefono"
			        		   placeholder="Ingrese teléfono"
			        		   name="telefono"
			        		   class="form-control"
			        		   value="">
			        	{!! $errors->first('telefono', '<small>:message</small><br>')  !!}
			      	</div>
			    </div>
		    	<div class="form-group row">
			      	<label class="control-label col-sm-2" for="ciudad">Ciudad:</label>
			      	<div class="col-sm-10">          
			        	<select class="form-control" id="ciudad"   name="ciudad" aria-label="Default select example">
			        		<option value="">Seleccione...</option> 
			        		@forelse($ciudades as $ciudadItem)
			        			<option value="{{ $ciudadItem->id}}">{{ $ciudadItem->ciudad}}</option>
							@empty
								<td>No hay registros para mostrar</td>
							@endforelse									        	
			        	</select>
			        	{!! $errors->first('ciudad', '<small>:message</small><br>')  !!}		
			      	</div>
		    	</div>

		    	<div class="form-group row">        
		      		<div class="col-sm-offset-2 col-sm-10">
		        		<button type="submit" class="btn btn-primary" id="registro">Nuevo</button>
		      		</div>
		    	</div>
		  	</form>
  		</div>
	</div>
@endsection