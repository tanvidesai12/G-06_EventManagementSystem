<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Review;
use App\Models\event_detail;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    function submitReview(Request $req){
    	$bId=$req->bkgId;
		$booking=Booking::find($bId);
		$review=new Review();
		$review->review=$req->review;
		$booking->reviews()->save($review);
		return redirect('/')->with('status', 'Review Added successfully!');
    }
    function addReview(Request $req){
    	$bId=$req->bkgId;
    	$present=Booking::find($bId)->reviews;
    	$event=event_detail::where('id', function($query) use ($bId) {
                $query->select('event_id')->from('bookings')->where('id',$bId);
            })->where('event_date', '<', date('Y-m-d'))->get();
    	if($present){
    		return redirect('view_booking_details?bkgId='.$bId)->withErrors('You have already added a review for this event!');
    	}
    	else if($event->isEmpty()){
    		return redirect('view_booking_details?bkgId='.$bId)->withErrors('Cannot add a review as the event has not taken place yet!');
    	}
    	else{
    		return view('add_review',['bId'=>$bId]);
    	}
    }
    function viewReviews(){
    	$id=1;
    	$cnt=0;
        $data=DB::table('bookings')
            ->join('event_details', 'bookings.event_id', '=', 'event_details.id')
            ->join('reviews', 'bookings.id', '=', 'reviews.booking_id')
            ->select('event_details.*','reviews.*')
            ->limit(5)
            ->get();
    	return view('index',['data'=>$data,'id'=>$id,'cnt'=>$cnt]);

    }
  	function viewReviewsAdmin(){
  		$reviews=DB::table('bookings')
            ->join('event_details', 'bookings.event_id', '=', 'event_details.id')
            ->join('reviews', 'bookings.id', '=', 'reviews.booking_id')
            ->select('event_details.*','reviews.*')
            ->get();
    	
  		return view('admin_view_reviews',['reviews'=>$reviews]);
  	}
}
