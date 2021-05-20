<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\SelectedDish;
use App\Models\Dish;
use App\Models\event_detail;
use DateTime;
class ViewBookingsController extends Controller
{
    function showBookings(){
        $user_id=session()->get('user.id');
    	$bookings=Booking::where('user_id',$user_id)->get();
        $bkgs=$bookings->toArray();
        $result = array_column($bkgs, 'id');        
        $events=event_detail::whereIn('id', function($query) use ($result) {
                $query->select('event_id')->from('bookings')->whereIn('id',$result);
            })->get();
    	return view('view_bookings',['bookings'=>$bookings,'events'=>$events]);
    }
    function showBookingDetails(Request $req){
        $bId=$req->bkgId;
    	$dishes=Dish::whereIn('dish_name', function($query) use ($bId) {
			    $query->select('dish_name')->from('selected_dishes')->where('booking_id',$bId);
			})->get();
        $present=event_detail::where('id', function($query) use ($bId) {
                $query->select('event_id')->from('bookings')->where('id',$bId);
            })->where('event_date', '<=', date('Y-m-d'))->get();
        $reviewPresent=Booking::find($bId)->reviews;
        $cancellation = Booking::find($bId);
    	return view('view_booking_details',['dishes'=>$dishes,'bId'=>$bId,'present'=>$present,'reviewPresent'=>$reviewPresent,'cancellation'=>$cancellation]);
    }
    function cancelBooking(Request $req){
       $bId=$req->bkgId;
       $cancellation = Booking::find($bId);
       $present=event_detail::where('id', function($query) use ($bId) {
                $query->select('event_id')->from('bookings')->where('id',$bId);
            })->where('event_date', '<=', date('Y-m-d'))->get();
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
