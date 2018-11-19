<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table='alumno';
    protected $primaryKey='idAlumno';
    public $timestamps=false;
    protected $fillable=[
        'nombre',
        'telefono',
        'direccion',
        'correo',
        'fecha', 
        'condicion'
    ];
    protected $guarded=[
        
    ];
}
