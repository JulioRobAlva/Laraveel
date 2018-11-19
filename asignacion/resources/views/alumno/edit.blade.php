@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3>Editar Alumno: {{$alumno->nombre}} <a href="{{URL::action('AlumnoController@index')}}"><i class="btn btn-success fa fa-arrow-left"></i></a></h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!! Form::model($alumno, ['method'=>'PATCH', 'route'=>['alumno.update', $alumno->idAlumno]])!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Nombre Alumno</label>
            <input type="text" name="nombre" class="form-control" value="{{$alumno->nombre}}" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Telefono Alumno</label>
            <input type="text" name="telefono" class="form-control" value="{{$alumno->telefono}}" placeholder="Telefono">
        </div>
        <div class="form-group">
            <label for="nombre">Direccion Alumno</label>
            <input type="text" name="direccion" class="form-control" value="{{$alumno->direccion}}" placeholder="Direccion">
        </div>
        <div class="form-group">
            <label for="nombre">Email Alumno</label>
            <input type="text" name="correo" class="form-control" value="{{$alumno->correo}}" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="nombre">Fecha Alumno</label>
            <input type="text" name="fecha" class="form-control" value="{{$alumno->fecha}}" placeholder="Fecha">
        </div>
        <div class="form-group">
            <button class="btn btn-primary fa fa-check-square-o" type="submit"></button>
            <button class="btn btn-danger fa fa-times" type="reset"></button>
        </div>
        {{Form::close()}}
    </div>
</div>
@stop