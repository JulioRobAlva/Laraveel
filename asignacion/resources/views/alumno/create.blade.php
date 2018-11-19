@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3>Nuevo Alumno <a href="{{URL::action('AlumnoController@index')}}"><i class="btn btn-success fa fa-arrow-left"></i></a></h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!! Form::open(array('url'=>'alumno', 'method'=>'POST', 'autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Nombre Alumno</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Teléfono Alumno</label>
            <input type="text" name="telefono" class="form-control" placeholder="Telefono">
        </div>
        <div class="form-group">
            <label for="nombre">Dirección Alumno</label>
            <input type="text" name="direccion" class="form-control" placeholder="Dirección">
        </div>

        <div class="form-group">
            <label for="nombre">Email Alumno</label>
            <input type="text" name="correo" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="nombre">Fecha de Nacimiento</label>
            <input type="text" name="fecha" class="form-control" placeholder="Fecha">
        </div>
        <div class="form-group">
            <button class="btn btn-primary fa fa-check-square-o" type="submit"></button>
            <button class="btn btn-danger fa fa-times" type="reset"></button>
        </div>
        {{Form::close()}}
    </div>
</div>
@stop