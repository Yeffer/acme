@extends('layout')
@section('title','crear')
@section('content')	

<div class="container" id="productos">
<br>
<div class="card">
  	<div class="card-header">NUEVO CONDUCTOR</div>
 		<div class="card-body">
			<form class="form-horizontal" id="clienteForm" method="POST" action="{{ route('conductores.store') }}">
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
			     	<label class="control-label col-sm-2" for="direccion">Direcci??n:</label>
			    	<div class="col-sm-10">          
				        <input type="text" 
				        	   name="direccion"
				        	   id="direccion" 
				        	   placeholder="Ingrese direcci??n" 
				        	   class="form-control" 
				        	   value="" 
				        >
				        {!! $errors->first('direccion', '<small>:message</small><br>')  !!}
			      	</div>
				</div>
			     <div class="form-group row">
			      	<label class="control-label col-sm-2" for="telefono">Tel??fono:</label>
			     	<div class="col-sm-10">
			        	<input type="number" 
			        		   id="telefono"
			        		   placeholder="Ingrese tel??fono"
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
<br>	
<div class="container">
	<div class="card">
	 	<div class="card-header">INFORMACI??N DE CONDUCTOR</div>
	  	<div class="card-body">			
		  	<table class='table table-hover table-striped'>
				<thead>
					<tr>
						<th>Id</th>
						<th>Cedula</th>							
						<th>Primer nombre</th>							
						<th>Segundo nombre</th>
						<th>Apellidos</th>						
						<th>Direcci??n</th>
						<th>Tel??fono</th>						
						<th>Ciudad</th>							
					</tr>
				</thead>
				<tbody>						
					@forelse($conductores as $conductorItem)
						<tr>							
							<td>{{ $conductorItem->id }}</td>
							<td>{{ $conductorItem->cedula }}</td>
							<td>{{ $conductorItem->primer_nombre }}</td>								
							<td>{{ $conductorItem->segundo_nombre }}</td>
							<td>{{ $conductorItem->apellidos }}</td>
							<td>{{ $conductorItem->direccion }}</td>
							<td>{{ $conductorItem->telefono }}</td>
							<td>{{ $conductorItem->ciudad }}</td>									
							<td>
								<a href="{{ route('conductores.edit', $conductorItem->id ) }}"><button class='btn btn-success btn-sm'>Editar</button></a>
							</td>
							<td>								
								<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $conductorItem->id }}">Eliminar</button>
							</td>
						</tr>	
					@include('conductores.delete')									
					@empty
						<td>No hay registros para mostrar</td>													
					@endforelse	
				</tbody>
			</table>
	    </div>
  	</div>
</div>
<br>
<br>
<br>
@endsection