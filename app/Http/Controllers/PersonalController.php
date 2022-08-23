<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Personal;
use DB;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $id)
    {
        $personal=DB::table('personal')
            ->select('id_personal','apeynom_personal','dni_personal','grado_personal','cpoesc_personal',
                'ud_personal','subud_personal','sitrev_personal','estado_sitrev_personal')
            ->where('id_personal','=',$id)
            ->get();
        return view("personal",["personal"=>$personal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personal=DB::table('personal')
            ->select('ni_personal','id_personal','apeynom_personal')
            //,'dni_personal','grado_personal',
            //    'cpoesc_personal','ud_personal','subud_personal','sitrev_personal','estado_sitrev_personal')
            ->get();
        return view("personal",["personal"=>$personal]);
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
    public function show(Request $id)
    {
        $personal=DB::table('personal')
            ->select('id_personal','apeynom_personal','dni_personal','grado_personal','cpoesc_personal',
                'ud_personal','subud_personal','sitrev_personal','estado_sitrev_personal')
            ->where('id_personal','=',$id)
            ->get();
        return view("personal",["personal"=>$personal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        
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
