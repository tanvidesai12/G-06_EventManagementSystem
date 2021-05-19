<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event_detail;
use App\Models\venue;
class EventDetailsController extends Controller
{
	function show(Request $req)
	{
		$id=$req->id;
		$data=venue::all();
		return view('venues',['venues'=>$data,'id'=>$id]);
	}
    function addData(Request $req)
	{
		$event=new event_detail;
		$event->fullname=$req->fullname;
		$event->email=$req->email;
		$event->event_type=$req->event_type;
		$event->phone=$req->phone;
		$event->event_date=$req->event_date;
		$event->event_time=$req->event_time;
		$saved=$event->save();
		$eventId=$event->id;
		if(!$saved){
		    echo "<script>alert('Your event details are not saved!');</script>";
		}
		else{
			echo "<script>alert('Your event details are saved successfully!!! Please book venue on next page');</script>";
		}
		
		return redirect('venues?id='.$eventId)->with('event', 'Your event details are saved successfully!!!Please choose a venue below.');;
	}
	
	function passId()
	{
		$data=event_detail::all();
		return view('booking_details',['events'=>$data]);
	}
}

