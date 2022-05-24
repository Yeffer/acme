@extends('layout')
@section('title','crear')
@section('content')	

<div class="container" id="productos">
<br>
<div class="card">
  	<div class="card-header">NUEVO VEHICULO</div>
 		<div class="card-body">
			<form class="form-horizontal" id="clienteForm" method="POST" action="{{ route('vehiculos.store') }}">
				@csrf
				<div class="form-group row">
			     	<label class="control-label col-sm-2" for="placa">Placa:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="placa"
				        	   id="placa" 
				        	   placeholder="Ingrese placa" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('placa', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
			  <div class="form-group row">
			     	<label class="control-label col-sm-2" for="color">Color:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="color"
				        	   id="color" 
				        	   placeholder="Ingrese color" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('color', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
				<div class="form-group row">
			     	<label class="control-label col-sm-2" for="marca">Marca:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="marca"
				        	   id="marca" 
				        	   placeholder="Ingrese marca" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('marca', '<small>:message</small><br>')  !!}
			      	</div>
				</div>				
		    	<div class="form-group row">
			      	<label class="control-label col-sm-2" for="tipo">Tipo:</label>
			      	<div class="col-sm-10">          
			        	<select class="form-control" id="tipo"   name="tipo" aria-label="Default select example">
			        		<option value="">Seleccione...</option> 			        		
			        		<option value="Particular">Particular</option>
			        		<option value="Publico">Publico</option>
			        	</select>
			        	{!! $errors->first('tipo', '<small>:message</small><br>')  !!}		
			      	</div>
		    	</div>
		    	<div class="form-group row">
			      	<label class="control-label col-sm-2" for="conductor">Conductor:</label>
			      	<div class="col-sm-10">          
			        	<select class="form-control" id="conductor"   name="conductor" aria-label="Default select example">
			        		<option value="">Seleccione...</option> 
			        		@forelse($conductores as $conductorItem)
			        			<option value="{{ $conductorItem->id}}">{{ $conductorItem->primer_nombre}}</option>
							@empty
								<td>No hay registros para mostrar</td>
							@endforelse									        	
			        	</select>
			        	{!! $errors->first('conductor', '<small>:message</small><br>')  !!}		
			      	</div>
		    	</div>
		    	<div class="form-group row">
			      	<label class="control-label col-sm-2" for="propietario">Propietario:</label>
			      	<div class="col-sm-10">          
			        	<select class="form-control" id="propietario"   name="propietario" aria-label="Default select example">
			        		<option value="">Seleccione...</option> 
			        		@forelse($propietarios as $propietarioItem)
			        			<option value="{{ $propietarioItem->id}}">{{ $propietarioItem->primer_nombre}}</option>
							@empty
								<td>No hay registros para mostrar</td>
							@endforelse									        	
			        	</select>
			        	{!! $errors->first('propietario', '<small>:message</small><br>')  !!}		
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