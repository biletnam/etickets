<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Eventscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('events.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'event_title'=>'required|max:255',
            'event_location'=>'required|max:255',
            'event_start'=>'required',
            'event_start_time'=>'required',
            'event_end'=>'required',
            'event_end_time'=>'required',
            'event_description'=>'required',
            'org_name'=>'required',
            'event_type'=>'required',
            'event_topic'=>'required',
            'event_image'=>'required|image'
        ]);
        $image_file= $request->file('event_image');
        $name = time().$image_file->getClientOriginalName();
        $image_file->move('event-images',$name);
        //$data = array_merge(['photo'=>"event-images/{$name}"]);


        $event = new Event();
        $event->event_title = $request->event_title;
        $event->starts_at = $request->event_start;
        $event->ends_at = $request->event_end;
        $event->event_description = $request->event_description;
        $event->event_type= $request->event_type;
        $event->event_topic= $request->event_topic;
        $event->organisers_name = $request->org_name;
        $event->event_image=$name;
        $event->save();

        if($event->save()){
            return redirect()->route('events.create');
        } else{
            Session::flash('danger','sorry a problem occured while creating this Event.');
            return redirect()->route('events.create');
        }


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
