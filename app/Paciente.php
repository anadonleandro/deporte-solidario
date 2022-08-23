<?php

namespace sisDepSolidario;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table='pacientes';

    protected $primaryKey='id_paciente';

    public $timestamps=false;

    protected $fillable =[
    	'id_diagnostico',
    	'diagnostico_paciente',
    	'fechaalta_paciente',
        'apeynom_paciente',
    	'fechanac_paciente',
        'dni_paciente',
        'domicilio_paciente',
        'loalidad_paciente',
    	'telefono_paciente',
        'ocupacion_paciente',
        'email_paciente',
        'obrasocial_paciente',
        'afiliado_paciente',
        'edad_paciente',
        'peso_paciente',
        'talla_paciente',
        'contacto_paciente',
        'domiciliocontacto_paciente',
        'telefonocontacto_paciente',
        'contactodos_paciente',
        'domiciliocontactodos_paciente',
        'telefonocontactodos_paciente',
        'obscontacto_paciente',
        'motivoconsulta',
        'historiaenfermedadactual',
        'contextofamlabper',
        'derutina',
        'realizados',
        'aclaraciones',
        'especificos',
        'cuales',
        'anexodo_plan',
        'anexodo_consentimiento',
        'epicrisis',
        'estado_paciente'
    ];

    protected $guarded =[

    ];
}
