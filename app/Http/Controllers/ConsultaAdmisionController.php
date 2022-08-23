<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Admision;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class ConsultaAdmisionController extends Controller
{
    public function fecha(Request $request )
    {
        switch($request->input('valor')){

            case 1:
            
            $f1 = $request->fecha_desde;
            $f2 = $request->fecha_hasta;
       
            if ($f1 <= $f2) {
                $admisiones=DB::table('admisiones')
                ->select('apeynom_admision','telefono_admision','fecha_admision','hora_admision',
                		'obs_admision','estado_admision','lugar_admision','id_admision')
                ->where('estado_admision', 'like', '%'. $request->input('dato').'%')
                ->whereBetween('fecha_admision', [$request->input('fecha_desde'),$request->input('fecha_hasta')])
                ->orderBy('apeynom_admision','ASC')
                ->orderBy('fecha_admision','DESC')
                ->orderBy('hora_admision','DESC')
                ->get();
             
                $a=(count($admisiones));
                if ($a > 0) {
                    return view("admisionresultado",["admisiones"=>$admisiones]);
                }else {
                    Session::flash('message','SIN REGISTROS PARA LOS DATOS INGRESADOS..!!!');
                    return view("admisionestado");
                }
            }
        } 
    }
}
