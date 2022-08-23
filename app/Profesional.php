<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    protected $table='profesionales';

    protected $primaryKey='id_profesional';

    public $timestamps=false;

    protected $fillable =[
    	'fechaalta_profesional',
    	'apeynom_profesional',
        'especialidad_profesional',
    	'matricula_profesional',
        'dni_profesional',
        'fechanac_profesional',
        'edad_profesional',
        'telefono_profesional',
        'domicilio_profesional',
        'email_profesional',
        'localidad_profesional',
        'estado_profesional'
    ];

    protected $guarded =[

    ];
}
