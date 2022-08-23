<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Taller;
use sisDepSolidario\Profesional;
use sisDepSolidario\Paciente;
use sisDepSolidario\Turno;
use sisDepSolidario\ProfesionalTaller;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class ConsultaProfesionalController extends Controller
{
    public function consulta(Request $request )
    {
    	switch($request->input('valor')){

    		case 1:
            //talleres del profesional por nombre
            $profesionales=DB::table('profesionales as p')
	            ->join('profesional_talleres as pt','p.id_profesional','=','pt.id_profesional')
	            ->join('talleres as t','pt.id_taller','=','t.id_taller')
	            ->select('t.nombre_taller','t.id_taller','p.estado_profesional','pt.estado_profesionaltaller',
                    'pt.id_profesionaltaller','t.estado_taller','p.apeynom_profesional')
	            ->where('p.apeynom_profesional', 'like', '%'. $request->input('dato').'%')
                ->orderBy('p.apeynom_profesional','ASC')
	            ->get();

            $a=(count($profesionales));
            if ($a > 0) {
                return view("resuprofesional1",["profesionales"=>$profesionales]);
            }else {
                Session::flash('message','SIN REGISTROS PARA LOS DATOS INGRESADOS..!!!');
                return view("profesionaltaller");
            }     
           // break;

    	}
    }
    public function fecha(Request $request )
    {
        switch($request->input('valor')){

            case 1:
            
            $f1 = $request->fecha_desde;
            $f2 = $request->fecha_hasta;
       
            if ($f1 <= $f2) {
                $profesionales=DB::table('profesionales as p')
                ->join('turnos as t','p.id_profesional','=','t.id_profesional')
                ->join('pacientes as pc','t.id_paciente','=','pc.id_paciente')
                ->select('t.fecha_turno','t.hora_turno','pc.apeynom_paciente','t.estado_turno',
                    'p.apeynom_profesional','t.id_turno')
                ->where('p.apeynom_profesional', 'like', '%'. $request->input('dato').'%')
                ->whereBetween('t.fecha_turno', [$request->input('fecha_desde'),$request->input('fecha_hasta')])
                ->orderBy('p.apeynom_profesional','ASC')
                ->orderBy('t.fecha_turno','DESC')
                ->orderBy('t.hora_turno','DESC')
                ->get();
             
                $a=(count($profesionales));
                if ($a > 0) {
                    return view("fechaprofresultado",["profesionales"=>$profesionales]);
                }else {
                    Session::flash('message','SIN REGISTROS PARA LOS DATOS INGRESADOS..!!!');
                    return view("profesionalfecha");
                }
            }
        } 
    }
    public function fechagral(Request $request )
    {
        switch($request->input('valor')){

            case 1:
            
            $f1 = $request->fecha_desde;
            $f2 = $request->fecha_hasta;
       
            if ($f1 <= $f2) {
                $turnos=DB::table('turnos as t')
                ->join('pacientes as p','t.id_paciente','=','p.id_paciente')
                ->select('t.fecha_turno','t.hora_turno','t.id_profesional','p.apeynom_paciente','t.estado_turno','t.id_turno')
                ->whereBetween('t.fecha_turno', [$request->input('fecha_desde'),$request->input('fecha_hasta')])
                ->orderBy('t.fecha_turno','DESC')
                ->orderBy('t.hora_turno','DESC')
                ->get();
             
                $a=(count($turnos));
                if ($a > 0) {
                    return view("profesionalesresultado",["turnos"=>$turnos]);
                }else {
                    Session::flash('message','SIN REGISTROS PARA LOS DATOS INGRESADOS..!!!');
                    return view("profesionalesfecha");
                }
            }
        } 
    }
}
