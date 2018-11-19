@extends('layouts.admin')
@section('contenido')
<div class="container">
	<div class="jumbotron">
	<div class="row">
		<div class="col-md-4">
			<h4>id: </h4>
			<p class="lead">{{$tmateria->idMateria }}</p> 
			<h4>Nombre: </h4>
			<p class="lead">{{$tmateria->nombre}}</p> 
			<h4>Tipo: </h4>
			<p class="lead">{{$tmateria->idTipoMateria }}</p> 
			<h4>Alumno: </h4>
			<p class="lead">{{$tmateria->idAlumno }}</p> 
										
		</div>
		</div>
										
	</div>
									
</div>
@endsection