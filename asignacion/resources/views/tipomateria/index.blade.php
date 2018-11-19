@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Tipo de Materia <a href="tipomateria/create"><button class="btn btn-success fa fa-plus-circle" ></button></a></h3>
        @include('tipomateria.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Opciones</th>
                </thead>
                @foreach($tipomaterias as $per)
                <tr>
                    <td>{{$per->idTipoMateria}}</td>
                    <td>{{$per->nombre}}</td>
                    <td>{{$per->descripcion}}</td>
                    <td>
                        <a href="{{URL::action('TipoMateriaController@edit', $per->idTipoMateria)}}"><button class="btn btn-info fa fa-pencil"></button></a>
                        <a href="" data-target="#modal-delete-{{$per->idTipoMateria}}" data-toggle="modal"><button class="btn btn-danger fa fa-trash-o fa-lg"></button></a>
                    </td>
                </tr>    
                @include('tipomateria.modal')
                @endforeach
            </table>
        </div>
        {{$tipomaterias->appends(['searchText'=>request('searchText')])->render()}}
    </div>
</div>
@endsection