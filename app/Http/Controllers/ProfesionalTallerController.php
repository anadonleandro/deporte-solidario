<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Paciente;
use sisDepSolidario\Taller;
use sisDepSolidario\Profesional;
use sisDepSolidario\ProfesionalTaller;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class ProfesionalTallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profesionales = DB::table('profesionales')
            ->select('id_profesional','apeynom_profesional','estado_profesional')
            ->orderBy('apeynom_profesional','ASC')
            ->get();
        $talleres = DB::table('talleres')
            ->select('id_taller','nombre_taller','estado_taller')
            ->orderBy('nombre_taller','ASC')
            ->get();
        return view("archivo.profesionaltalleres.create",["profesionales"=>$profesionales,"talleres"=>$talleres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesionaltaller=new ProfesionalTaller;   
        $profesionaltaller->id_profesional=$request->get('id_profesional');
        $profesionaltaller->id_taller=$request->get('id_taller');
        $profesionaltaller->estado_profesionaltaller='1';
        $profesionaltaller->save();

        return Redirect::to('archivo/profesionales'); 
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
        return view("archivo.profesionaltalleres.edit",["taller"=>ProfesionalTaller::find($id)]);
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
        $taller=ProfesionalTaller::find($id);
        $taller->estado_profesionaltaller=$request->get('estado_profesionaltaller');
        $taller->save();

        return Redirect::to('/profesionaltaller'); 
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
