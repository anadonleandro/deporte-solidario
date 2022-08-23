<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Paciente;
use sisDepSolidario\Turno;
use sisDepSolidario\Profesional;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class TurnoController extends Controller
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
            $turnos=DB::table('turnos as t')
                ->join('profesionales as pf','t.id_profesional','=','pf.id_profesional')
                ->join('pacientes as pc','t.id_paciente','=','pc.id_paciente')
                ->select('t.fecha_turno','t.hora_turno','pc.apeynom_paciente','pf.apeynom_profesional',
                    't.estado_turno','id_turno')
                ->where('pf.apeynom_profesional','LIKE','%'.$query.'%')
                ->orWhere('pc.apeynom_paciente','LIKE','%'.$query.'%')
                ->orderBy('t.fecha_turno','DESC')
                ->orderBy('t.hora_turno','DESC')
                ->paginate(6);
            return view('archivo.turnos.index',["turnos"=>$turnos,"searchText"=>$query]);
        }
    }    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesionales=DB::table('profesionales')
            ->select('id_profesional','apeynom_profesional','estado_profesional')
            ->orderBy('apeynom_profesional','ASC')
            ->get(); 
        $pacientes=DB::table('pacientes')
            ->select('id_paciente','apeynom_paciente','estado_paciente')
            ->orderBy('apeynom_paciente','ASC')
            ->get();
        return view("archivo.turnos.create",["profesionales"=>$profesionales,"pacientes"=>$pacientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turno=new Turno;
        $mytime = Carbon::now('America/Argentina/Buenos_Aires');
        $turno->fechaalta_turno=$mytime->toDateString();
        $turno->id_profesional=$request->get('id_profesional');
        $turno->id_paciente=$request->get('id_paciente');
        $turno->fecha_turno=$request->get('fecha_turno');
        $turno->hora_turno=$request->get('hora_turno');
        $turno->obs_turno=$request->get('obs_turno');
        $turno->estado_turno=$request->get('estado_turno');
        $turno->save();
        //return Redirect::to('archivo/turnos');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turnos=DB::table('turnos as t')
            ->join('profesionales as pf','t.id_profesional','=','pf.id_profesional')
            ->join('pacientes as pc','t.id_paciente','=','pc.id_paciente')
            ->select('t.fecha_turno','t.hora_turno','pc.apeynom_paciente','pf.apeynom_profesional',
                't.estado_turno','id_turno','obs_turno')
            ->where('id_turno','=',$id)
            ->get();
        return view("archivo.turnos.show",["turnos"=>$turnos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turno=Turno::find($id);
        $profesionales=DB::table('profesionales')
            ->select('id_profesional','apeynom_profesional','estado_profesional')
            ->orderBy('apeynom_profesional','ASC')
            ->get(); 
        $pacientes=DB::table('pacientes')
            ->select('id_paciente','apeynom_paciente','estado_paciente')
            ->orderBy('apeynom_paciente','ASC')
            ->get();
        return view("archivo.turnos.edit",["turno"=>$turno,"profesionales"=>$profesionales,"pacientes"=>$pacientes]);
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
        $turno=Turno::find($id);
        $turno->id_profesional=$request->get('id_profesional');
        $turno->id_paciente=$request->get('id_paciente');
        $turno->fecha_turno=$request->get('fecha_turno');
        $turno->hora_turno=$request->get('hora_turno');
        $turno->obs_turno=$request->get('obs_turno');
        $turno->estado_turno=$request->get('estado_turno');
        $turno->update();
        return Redirect::to('archivo/turnos');
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
