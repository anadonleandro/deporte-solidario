<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    
	protected $table='turnos';

    protected $primaryKey='id_turno';

    public $timestamps=false;

    protected $fillable =[
        'id_profesional',
    	'id_paciente',
    	'fechaalta_turno',
        'fecha_turno',
        'hora_turno',
        'obs_turno',
        'estado_turno'

    ];

    protected $guarded =[

    ];
}
