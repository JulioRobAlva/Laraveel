<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dilog" tabindex="-1" id="modal-delete-{{$per->idAlumno}}">
    {!! Form::open(array('action'=>array('AlumnoController@destroy', $per->idAlumno), 'method'=>'DELETE'))!!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
                <h4 class="modal-title">Eliminar Alumno</h4>
            </div>
            <div class="modal-body">
                <p>Confirmar si desea eliminar Alumno</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>   
            </div>
        </div>
    </div>
    {{Form::Close()}}
</div>