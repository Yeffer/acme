@extends('layout')
@section('title','Inicio')
@section('content')
	<br>	
	<div class="container">
		<div class="card">
		 	<div class="card-header">INFORMACIÓN DE GENERAL</div>
		  	<div class="card-body">			
			  	<table class='table table-hover table-striped'>
					<thead>
						<tr>							
							<th>Placa</th>												
							<th>Marca</th>													
							<th>Conductor</th>
							<th>Propietario</th>					
						</tr>
					</thead>
					<tbody>						
						@forelse($data as $dataItem)
							<tr>							
								<td>{{ $dataItem->placa }}</td>
								<td>{{ $dataItem->marca }}</td>
								<td>{{ $dataItem->con1_nombre. ' '.$dataItem->con2_nombre }}</td>
								<td>{{ $dataItem->pro1_nombre. ' '.$dataItem->pro2_nombre }}</td>													
							</tr>							
						@empty
							<td>No hay registros para mostrar</td>													
						@endforelse									
					</tbody>
				</table>
		    </div>
	  	</div>
	</div>
@endsection