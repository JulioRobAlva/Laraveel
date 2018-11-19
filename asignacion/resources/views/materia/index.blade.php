@extends('layouts.admin')
@section('contenido')

<ul class="actions vertical">
	<form action="{{route('materia.create')}}">
		<button  class="btn btn-primary" class="button special fit">Crear</button>
	</form>	  
</ul>

		<table class="table table-striped table-hover table-bordered">
			<thead>
				<tr  class="table-info">
					
					<th>ID</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Tipo Materia</th>
					<th>Alumno</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categorias as $tprod)
				<tr>
					<td>{{$tprod->idMateria}}</td>
					<td>{{$tprod->nombre}}</td>
					<td>{{$tprod->descripcion}}</td>
					<td>{{$tprod->nombretipomateria}}</td>
					<td>{{$tprod->nombrealumno}}</td>
					<td>

					<a href="{{route('materia.show',$tprod->idMateria)}}"> <button class="btn btn-warning fa fa-info"></button></a>
					<a href="{{route('materia.edit',$tprod->idMateria)}}"> <button class="btn btn-info fa fa-pencil"></button></a>
					
						<form style="display: inline" method="POST" action="{{route('materia.destroy', $tprod->idMateria)}}">
						{!!method_field('DELETE')!!}
						{!!csrf_field()!!}
							<button  type="submit" class="btn btn-danger fa fa-trash-o fa-lg">Eliminar</button>
						</form>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
		@endsection