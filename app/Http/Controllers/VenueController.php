<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\venue;
use App\Models\event_detail;
class VenueController extends Controller
{
    function add(Request $req)
	{	
		$event =event_detail::find($req);
		$venue = venue::find($req);
		$booking=new Booking();
		$booking->no_of_guests=$req->no_of_guests;
		$booking->event_id=$req->id; 
		$booking->venue_id=$req->venue_name;
		$booking->user_id=session()->get('user.id');
		$saved=$booking->save();
		$bkId=$booking->id;
		if(!$saved){
		    echo "<script>alert('Your venue details are not saved!');</script>";
		}
		else{
			echo "<script>alert('Your venue details are saved successfully!!!');</script>";
		}
	 
	    return redirect('catering?bkgId='.$bkId)->with('venue', 'Your venue details are saved successfully!!!');
	}
}
