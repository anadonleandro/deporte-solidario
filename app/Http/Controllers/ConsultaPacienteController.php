<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Taller;
use sisDepSolidario\Paciente;
use sisDepSolidario\Turno;
use sisDepSolidario\Acompanante;
use sisDepSolidario\Profesional;
use sisDepSolidario\PacienteTaller;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class ConsultaPacienteController extends Controller
{
    public function consulta(Request $request )
    {
    	switch($request->input('valor')){

    		case 1:
            //talleres del profesional por nombre
            $pacientes=DB::table('pacientes as p')
	            ->join('paciente_talleres as pt','p.id_paciente','=','pt.id_paciente')
	            ->join('talleres as t','pt.id_taller','=','t.id_taller')
	            ->select('t.nombre_taller','t.id_taller','p.estado_paciente','pt.estado_pacientetaller',
                    'pt.id_pacientetaller','t.estado_taller','p.apeynom_paciente')
	            ->where('p.apeynom_paciente', 'like', '%'. $request->input('dato').'%')
                ->orderBy('p.apeynom_paciente','ASC')
	            ->get();

            $a=(count($pacientes));
            if ($a > 0) {
                return view("resupaciente1",["pacientes"=>$pacientes]);
            }else {
                Session::flash('message','SIN REGISTROS PARA LOS DATOS INGRESADOS..!!!');
                return view("pacientetaller");
            }     
           // break;

    	}
    }
    public function fecha(Request $request )
    {
        switch($request->input('valor')){

            case 1:

            $pacienteid=DB::table('pacientes')
                ->select('id_paciente','apeynom_paciente')
                ->where('apeynom_paciente', 'like', '%'. $request->input('dato').'%')
                ->first();
            
            $f1 = $request->fecha_desde;
            $f2 = $request->fecha_hasta;
       
            if ($f1 <= $f2) {
                $pacientes=DB::table('pacientes as p')
                ->join('turnos as t','p.id_paciente','=','t.id_paciente')
                ->join('profesionales as pf','t.id_profesional','=','pf.id_profesional')
                ->select('t.fecha_turno','t.hora_turno','pf.apeynom_profesional','t.estado_turno',
                    'p.apeynom_paciente','t.id_turno')
                ->where('p.apeynom_paciente', 'like', '%'. $request->input('dato').'%')
                ->whereBetween('t.fecha_turno', [$request->input('fecha_desde'),$request->input('fecha_hasta')])
                ->orderBy('p.apeynom_paciente','ASC')
                ->orderBy('t.fecha_turno','DESC')
                ->orderBy('t.hora_turno','DESC')
                ->get();
             
                $a=(count($pacientes));
                if ($a > 0) {
                    return view("fechapaciresultado",["pacientes"=>$pacientes,"pacienteid"=>$pacienteid]);
                }else {
                    Session::flash('message','SIN REGISTROS PARA LOS DATOS INGRESADOS..!!!');
                    return view("pacientefecha");
                }
            }
        } 
    }
    public function fechados(Request $request )
    {
        switch($request->input('valor')){

            case 1:
            
            $f1 = $request->fecha_desde;
            $f2 = $request->fecha_hasta;
       
            if ($f1 <= $f2) {
                $pacientes=DB::table('pacientes as p')
                ->join('paciente_acompanantes as pa','p.id_paciente','=','pa.id_paciente')
                ->join('acompanantes as a','pa.id_acompanante','=','a.id_acompanante')
                ->select (DB::raw('TIMEDIFF(horafin_pacienteacompanante, horainicio_pacienteacompanante) 
                    as diferencia'),'pa.fecha_pacienteacompanante','pa.horainicio_pacienteacompanante',
                    'pa.horafin_pacienteacompanante','a.apeynom_acompanante','p.apeynom_paciente',
                    'pa.id_pacienteacompanante','pa.estado_pacienteacompanante')
                ->where('p.apeynom_paciente', 'like', '%'. $request->input('dato').'%')
                ->whereBetween('pa.fecha_pacienteacompanante', [$request->input('fecha_desde'),$request->input('fecha_hasta')])
                ->orderBy('p.apeynom_paciente','ASC')
                ->get();
             
                $a=(count($pacientes));
                if ($a > 0) {
                    return view("fechapaciresultadodos",["pacientes"=>$pacientes]);
                }else {
                    Session::flash('message','SIN REGISTROS PARA LOS DATOS INGRESADOS..!!!');
                    return view("pacientefechados");
                }
            }
        }  
    }
}
