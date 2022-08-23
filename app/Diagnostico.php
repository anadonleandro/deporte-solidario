<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table='diagnosticos';

    protected $primaryKey='id_diagnostico';

    public $timestamps=false;

    protected $fillable =[
    	'detalle_diagnostico',
    	'fechaalta_diagnostico',
    	'estado_diagnostico'
    ];

    protected $guarded =[

    ];
}
