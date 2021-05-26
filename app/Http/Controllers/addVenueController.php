<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venue;
class addVenueController extends Controller
{
	function addvenue(Request $req)
	{
		$req->validate([
		'venue_name'=>'required|min:5',
		'address'=>'required|min:8',
		'venue_image'=>'required|image|mimes:jpeg,png,jpg'
		]);
		//return $req->input();
		
		$venue=new venue;
		$venue->venue_name=$req->venue_name;
		$venue->address=$req->address;
		$venue->price=$req->price;
		$venue->lat=$req->lat;
		$venue->lng=$req->lng;
		$venue->capacity=$req->capacity;
		//$venue->venue_image=$req->venue_image;
		$file=$req->file('venue_image');
		$extension =$file->getClientOriginalExtension();
		$filename= time(). '.' . $extension;
		$file->move('images',$filename);
		$venue->venue_image=$filename;
		$saved=$venue->save();
		if(!$saved){
		    echo "<script>alert('New venue details are not saved!');</script>";
		}
		else{
			echo "<script>alert('New venue details are saved successfully!!');</script>";
		}
		// $img=$req->file('venue_image');
		// $new_name=$img . '.' . $img->getClientOriginalExtension();
		// $img->move(public_path("images"),$new_name);
		return view('addVenue');
	}

}
