@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3>Editar Tipo: {{$tipomateria->nombre}} <a href="{{URL::action('TipoMateriaController@index')}}"><i class="btn btn-success fa fa-arrow-left"></i></a></h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!! Form::model($tipomateria, ['method'=>'PATCH', 'route'=>['tipomateria.update', $tipomateria->idTipoMateria]])!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Nombre </label>
            <input type="text" name="nombre" class="form-control" value="{{$tipomateria->nombre}}" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Descripcion </label>
            <input type="text" name="descripcion" class="form-control" value="{{$tipomateria->descripcion}}" placeholder="Descripcion">
        </div>
        <div class="form-group">
            <button class="btn btn-primary fa fa-check-square-o" type="submit"></button>
            <button class="btn btn-danger fa fa-times" type="reset"></button>
        </div>
        {{Form::close()}}
    </div>
</div>
@stop