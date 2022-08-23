<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Acompanante;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class AcompananteController extends Controller
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
            $acompanantes=DB::table('acompanantes')
            ->where('apeynom_acompanante','LIKE','%'.$query.'%')
            ->orwhere('telefono_acompanante','LIKE','%'.$query.'%')
            ->orderBy('apeynom_acompanante','ASC')
            ->paginate(6);
            return view('archivo.acompanantes.index',["acompanantes"=>$acompanantes,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("archivo.acompanantes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acompanante=new Acompanante;
        $mytime = Carbon::now('America/Argentina/Buenos_Aires');
        $acompanante->fechaalta_acompanante=$mytime->toDateString();
        $acompanante->apeynom_acompanante=$request->get('apeynom_acompanante');
        $acompanante->telefono_acompanante=$request->get('telefono_acompanante');
        $acompanante->obs_acompanante=$request->get('obs_acompanante');
        $acompanante->formacion_acompanante=$request->get('formacion_acompanante');
        $acompanante->disponibilidad_acompanante=$request->get('disponibilidad_acompanante');
        $acompanante->edad_acompanante=$request->get('edad_acompanante');
        $acompanante->fechanac_acompanante=$request->get('fechanac_acompanante');
        $acompanante->estado_acompanante='1';
        $acompanante->save();
        return Redirect::to('archivo/acompanantes');
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
         return view("archivo.acompanantes.edit",["acompanante"=>Acompanante::find($id)]);
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
        $acompanante=Acompanante::find($id);
        $acompanante->apeynom_acompanante=$request->get('apeynom_acompanante');
        $acompanante->telefono_acompanante=$request->get('telefono_acompanante');
        $acompanante->obs_acompanante=$request->get('obs_acompanante');
        $acompanante->formacion_acompanante=$request->get('formacion_acompanante');
        $acompanante->disponibilidad_acompanante=$request->get('disponibilidad_acompanante');
        $acompanante->edad_acompanante=$request->get('edad_acompanante');
        $acompanante->fechanac_acompanante=$request->get('fechanac_acompanante');
        $acompanante->update();
        return Redirect::to('archivo/acompanantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acompanante=Acompanante::find($id);
        $acompanante->estado_acompanante='0';
        $acompanante->save();
        return Redirect::to('archivo/acompanantes');
    }
}
