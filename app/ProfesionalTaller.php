<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class ProfesionalTaller extends Model
{
    protected $table='profesional_talleres';

    protected $primaryKey='id_profesionaltaller';

    public $timestamps=false;

    protected $fillable =[
    	'id_profesional',
    	'id_taller',
    	'estado_profesionaltaller'
    ];

    protected $guarded =[

    ];
}
