<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminViewBookingController extends Controller
{
    function display(){
        $data = DB::table('bookings')
		->join('users', 'users.id', "=", 'bookings.id')
		->join('event_details', 'event_details.id', "=", 'bookings.id')
		->join('venues', 'venues.id', "=", 'bookings.id')
         ->get(['users.name', 'bookings.no_of_guests', 'bookings.booking_status', 'bookings.total_amount','event_details.event_type', 'event_details.event_date','event_details.event_time','venues.venue_name']);
	
	return view('admin_main', compact('data'));
	
	}
		
}

