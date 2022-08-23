<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Turno;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class ConsultaTurnoController extends Controller
{
    public function fecha(Request $request )
    {
        switch($request->input('valor')){

            case 1:
            
            $f1 = $request->fecha_desde;
            $f2 = $request->fecha_hasta;
       
            if ($f1 <= $f2) {
                $turnos=DB::table('turnos as t')
	            ->join('profesionales as pf','t.id_profesional','=','pf.id_profesional')
    	        ->join('pacientes as pc','t.id_paciente','=','pc.id_paciente')
        	    ->select('t.fecha_turno','t.hora_turno','pc.apeynom_paciente','pf.apeynom_profesional',
            	    't.estado_turno','id_turno','obs_turno')
                ->where('t.estado_turno', 'like', '%'. $request->input('dato').'%')
                ->whereBetween('t.fecha_turno', [$request->input('fecha_desde'),$request->input('fecha_hasta')])
                ->orderBy('pc.apeynom_paciente','ASC')
                ->orderBy('t.fecha_turno','DESC')
                ->orderBy('t.hora_turno','DESC')
                ->get();
             
                $a=(count($turnos));
                if ($a > 0) {
                    return view("turnoresultado",["turnos"=>$turnos]);
                }else {
                    Session::flash('message','SIN REGISTROS PARA LOS DATOS INGRESADOS..!!!');
                    return view("turnoestado");
                }
            }
        } 
    }
}
