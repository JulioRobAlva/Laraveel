<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMateria extends Model
{
    protected $table='tipomateria';
    protected $primaryKey='idTipoMateria';
    public $timestamps=false;
    protected $fillable=[
        'nombre',
        'descripcion',
        'condicion'
    ];
    protected $guarded=[
        
    ];
}
