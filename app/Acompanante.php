<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class Acompanante extends Model
{
    protected $table='acompanantes';

    protected $primaryKey='id_acompanante';

    public $timestamps=false;

    protected $fillable =[
    	'fechaalta_acompanante',
        'apeynom_acompanante',
        'telefono_acompanante',
        'formacion_acompanante',
        'disponibilidad_acompanante',
        'edad_acompanante',
        'fechanac_acompanante',
        'obs_acompanante',
        'estado_acompanante'

    ];

    protected $guarded =[

    ];
}
