@extends('layout')
@section('title','Inicio')
@section('content')
	<br>	
	<div class="container">
		<div class="card">
		 	<div class="card-header">INFORMACIÓN DE VEHICULOS</div>
		  	<div class="card-body">			
			  	<table class='table table-hover table-striped'>
					<thead>
						<tr>
							<th>Id</th>
							<th>Placa</th>							
							<th>Color</th>							
							<th>Marca</th>
							<th>Tipo</th>						
							<th>Conductor</th>
							<th>Propietario</th>								
							<th>Pais</th>	
							<th>Ciudad</th>							
						</tr>
					</thead>
					<tbody>						
								<tr>							
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>
										<a href=""><button class='btn btn-success btn-sm'>Editar</button></a>
									</td>
									<td>								
										<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-">Eliminar</button>									
									</td>
								</tr>							
										
						
					</tbody>
				</table>
		    </div>
	  	</div>
	</div>
@endsection

