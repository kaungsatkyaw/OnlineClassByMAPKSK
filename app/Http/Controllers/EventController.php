<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('created_at','DESC')->get();
        return view('admin.event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $event->title = $request->title;
        $event->place = $request->place;
        $event->time  = $request->time;
        $event->date  = $request->date;

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filepath  = pathinfo($extension,PATHINFO_FILENAME);
            $fileNameToStore =time().'.'.$extension;
            $path = $file->storeAs('public/Eventimg',$fileNameToStore);
            $event->image = $fileNameToStore;
        }else{
            return $request;
            $event->image = ' ';
        }
        $event->save();
        Session::flash('success','Event created successfully');

        return redirect()->route('event.index');
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
    public function edit(Event $event)
    {
        return view('admin.event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->title = $request->title;
        $event->place = $request->place;
        $event->time  = $request->time;
        $event->date  = $request->date;

        if ($request->hasfile('image')){
            if($event->image){
                Storage::delete('public/Eventimg/'.$event->image);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filepath  = pathinfo($extension,PATHINFO_FILENAME);
            $fileNameToStore =time().'.'.$extension;
            $path = $file->storeAs('public/Eventimg',$fileNameToStore);
            $event->image = $fileNameToStore;
        }
        $event->save();
        Session::flash('success','Event Updated successfully');

        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if($event){
            Storage::delete('public/Eventimg/'.$event->image);
            $event->delete();
            Session::flash('success','Event Deleted successfully');

            return redirect()->route('event.index');
        }
    }
}
