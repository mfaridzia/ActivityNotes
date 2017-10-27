<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
use Auth;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::where('user_id', Auth::id())->paginate(10);
    	return view('events.index', compact('events'));
    }

    public function create()
    {
    	return view('events.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
	        'event_name' => 'required|min:5|max:200',
	        'start_date' => 'required',
	        'start_time' => 'required',
	        'end_date' => 'required',
	        'end_time' => 'required',
	        'status' => 'required'
    	]);

    	Event::create([
    		'event_name'    =>  $request->event_name,
	        'start_date'    =>  $request->start_date,
	        'start_time'    =>  $request->start_time,
	        'end_date'      =>  $request->end_date,
	        'end_time'      =>  $request->end_time,
	        'status'        =>  $request->status,
	        'user_id'       => Auth::user()->id
    	]);

    	$request->session()->flash('notif', 'Success create events');

    	return redirect('/events');
    }

    public function edit($id)
    {
    	$event = Event::find($id);

    	if(!$event)
            abort(404);

    	return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
	        'event_name' => 'required|min:5|max:200',
	        'start_date' => 'required',
	        'start_time' => 'required',
	        'end_date' => 'required',
	        'end_time' => 'required',
	        'status' => 'required'
    	]);

    	$event = Event::find($id);
    	$event->event_name = $request->event_name;
    	$event->start_date = $request->start_date;
    	$event->start_time = $request->start_time;
    	$event->end_date   = $request->end_date;
    	$event->end_time   = $request->end_time;
    	$event->status     = $request->status;
    	$event->save();

    	$request->session()->flash('notif', 'Success update events');

    	return redirect('/events');
    }

    public function destroy(Request $request, $id)
    {
    	$event = Event::find($id);
        $event->delete();

        $request->session()->flash('notif', 'Success delete events');
        return redirect('/events');
    }
}
