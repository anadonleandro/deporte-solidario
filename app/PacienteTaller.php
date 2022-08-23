<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class PacienteTaller extends Model
{
    protected $table='paciente_talleres';

    protected $primaryKey='id_pacientetaller';

    public $timestamps=false;

    protected $fillable =[
    	'id_paciente',
    	'id_taller',
    	'estado_pacientetaller'
    ];

    protected $guarded =[

    ];
}
