<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Taller;
use sisDepSolidario\Paciente;
use sisDepSolidario\PacienteTaller;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class CalendarioTallerdosController extends Controller
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
            $talleres=DB::table('paciente_talleres as pt')
                ->join('pacientes as p','p.id_paciente','=','pt.id_paciente')
                ->join('talleres as t','pt.id_taller','=','t.id_taller')
                ->select('t.nombre_taller','t.iniciolunes_taller','t.iniciomartes_taller','t.iniciomiercoles_taller',
                    't.iniciojueves_taller','t.inicioviernes_taller','t.finlunes_taller','t.finmartes_taller',
                    't.finmiercoles_taller','t.finjueves_taller','t.finviernes_taller','p.apeynom_paciente',
                    'pt.estado_pacientetaller','t.estado_taller','t.lunes','t.martes','t.miercoles','t.jueves','t.viernes')
                ->where('p.apeynom_paciente','LIKE','%'.$query.'%')
                ->orderBy('p.apeynom_paciente','ASC')
                ->paginate(10);
           // return view('calendariotallerdos', compact('talleres'));
                return view('calendariotallerdos',["talleres"=>$talleres,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
