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

class AdmisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query=trim($request->get('searchText'));    
        $admisiones=DB::table('admisiones')
            ->where('apeynom_admision','LIKE','%'.$query.'%')
            ->orWhere('dni_admision','LIKE','%'.$query.'%')
            ->orderBy('fecha_admision','DESC')
            ->orderBy('hora_admision','DESC')
            ->paginate(7);
        return view('archivo.admisiones.index',["admisiones"=>$admisiones,"searchText"=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("archivo.admisiones.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admision=new Admision;
        $admision->apeynom_admision=$request->get('apeynom_admision');
        $admision->telefono_admision=$request->get('telefono_admision');
        $admision->fecha_admision=$request->get('fecha_admision');
        $admision->hora_admision=$request->get('hora_admision');
        $admision->obs_admision=$request->get('obs_admision');
        $admision->estado_admision=$request->get('estado_admision');
        $admision->lugar_admision=$request->get('lugar_admision');
        $admision->dni_admision=$request->get('dni_admision');
        $admision->obrasocial_admision=$request->get('obrasocial_admision');
        $admision->save();
        return Redirect::to('archivo/admisiones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admisiones=DB::table('admisiones')
            ->select('apeynom_admision','telefono_admision','fecha_admision','hora_admision',
                'obs_admision','estado_admision','lugar_admision','id_admision','dni_admision',
                'obrasocial_admision')
            ->where('id_admision','=',$id)
            ->get();
        return view("archivo.admisiones.show",["admisiones"=>$admisiones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("archivo.admisiones.edit",["admision"=>Admision::find($id)]);
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
        $admision=Admision::find($id);
        $admision->apeynom_admision=$request->get('apeynom_admision');
        $admision->telefono_admision=$request->get('telefono_admision');
        $admision->fecha_admision=$request->get('fecha_admision');
        $admision->hora_admision=$request->get('hora_admision');
        $admision->obs_admision=$request->get('obs_admision');
        $admision->estado_admision=$request->get('estado_admision');
        $admision->lugar_admision=$request->get('lugar_admision');
        $admision->dni_admision=$request->get('dni_admision');
        $admision->obrasocial_admision=$request->get('obrasocial_admision');
        $admision->update();
        return Redirect::to('archivo/admisiones');
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
