@extends('layouts.admin')
@section('contenido')
<div class="form-group">
	<form method="POST" action="{{route('materia.update',$tmateria->idMateria)}}">
		{!!method_field('PUT')!!}
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

		<select name="idAlumno" >
			@foreach ($alumnos as $com)
			  <option  value="{{ $com->idAlumno }}">{{ $com->nombre }}</option>
			@endforeach
		</select>
		
		<br>
		<br>
		
		<input  class="btn btn-primary" type="submit" value="Enviar">
	</form>
</div>
@endsection