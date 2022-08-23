<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Diagnostico;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class DiagnosticoController extends Controller
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
            $diagnosticos=DB::table('diagnosticos')
            ->where('id_diagnostico','LIKE','%'.$query.'%')
            ->orwhere('detalle_diagnostico','LIKE','%'.$query.'%')
            ->orderBy('id_diagnostico','DESC')
            ->paginate(6);
            return view('archivo.diagnosticos.index',["diagnosticos"=>$diagnosticos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("archivo.diagnosticos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diagnostico=new Diagnostico;
        $mytime = Carbon::now('America/Argentina/Buenos_Aires');
        $diagnostico->fechaalta_diagnostico=$mytime->toDateString();
        $diagnostico->detalle_diagnostico=$request->get('detalle_diagnostico');
        $diagnostico->estado_diagnostico='1';
        $diagnostico->save();
        return Redirect::to('archivo/diagnosticos');
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
        return view("archivo.diagnosticos.edit",["diagnostico"=>Diagnostico::find($id)]);
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
        $diagnostico=Diagnostico::find($id);
        $diagnostico->detalle_diagnostico=$request->get('detalle_diagnostico');
        $diagnostico->update();
        return Redirect::to('archivo/diagnosticos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnostico=Diagnostico::find($id);
        $diagnostico->estado_diagnostico='0';
        $diagnostico->save();
        return Redirect::to('archivo/diagnosticos');
    }
}
