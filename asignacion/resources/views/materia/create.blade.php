@extends('layouts.admin')
@section('contenido')
<section id="content" class="main">
	
	<h1>Nueva Materia</h1>
	<form method="POST" action="{{route('materia.store')}}">
		{!!csrf_field()!!}

		<p><label for="nombre">Nombre 
		<input type="text" name="nombre" value="{{old('nombre')}}">
		{!!$errors->first('nombre','<span class=error>:message</span>')!!}
		</label>
		</p>

		<p><label for="descripcion">descripcion 
		<input type="text" name="descripcion" value="{{old('descripcion')}}">
		{!!$errors->first('descripcion','<span class=error>:message</span>')!!}
		</label>
		</p>
		
		<select name="idTipoMateria" >
			@foreach ($tipomaterias as $cliente)
			  <option  value="{{ $cliente->idTipoMateria }}">{{ $cliente->nombre }}</option>
			@endforeach
		</select>

		<br>
		<br>

		
		@foreach ($alumnos as $com)
			<input type="checkbox" name="idAlumno[]" value="{{ $com->idAlumno }}">{{ $com->nombre }}
		@endforeach
		<br>
		<br>
		
		<input  class="btn btn-primary" type="submit" value="Enviar">
	</form>
</section>

@endsection