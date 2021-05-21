<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\SelectedDish;
use App\Models\Dish;
use App\Models\event_detail;
use App\Models\venue;

class BillDetailsController extends Controller
{
    function showBillDetails(Request $req)
	{
		 $bId=$req->bkgId;
    
         // $catering=Dish::whereIn('dish_name', function($query) use ($bId) {
			     // $query->select('dish_name')->from('selected_dishes')->where('booking_id',$bId);
			 // })->sum('price');
          $booking=Booking::find($bId);
         // $catering_total=$catering * $booking->no_of_guests;
          $venues= DB::table('venues')->join('bookings','venues.id',"=",'bookings.venue_id')->select('venues.venue_name','venues.address','venues.price')->where('bookings.id',$bId)->get();
		 return view('bill_details',['bId'=>$bId,'venues'=>$venues]);
		//return view('bill_details');
	}
}
