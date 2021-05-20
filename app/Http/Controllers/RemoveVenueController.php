<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venue;
class RemoveVenueController extends Controller
{
    function show()
	{
		 $data=venue::all();
		 return view('removeVenue',['venues'=>$data]);
		
	}
	function remove(Request $id)
	{
		 $data=venue::find($id);
		 $deleted=$data->each->delete();
		 if(!$deleted){
		     echo "<script>alert('Could not delete venue!');</script>";
		 }
		 else{
			 echo "<script>alert('Venue deleted successfully!!!');</script>";
		 }
		 $data2=venue::all();
		 return view('removeVenue',['venues'=>$data2]);
	}
}
