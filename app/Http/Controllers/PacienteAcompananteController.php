<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Paciente;
use sisDepSolidario\Acompanante;
use sisDepSolidario\PacienteAcompanante;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class PacienteAcompananteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = DB::table('pacientes')
            ->select('id_paciente','apeynom_paciente','estado_paciente')
            ->orderBy('apeynom_paciente','ASC')
            ->get();
        $acompanantes = DB::table('acompanantes')
            ->select('id_acompanante','apeynom_acompanante','estado_acompanante')
            ->orderBy('apeynom_acompanante','ASC')
            ->get();
        return view("archivo.pacienteacompanantes.create",["pacientes"=>$pacientes,"acompanantes"=>$acompanantes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacienteacompanante=new PacienteAcompanante;   
        $pacienteacompanante->id_paciente=$request->get('id_paciente');
        $pacienteacompanante->id_acompanante=$request->get('id_acompanante');
        $pacienteacompanante->fecha_pacienteacompanante=$request->get('fecha_pacienteacompanante');
        $pacienteacompanante->horainicio_pacienteacompanante=$request->get('horainicio_pacienteacompanante');
        $pacienteacompanante->horafin_pacienteacompanante=$request->get('horafin_pacienteacompanante');
        $pacienteacompanante->estado_pacienteacompanante=$request->get('estado_pacienteacompanante');
        $pacienteacompanante->obs_pacienteacompanante=$request->get('obs_pacienteacompanante');
        $pacienteacompanante->informe_pacienteacompanante=$request->get('informe_pacienteacompanante');
        $pacienteacompanante->save();
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
        $acompanante=DB::table('paciente_acompanantes as pa')
            ->join('pacientes as pc','pa.id_paciente','=','pc.id_paciente')
            ->join('acompanantes as ac','pa.id_acompanante','=','ac.id_acompanante')
            ->select('pc.apeynom_paciente','ac.apeynom_acompanante','pa.fecha_pacienteacompanante',
                'pa.horainicio_pacienteacompanante','pa.horafin_pacienteacompanante','pa.estado_pacienteacompanante',
                'pa.obs_pacienteacompanante','pa.informe_pacienteacompanante')
            ->where('id_pacienteacompanante','=',$id)
            ->first();
        return view("archivo.pacienteacompanantes.show",["acompanante"=>$acompanante]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $acompanante=PacienteAcompanante::find($id);
        $pacientes=DB::table('pacientes')
            ->select('id_paciente','apeynom_paciente','estado_paciente')
            ->orderBy('apeynom_paciente','ASC')
            ->get(); 
        $acompanantes=DB::table('acompanantes')
            ->select('id_acompanante','apeynom_acompanante','estado_acompanante')
            ->orderBy('apeynom_acompanante','ASC')
            ->get();
        return view("archivo.pacienteacompanantes.edit",["acompanante"=>$acompanante,"pacientes"=>$pacientes,"acompanantes"=>$acompanantes]);
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
        $acompanante=PacienteAcompanante::find($id);
        $acompanante->id_paciente=$request->get('id_paciente');
        $acompanante->id_acompanante=$request->get('id_acompanante');
        $acompanante->fecha_pacienteacompanante=$request->get('fecha_pacienteacompanante');
        $acompanante->horainicio_pacienteacompanante=$request->get('horainicio_pacienteacompanante');
        $acompanante->horafin_pacienteacompanante=$request->get('horafin_pacienteacompanante');
        $acompanante->estado_pacienteacompanante=$request->get('estado_pacienteacompanante');
        $acompanante->obs_pacienteacompanante=$request->get('obs_pacienteacompanante');
        $acompanante->informe_pacienteacompanante=$request->get('informe_pacienteacompanante');
        $acompanante->update();

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
        //
    }
}
