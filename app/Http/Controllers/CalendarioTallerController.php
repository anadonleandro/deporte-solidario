<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Taller;
use sisDepSolidario\Profesional;
use sisDepSolidario\ProfesionalTaller;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class CalendarioTallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$talleres  = Taller::all();
        return view('calendariotaller', compact('talleres'));*/
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $talleres=DB::table('talleres')
                ->select('nombre_taller','iniciolunes_taller','iniciomartes_taller','iniciomiercoles_taller',
                    'iniciojueves_taller','inicioviernes_taller','finlunes_taller','finmartes_taller',
                    'finmiercoles_taller','finjueves_taller','finviernes_taller','estado_taller',
                    'lunes','martes','miercoles','jueves','viernes')
                ->where('nombre_taller','LIKE','%'.$query.'%')
                ->orderBy('nombre_taller','ASC')
                ->paginate(8);
           // return view('calendariotallerdos', compact('talleres'));
            return view('calendariotaller',["talleres"=>$talleres,"searchText"=>$query]);
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
