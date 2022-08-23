<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Http\Requests;
use sisDepSolidario\Profesional;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use DB;
use Fpdf;

class ProfesionalController extends Controller
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
            $profesionales=DB::table('profesionales')
            ->where('apeynom_profesional','LIKE','%'.$query.'%')
            ->orwhere('matricula_profesional','LIKE','%'.$query.'%')
            ->orderBy('apeynom_profesional','ASC')
            ->paginate(6);
            return view('archivo.profesionales.index',["profesionales"=>$profesionales,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("archivo.profesionales.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profesional=new Profesional;
        $mytime = Carbon::now('America/Argentina/Buenos_Aires');
        $profesional->fechaalta_profesional=$mytime->toDateString();
        $profesional->apeynom_profesional=$request->get('apeynom_profesional');
        $profesional->especialidad_profesional=$request->get('especialidad_profesional');
        $profesional->matricula_profesional=$request->get('matricula_profesional');
        $profesional->dni_profesional=$request->get('dni_profesional');
        $profesional->fechanac_profesional=$request->get('fechanac_profesional');
        $profesional->edad_profesional=$request->get('edad_profesional');
        $profesional->telefono_profesional=$request->get('telefono_profesional');
        $profesional->domicilio_profesional=$request->get('domicilio_profesional');
        $profesional->email_profesional=$request->get('email_profesional');
        $profesional->localidad_profesional=$request->get('localidad_profesional');
        $profesional->estado_profesional='1';
        $profesional->save();
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
        $profesional=DB::table('profesionales')
            ->select('apeynom_profesional','matricula_profesional','especialidad_profesional','dni_profesional',
                'fechanac_profesional','edad_profesional','telefono_profesional','domicilio_profesional','email_profesional',
                'localidad_profesional')
            ->where('id_profesional','=',$id)
            ->first();
        return view("archivo.profesionales.show",["profesional"=>$profesional]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("archivo.profesionales.edit",["profesional"=>Profesional::find($id)]);
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
        $profesional=Profesional::find($id);
        $profesional->apeynom_profesional=$request->get('apeynom_profesional');
        $profesional->especialidad_profesional=$request->get('especialidad_profesional');
        $profesional->matricula_profesional=$request->get('matricula_profesional');
        $profesional->dni_profesional=$request->get('dni_profesional');
        $profesional->fechanac_profesional=$request->get('fechanac_profesional');
        $profesional->edad_profesional=$request->get('edad_profesional');
        $profesional->telefono_profesional=$request->get('telefono_profesional');
        $profesional->domicilio_profesional=$request->get('domicilio_profesional');
        $profesional->email_profesional=$request->get('email_profesional');
        $profesional->localidad_profesional=$request->get('localidad_profesional');
        $profesional->update();
        return Redirect::to('archivo/profesionales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesional=Profesional::find($id);
        $profesional->estado_profesional='0';
        $profesional->save();
        return Redirect::to('archivo/profesionales');
    }
}
