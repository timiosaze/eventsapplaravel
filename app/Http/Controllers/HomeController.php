<?php

namespace App\Http\Controllers;

use App\Event;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::where('user_id',Auth::id())->orderBy('event_date', 'desc')->paginate(7);

        return view('events.index', compact("events"));
    }
}
