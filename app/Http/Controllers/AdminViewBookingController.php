<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\event_detail;
use Illuminate\Http\Request;

class AdminViewBookingController extends Controller
{
    function display(){
        $data = DB::table('bookings')
		->join('event_details', 'bookings.event_id', "=", 'event_details.id')
		->join('venues', 'bookings.venue_id', "=", 'venues.id')
         ->get(['event_details.fullname', 'bookings.no_of_guests', 'bookings.booking_status', 'bookings.total_amount','event_details.event_type', 'event_details.event_date','event_details.event_time','venues.venue_name','bookings.id']);
	
	return view('admin_main', compact('data'));
	
	}
	function confirmBooking(Request $req){
       $bId=$req->bkgId;
       $booking = Booking::find($bId);
       $present=event_detail::where('id', function($query) use ($bId) {
                $query->select('event_id')->from('bookings')->where('id',$bId);
            })->where('event_date', '>', date('Y-m-d'))->get();

       if($booking && $present->isNotEmpty() && $booking->booking_status!='Cancelled' && $booking->booking_status!='Confirmed' && $booking->booking_status!='Rejected'){
           $booking->booking_status='Confirmed';
           $booking->save();
           return redirect('admin_main')->with('message', 'Booking status confirmed successfully!');
       }
       else if($present->isEmpty()){
            return redirect('admin_main')->withErrors('Event has already taken place!');
       }
       else{
            return redirect('admin_main')->withErrors('Cannot confirm the booking!');
       }
    }
    function rejectBooking(Request $req){
       $bId=$req->bkgId;
       $booking = Booking::find($bId);
       $present=event_detail::where('id', function($query) use ($bId) {
                $query->select('event_id')->from('bookings')->where('id',$bId);
            })->where('event_date', '>', date('Y-m-d'))->get();
       if($booking && $present->isNotEmpty() && $booking->booking_status!='Cancelled' && $booking->booking_status!='Confirmed' && $booking->booking_status!='Rejected'){
           $booking->booking_status='Rejected';
           $booking->save();
           return redirect('admin_main')->with('message', 'Booking status rejected successfully!');
       }
       else if($present->isEmpty()){
            return redirect('admin_main')->withErrors('Event has already taken place!');
       }
       else{
            return redirect('admin_main')->withErrors('Cannot reject the booking!');
       }
    }
}

