<?php

namespace sisDepSolidario\Http\Controllers;

use Illuminate\Http\Request;
use sisDepSolidario\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events  = Event::all();
        $event   = [];
        
        foreach($events as $row){
            $enddate = $row->end_date."24:00:00";
            $event[] = \Calendar::event(
                $row->titulo,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'color' => $row->color
                ]
            );
        } 
        $calendar = \Calendar::addEvents($event);
        return view('eventpage', compact('events','calendar'));
      
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
    public function display()
    {
        return view('addevent');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'titulo'=>'required',
            'color'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            ]);
        $events = new Event;
        $events->titulo=$request->input('titulo');
        $events->color=$request->input('color');
        $events->start_date=$request->input('start_date');
        $events->end_date=$request->input('end_date');
        $events->save();

        return redirect('events')->with('success', 'El evento se AGREGO de forma satisfactoria...!!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $events = Event::all();
        return view('display')->with('events', $events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::find($id);
        return view('editform', compact('events', 'id'));
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
        $this->validate($request,[
            'titulo'=>'required',
            'color'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            ]);
        $events = Event::find($id);
        $events->titulo=$request->input('titulo');
        $events->color=$request->input('color');
        $events->start_date=$request->input('start_date');
        $events->end_date=$request->input('end_date');
        $events->save();
        return redirect('events')->with('success', 'El evento se EDITO de forma satisfactoria...!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::find($id);
        $events->delete();
        return redirect('events')->with('success', 'El evento se ELIMINO de forma satisfactoria...!!!');
    }
}
