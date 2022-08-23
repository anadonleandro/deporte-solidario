<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class PacienteAcompanante extends Model
{
    protected $table='paciente_acompanantes';

    protected $primaryKey='id_pacienteacompanante';

    public $timestamps=false;

    protected $fillable =[
    	'id_paciente',
    	'id_acompanante',
    	'estado_pacienteacompanante',
        'fecha_pacienteacompanante',
        'horainicio_pacienteacompanante',
        'horafin_pacienteacompanante',
        'obs_pacienteacompanante',
        'informe_pacienteacompanante'
    ];

    protected $guarded =[

    ];
}
