<?php

namespace App\Http\Controllers;

use App\Event;
use Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::where('user_id',Auth::id())->orderBy('event_date', 'desc')->paginate(7);

        return view('events.index', compact("events"));
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
        request()->validate([
            'event_name' => 'required',
            'event_date' => 'required',
            'venue' => 'required'
        ]);

        $event = new Event();
        $event->event_name = request('event_name');
        $event->event_date = request('event_date');
        $event->venue = request('venue');
        $event->user_id = Auth::id();

        if($event->save()){
            return redirect('/events');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $event = Event::where('user_id',Auth::id())->findOrFail($id);

        return view('events.edit', compact("event"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'event_name' => 'required',
            'event_date' => 'required',
            'venue' => 'required'
        ]);

        $event = Event::where('user_id',Auth::id())->findOrFail($id);
        $event->event_name = request('event_name');
        $event->event_date = request('event_date');
        $event->venue = request('venue');

        if($event->save()){
            return redirect('/events');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $event = Event::where('user_id',Auth::id())->findOrFail($id);

        if($event->delete()){
            return redirect('/events');
        }

    }
}
