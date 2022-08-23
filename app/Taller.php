<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    protected $table='talleres';

    protected $primaryKey='id_taller';

    public $timestamps=false;

    protected $fillable =[
        'fechaalta_taller',
    	'nombre_taller',
    	'lunes',
        'iniciolunes_taller',
        'finlunes_taller',
        'martes',
        'iniciomartes_taller',
        'finmartes_taller',
        'miercoles',
        'iniciomiercoles_taller',
        'finmiercoles_taller',
        'jueves',
        'iniciojueves_taller',
        'finjueves_taller',
        'viernes',
        'inicioviernes_taller',
        'finviernes_taller',
    	'horainicio_taller',
        'horafin_taller',
        'estado_taller'

    ];

    protected $guarded =[

    ];
}
