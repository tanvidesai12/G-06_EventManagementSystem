<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbackController extends Controller
{
  function add(Request $req)
	{
		$validated = $req->validate([
        'name' => 'required|min:3',
        'email' => 'required|min:6',
		'feedback' =>'required',
    	]);
		$data = new Feedback;
		$data->name=$req->name;
		$data->email=$req->email;
		$data->feedback=$req->feedback;
		$saved=$data->save();
		if(!$saved){
		    echo "<script>alert('your feedback is not sent!');</script>";
		}
		else{
			echo "<script>alert('your feedback is sent successfully!');</script>";
		}
		return view('master');
}
}
