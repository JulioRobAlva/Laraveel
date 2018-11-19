<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table='materia';
    protected $primaryKey='idMateria';
    public $timestamps=false;
    protected $fillable=[
        'nombre',
        'descripcion',
        'idTipoMateria',
        'idAlumno',
        'condicion'
    ];
    protected $guarded=[
        
    ];
}
