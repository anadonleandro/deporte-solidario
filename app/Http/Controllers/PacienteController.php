<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Paciente;
use sisDepSolidario\Taller;
use sisDepSolidario\Profesional;
use sisDepSolidario\PacienteTaller;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $pacientes=DB::table('pacientes')
            ->where('apeynom_paciente','LIKE','%'.$query.'%')
            ->orwhere('dni_paciente','LIKE','%'.$query.'%')
            ->orderBy('apeynom_paciente','ASC')
            ->paginate(6);
            return view('archivo.pacientes.index',["pacientes"=>$pacientes,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("archivo.pacientes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente=new Paciente;
        $mytime = Carbon::now('America/Argentina/Buenos_Aires');
        $paciente->fechaalta_paciente=$mytime->toDateString();
        $paciente->apeynom_paciente=$request->get('apeynom_paciente');
        $paciente->fechanac_paciente=$request->get('fechanac_paciente');
        $paciente->fechaadmision_paciente=$request->get('fechaadmision_paciente');
        $paciente->dni_paciente=$request->get('dni_paciente');
        $paciente->domicilio_paciente=$request->get('domicilio_paciente');
        $paciente->localidad_paciente=$request->get('localidad_paciente');
        $paciente->telefono_paciente=$request->get('telefono_paciente');
        $paciente->ocupacion_paciente=$request->get('ocupacion_paciente');
        $paciente->email_paciente=$request->get('email_paciente');
        $paciente->obrasocial_paciente=$request->get('obrasocial_paciente');
        $paciente->afiliado_paciente=$request->get('afiliado_paciente');
        $paciente->edad_paciente=$request->get('edad_paciente');
        $paciente->peso_paciente=$request->get('peso_paciente');
        $paciente->talla_paciente=$request->get('talla_paciente');
        $paciente->contacto_paciente=$request->get('contacto_paciente');
        $paciente->domiciliocontacto_paciente=$request->get('domiciliocontacto_paciente');
        $paciente->telefonocontacto_paciente=$request->get('telefonocontacto_paciente');
        $paciente->contactodos_paciente=$request->get('contactodos_paciente');
        $paciente->domiciliocontactodos_paciente=$request->get('domiciliocontactodos_paciente');
        $paciente->telefonocontactodos_paciente=$request->get('telefonocontactodos_paciente');
        $paciente->obscontacto_paciente=$request->get('obscontacto_paciente');
        $paciente->motivoconsulta=$request->get('motivoconsulta');
        $paciente->historiaenfermedadactual=$request->get('historiaenfermedadactual');
        $paciente->contextofamlabper=$request->get('contextofamlabper');
        $paciente->derutina=$request->get('derutina');
        $paciente->realizados=$request->get('realizados');
        $paciente->aclaraciones=$request->get('aclaraciones');
        $paciente->especificos=$request->get('especificos');
        $paciente->cuales=$request->get('cuales');
        $paciente->anexado_plan=$request->get('anexado_plan');
        $paciente->anexado_consentimiento=$request->get('anexado_consentimiento');
        $paciente->epicrisis=$request->get('epicrisis');
        $paciente->estado_paciente='1';
        $paciente->save();
        return Redirect::to('archivo/pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente=DB::table('pacientes')
            ->select('apeynom_paciente','dni_paciente','fechanac_paciente','telefono_paciente','domicilio_paciente',
                'localidad_paciente','email_paciente','ocupacion_paciente','diagnostico_paciente','fechaadmision_paciente',
                'obrasocial_paciente','afiliado_paciente','edad_paciente','peso_paciente','talla_paciente',
                'contacto_paciente','domiciliocontacto_paciente','telefonocontacto_paciente','motivoconsulta',
                'contactodos_paciente','domiciliocontactodos_paciente','telefonocontactodos_paciente','obscontacto_paciente',
                'historiaenfermedadactual','contextofamlabper','derutina','realizados','aclaraciones','especificos',
                'cuales','anexado_plan','anexado_consentimiento','epicrisis')
            ->where('id_paciente','=',$id)
            ->first();
        return view("archivo.pacientes.show",["paciente"=>$paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("archivo.pacientes.edit",["paciente"=>Paciente::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente=Paciente::find($id);
        $paciente->apeynom_paciente=$request->get('apeynom_paciente');
        $paciente->fechanac_paciente=$request->get('fechanac_paciente');
        $paciente->fechaadmision_paciente=$request->get('fechaadmision_paciente');
        $paciente->dni_paciente=$request->get('dni_paciente');
        $paciente->domicilio_paciente=$request->get('domicilio_paciente');
        $paciente->localidad_paciente=$request->get('localidad_paciente');
        $paciente->telefono_paciente=$request->get('telefono_paciente');
        $paciente->ocupacion_paciente=$request->get('ocupacion_paciente');
        $paciente->email_paciente=$request->get('email_paciente');
        $paciente->obrasocial_paciente=$request->get('obrasocial_paciente');
        $paciente->afiliado_paciente=$request->get('afiliado_paciente');
        $paciente->edad_paciente=$request->get('edad_paciente');
        $paciente->peso_paciente=$request->get('peso_paciente');
        $paciente->talla_paciente=$request->get('talla_paciente');
        $paciente->contacto_paciente=$request->get('contacto_paciente');
        $paciente->domiciliocontacto_paciente=$request->get('domiciliocontacto_paciente');
        $paciente->telefonocontacto_paciente=$request->get('telefonocontacto_paciente');
        $paciente->contactodos_paciente=$request->get('contactodos_paciente');
        $paciente->domiciliocontactodos_paciente=$request->get('domiciliocontactodos_paciente');
        $paciente->telefonocontactodos_paciente=$request->get('telefonocontactodos_paciente');
        $paciente->obscontacto_paciente=$request->get('obscontacto_paciente');
        $paciente->diagnostico_paciente=$request->get('diagnostico_paciente');
        $paciente->motivoconsulta=$request->get('motivoconsulta');
        $paciente->historiaenfermedadactual=$request->get('historiaenfermedadactual');
        $paciente->contextofamlabper=$request->get('contextofamlabper');
        $paciente->derutina=$request->get('derutina');
        $paciente->realizados=$request->get('realizados');
        $paciente->aclaraciones=$request->get('aclaraciones');
        $paciente->especificos=$request->get('especificos');
        $paciente->cuales=$request->get('cuales');
        $paciente->anexado_plan=$request->get('anexado_plan');
        $paciente->anexado_consentimiento=$request->get('anexado_consentimiento');
        $paciente->epicrisis=$request->get('epicrisis');
        $paciente->update();
        return Redirect::to('archivo/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente=Paciente::find($id);
        $paciente->estado_paciente='0';
        $paciente->save();
        return Redirect::to('archivo/pacientes');
    }
}
