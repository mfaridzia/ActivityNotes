<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\User;
use Auth;

class ActivityController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $activities = Activity::where('user_id', Auth::id())->paginate(10);
    	return view('activity.index', compact('activities'));
    }

    public function create()
    {
    	return view('activity.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
	        'activity_name' => 'required|min:5|max:200',
	        'start_date' => 'required',
	        'start_time' => 'required',
	        'end_date' => 'required',
	        'end_time' => 'required',
	        'status' => 'required'
    	]);

    	Activity::create([
    		'activity_name' =>  $request->activity_name,
	        'start_date'    =>  $request->start_date,
	        'start_time'    =>  $request->start_time,
	        'end_date'      =>  $request->end_date,
	        'end_time'      =>  $request->end_time,
	        'status'        =>  $request->status,
	        'user_id'       => Auth::user()->id
    	]);

    	$request->session()->flash('notif', 'Success create activity');

    	return redirect('/activity');
    	
    }

    public function edit($id)
    {
    	$activity = Activity::find($id);

    	if(!$activity)
            abort(404);

    	return view('activity.edit', compact('activity'));
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
	        'activity_name' => 'required|min:5|max:200',
	        'start_date' => 'required',
	        'start_time' => 'required',
	        'end_date' => 'required',
	        'end_time' => 'required',
	        'status' => 'required'
    	]);

    	$activity = Activity::find($id);
    	$activity->activity_name = $request->activity_name;
    	$activity->start_date = $request->start_date;
    	$activity->start_time = $request->start_time;
    	$activity->end_date = $request->end_date;
    	$activity->end_time = $request->end_time;
    	$activity->status = $request->status;
    	$activity->save();

    	$request->session()->flash('notif', 'Success update activity');

    	return redirect('/activity');
    }

    public function destroy(Request $request, $id)
    {
    	$activity = Activity::find($id);
        $activity->delete();

        $request->session()->flash('notif', 'Success delete activity');
        return redirect('/activity');
    }

}
