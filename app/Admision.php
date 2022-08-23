<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class Admision extends Model
{
    protected $table='admisiones';

    protected $primaryKey='id_admision';

    public $timestamps=false;

    protected $fillable =[
        'apeynom_admision',
        'telefono_admision',
        'fecha_admision',
        'hora_admision',
        'obs_admision',
        'estado_admision',
        'dni_admision',
        'obrasocial_admision',
        'lugar_admision'

    ];

    protected $guarded =[

    ];
}
