@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Alumnos <a href="alumno/create"><button class="btn btn-success fa fa-plus-circle" ></button></a></h3>
        @include('alumno.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </thead>
                @foreach($alumnos as $per)
                <tr>
                    <td>{{$per->idAlumno}}</td>
                    <td>{{$per->nombre}}</td>
                    <td>{{$per->telefono}}</td>
                    <td>{{$per->direccion}}</td>
                    <td>{{$per->correo}}</td>
                    <td>{{$per->fecha}}</td>
                    <td>
                        <a href="{{URL::action('AlumnoController@edit', $per->idAlumno)}}"><button class="btn btn-info fa fa-pencil"></button></a>
                        <a href="" data-target="#modal-delete-{{$per->idAlumno}}" data-toggle="modal"><button class="btn btn-danger fa fa-trash-o fa-lg"></button></a>
                    </td>
                </tr>    
                @include('alumno.modal')
                @endforeach
            </table>
        </div>
        {{$alumnos->appends(['searchText'=>request('searchText')])->render()}}
    </div>
</div>
@endsection