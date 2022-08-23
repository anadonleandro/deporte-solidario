<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Taller;
use sisDepSolidario\PacienteTaller;
use sisDepSolidario\Paciente;
use sisDepSolidario\Profesional;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class TallerController extends Controller
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
            $talleres=DB::table('talleres')
            ->where('id_taller','LIKE','%'.$query.'%')
            ->orwhere('nombre_taller','LIKE','%'.$query.'%')
            ->orderBy('id_taller','DESC')
            ->paginate(6);
            return view('archivo.talleres.index',["talleres"=>$talleres,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("archivo.talleres.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $taller=new Taller;
        $mytime = Carbon::now('America/Argentina/Buenos_Aires');
        $taller->fechaalta_taller=$mytime->toDateString();
        $taller->nombre_taller=$request->get('nombre_taller');
        $taller->lunes=$request->get('lunes');
        $taller->iniciolunes_taller=$request->get('iniciolunes_taller');
        $taller->finlunes_taller=$request->get('finlunes_taller');
        $taller->martes=$request->get('martes');
        $taller->iniciomartes_taller=$request->get('iniciomartes_taller');
        $taller->finmartes_taller=$request->get('finmartes_taller');
        $taller->miercoles=$request->get('miercoles');
        $taller->iniciomiercoles_taller=$request->get('iniciomiercoles_taller');
        $taller->finmiercoles_taller=$request->get('finmiercoles_taller');
        $taller->jueves=$request->get('jueves');
        $taller->iniciojueves_taller=$request->get('iniciojueves_taller');
        $taller->finjueves_taller=$request->get('finjueves_taller');
        $taller->viernes=$request->get('viernes');
        $taller->inicioviernes_taller=$request->get('inicioviernes_taller');
        $taller->finviernes_taller=$request->get('finviernes_taller');
        $taller->horainicio_taller=$request->get('horainicio_taller');
        $taller->horafin_taller=$request->get('horafin_taller');
        $taller->estado_taller='1';
        $taller->save();
        return Redirect::to('archivo/talleres');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $talleres=DB::table('talleres')
            ->select('id_taller','nombre_taller','lunes','martes','miercoles','jueves','viernes',
                'iniciolunes_taller','iniciomartes_taller','iniciomiercoles_taller','iniciojueves_taller',
                'inicioviernes_taller','finlunes_taller','finmartes_taller','finmiercoles_taller',
                'finjueves_taller','finviernes_taller','horainicio_taller','horafin_taller')
            ->where('id_taller','=',$id)
            ->get();
        return view("archivo.talleres.show",["talleres"=>$talleres]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("archivo.talleres.edit",["taller"=>Taller::find($id)]);
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
        $taller=Taller::find($id);
        $taller->nombre_taller=$request->get('nombre_taller');
        $taller->lunes=$request->get('lunes');
        $taller->iniciolunes_taller=$request->get('iniciolunes_taller');
        $taller->finlunes_taller=$request->get('finlunes_taller');
        $taller->martes=$request->get('martes');
        $taller->iniciomartes_taller=$request->get('iniciomartes_taller');
        $taller->finmartes_taller=$request->get('finmartes_taller');
        $taller->miercoles=$request->get('miercoles');
        $taller->iniciomiercoles_taller=$request->get('iniciomiercoles_taller');
        $taller->finmiercoles_taller=$request->get('finmiercoles_taller');
        $taller->jueves=$request->get('jueves');
        $taller->iniciojueves_taller=$request->get('iniciojueves_taller');
        $taller->finjueves_taller=$request->get('finjueves_taller');
        $taller->viernes=$request->get('viernes');
        $taller->inicioviernes_taller=$request->get('inicioviernes_taller');
        $taller->finviernes_taller=$request->get('finviernes_taller');
        $taller->horainicio_taller=$request->get('horainicio_taller');
        $taller->horafin_taller=$request->get('horafin_taller');
        $taller->update();
        return Redirect::to('archivo/talleres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taller=Taller::find($id);
        $taller->estado_taller='0';
        $taller->save();
        return Redirect::to('archivo/talleres');
    }
    public function reportec($id)
    {
        $taller=DB::table('talleres')
            ->select('nombre_taller')
            ->where('id_taller','=',$id)
            ->first();
        $pacientes=DB::table('pacientes as pc')
            ->join('paciente_talleres as pt','pc.id_paciente','=','pt.id_paciente')
            ->select('pc.apeynom_paciente','estado_pacientetaller')
            ->where('pt.id_taller','=',$id)
            ->orderBy('pc.apeynom_paciente','ASC')
            ->get();
        $profesionales=DB::table('profesionales as pf')
            ->join('profesional_talleres as pt','pf.id_profesional','=','pt.id_profesional')
            ->select('pf.apeynom_profesional','estado_profesionaltaller')
            ->where('pt.id_taller','=',$id)
            ->orderBy('pf.apeynom_profesional','ASC')
            ->get();
        $mytime = Carbon::now('America/Argentina/Buenos_Aires');
        $mytime=date("d-m-Y",strtotime($mytime));
        
         //Ponemos la hoja Horizontal (L)
         $pdf = new Fpdf('L','mm','A4');
         $pdf::AddPage();
         $pdf::SetTextColor(0,0,0);
         $pdf::SetFont('Arial','B',11);
         $pdf::Cell(0,10,utf8_decode("LISTADO DE ASISTENCIAS AL TALLER: ".$taller->nombre_taller),0,"","C");
         $pdf::Ln();
         $pdf::SetTextColor(0,0,0);
         $pdf::SetFont('Arial','B',10);
         $pdf::Cell(0,10,utf8_decode("Fecha de Emisión: ".$mytime),0,"","L"); 

         
          
         $pdf::Ln();        
         $pdf::SetTextColor(0,0,0);  // Establece el color del texto 
         $pdf::SetFillColor(206, 246, 245); // establece el color del fondo de la celda 
         $pdf::SetFont('Arial','B',10); 
         //El ancho de las columnas debe de sumar promedio 190        
         $pdf::cell(90,8,utf8_decode("Paciente"),1,"","L",true);
         $pdf::cell(20,8,utf8_decode("Lun"),1,"","C",true);
         $pdf::cell(20,8,utf8_decode("Mar"),1,"","C",true);
         $pdf::cell(20,8,utf8_decode("Mie"),1,"","C",true);
         $pdf::cell(20,8,utf8_decode("Jue"),1,"","C",true);
         $pdf::cell(20,8,utf8_decode("Vie"),1,"","C",true);
         
         $pdf::Ln();
         $pdf::SetTextColor(0,0,0);  // Establece el color del texto 
         $pdf::SetFillColor(255, 255, 255); // establece el color del fondo de la celda
         $pdf::SetFont("Arial","",9);
         
         foreach ($pacientes as $paci)
         {
            if($paci->estado_pacientetaller == '1'){
                $pdf::cell(90,8,utf8_decode($paci->apeynom_paciente),1,"","L",true);
                $pdf::cell(20,8,utf8_decode(""),1,"","C",true);
                $pdf::cell(20,8,utf8_decode(""),1,"","C",true);
                $pdf::cell(20,8,utf8_decode(""),1,"","C",true);
                $pdf::cell(20,8,utf8_decode(""),1,"","C",true);
                $pdf::cell(20,8,utf8_decode(""),1,"","C",true);
                $pdf::Ln(); 
            }
         }
         $pdf::Ln();
         $pdf::Ln();
         foreach ($profesionales as $prof)
         {
            if ($prof->estado_profesionaltaller == '1') {
                $pdf::SetTextColor(0,0,0);
                $pdf::SetFont('Arial','B',10);
                $pdf::Cell(0,5,utf8_decode("Responsable: ".$prof->apeynom_profesional),0,"","R"); 
                $pdf::Ln();
            }
         }

         $pdf::Output();
         exit;
        
    }
}
