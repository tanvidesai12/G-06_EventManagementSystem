<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Models\SelectedDish;
use App\Models\Dish;
use App\Models\Payment;
use App\Models\event_detail;
use App\Models\venue;
use DateTime;
class ViewBookingsController extends Controller
{
    function showBookings(){
        $user_id=session()->get('user.id');
        $data = DB::table('bookings')
            ->where('user_id', '=',$user_id)
            ->join('event_details', 'bookings.event_id', '=', 'event_details.id')
            ->select('bookings.id','event_details.fullname', 'event_details.event_type', 'event_details.event_date','event_details.event_time','bookings.booking_status','bookings.no_of_guests')
            ->get();
    	/*$bookings=Booking::where('user_id',$user_id)->get();
        $bkgs=$bookings->toArray();
        $result = array_column($bkgs, 'id');        
        $events=event_detail::whereIn('id', function($query) use ($result) {
                $query->select('event_id')->from('bookings')->whereIn('id',$result);
            })->get();*/
    	return view('view_bookings',['data'=>$data]);
    }
	
    function showBookingDetails(Request $req){
        $bId=$req->bkgId;
    	$dishes=Dish::whereIn('dish_name', function($query) use ($bId) {
			    $query->select('dish_name')->from('selected_dishes')->where('booking_id',$bId);
			})->get();
        $present=event_detail::where('id', function($query) use ($bId) {
                $query->select('event_id')->from('bookings')->where('id',$bId);
            })->where('event_date', '<', date('Y-m-d'))->get();
        $reviewPresent=Booking::find($bId)->reviews;
        $cancellation = Booking::find($bId);
        $catering=Dish::whereIn('dish_name', function($query) use ($bId) {
			    $query->select('dish_name')->from('selected_dishes')->where('booking_id',$bId);
			})->sum('price');
        $booking=Booking::find($bId);
        $catering_total=$catering * $booking->no_of_guests;
		$payment=Payment::find($bId);
		$pay_status=$payment['payment_status'];
    	$venues= DB::table('venues')->join('bookings','venues.id',"=",'bookings.venue_id')->select('venues.venue_name','venues.address','venues.price')->where('bookings.id',$bId)->get();
		return view('view_booking_details',['dishes'=>$dishes,'bId'=>$bId,'present'=>$present,'reviewPresent'=>$reviewPresent,'cancellation'=>$cancellation,'catering'=>$catering,'catering_total'=>$catering_total,'venues'=>$venues,'pay_status'=>$pay_status]);
    }
	
    function cancelBooking(Request $req){
       $bId=$req->bkgId;
       $cancellation = Booking::find($bId);
       $present=event_detail::where('id', function($query) use ($bId) {
                $query->select('event_id')->from('bookings')->where('id',$bId);
            })->where('event_date', '<', date('Y-m-d'))->get();
       if($cancellation && $present && $cancellation->booking_status!='Cancelled'){
           $cancellation->booking_status='Cancelled';
           $cancellation->save();
           return redirect('/')->with('cancelled', 'Booking cancelled successfully!');
       }
       else if(!$present){
            return redirect('/')->withErrors('Event has already taken place!');
       }
       else{
            return redirect('/')->withErrors('There is no such booking!');
       }
    }
}
