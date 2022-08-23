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
use Barryvdh\DomPDF\Facade as PDF;

class HistoriaclinicaController extends Controller
{
    public function orderPdf($id)
    {
        $historiaclinica= Paciente::findOrFail($id);
        $pdf = PDF::loadView('vista', array('historiaclinica' => $historiaclinica));
        //$paper_size = array(0,0,50,50);
		//$pdf->setPaper($paper_size);
       // $pdf->setPaper("A4", "portrait");
        $name = 
        "HISTORIA CLINICA_" . $historiaclinica->id_paciente ."_".".pdf";
        return $pdf->stream($name);
    }
}
