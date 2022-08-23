<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table='personal';

    protected $primaryKey='id_personal';

    public $timestamps=false;

    protected $fillable =[
    	'ni_personal',
    	'apeynom_personal',
        'dni_personal',
    	'grado_personal',
        'cpoesc_personal',
        'ud_personal',
        'subud_personal',
        'sitrev_personal',
        'estado_sitrev_personal'
    ];

    protected $guarded =[

    ];
}
