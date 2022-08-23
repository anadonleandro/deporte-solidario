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

class PacienteTallerController extends Controller
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
        $talleres = DB::table('talleres')
            ->select('id_taller','nombre_taller','estado_taller')
            ->orderBy('nombre_taller','ASC')
            ->get();
        return view("archivo.pacientetalleres.create",["pacientes"=>$pacientes,"talleres"=>$talleres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientetaller=new PacienteTaller;   
        $pacientetaller->id_paciente=$request->get('id_paciente');
        $pacientetaller->id_taller=$request->get('id_taller');
        $pacientetaller->estado_pacientetaller='1';
        $pacientetaller->save();

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("archivo.pacientetalleres.edit",["taller"=>PacienteTaller::find($id)]);
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
        $taller=PacienteTaller::find($id);
        $taller->estado_pacientetaller=$request->get('estado_pacientetaller');
        $taller->save();

        return Redirect::to('/pacientetaller'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taller=PacienteTaller::find($id);
        $taller->estado_pacientetaller='0';
        $taller->save();
        return Redirect::to('archivo/pacientes/show');
    }
}
