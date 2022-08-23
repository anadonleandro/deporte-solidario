<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Acompanante;
use sisDepSolidario\Paciente;
use sisDepSolidario\PacienteAcompanante;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class ConsultaAcompananteController extends Controller
{
    public function fecha(Request $request )
    {
        switch($request->input('valor')){

            case 1:
            
            $f1 = $request->fecha_desde;
            $f2 = $request->fecha_hasta;
       
            if ($f1 <= $f2) {
                $acompanantes=DB::table('acompanantes as a')
                ->join('paciente_acompanantes as pa','a.id_acompanante','=','pa.id_acompanante')
                ->join('pacientes as p','pa.id_paciente','=','p.id_paciente')
                ->select(DB::raw('TIMEDIFF(horafin_pacienteacompanante, horainicio_pacienteacompanante) 
                    as diferencia'),'pa.fecha_pacienteacompanante','pa.horainicio_pacienteacompanante',
                	'pa.horafin_pacienteacompanante','p.apeynom_paciente','a.apeynom_acompanante',
                	'pa.id_pacienteacompanante','a.apeynom_acompanante','pa.estado_pacienteacompanante')
                ->where('a.apeynom_acompanante', 'like', '%'. $request->input('dato').'%')
                ->whereBetween('pa.fecha_pacienteacompanante', [$request->input('fecha_desde'),$request->input('fecha_hasta')])
                ->orderBy('a.apeynom_acompanante','ASC')
                ->orderBy('pa.fecha_pacienteacompanante','DESC')
                ->get();
             
                $a=(count($acompanantes));
                if ($a > 0) {
                    return view("fechaacompresultado",["acompanantes"=>$acompanantes]);
                }else {
                    Session::flash('message','SIN REGISTROS PARA LOS DATOS INGRESADOS..!!!');
                    return view("acompanantefecha");
                }
            }
        } 
    }
}
