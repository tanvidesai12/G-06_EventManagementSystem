<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venue;
class VenueController extends Controller
{
    function show()
	{
		$data=venue::all();
		return view('venues',['venues'=>$data]);
		
	}
}
