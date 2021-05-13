<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    function save(Request $req)
	{
		$validated = $req->validate([
        'name' => 'required|min:3',
        'email' => 'required|min:6',
        'ph_num1'=>'required|size:10',
		'ph_num2'=>'required|size:10',
		'address'=>'required|min:10',
        'event'=>'required',
		'discription'=>'required',
    	]);
		$data = new Contact;
		$data->name=$req->name;
		$data->email=$req->email;
		$data->ph_num1=$req->ph_num1;
		$data->ph_num2=$req->ph_num2;
		$data->address=$req->address;
		$data->event=$req->event;
		$data->discription=$req->discription;
		$saved=$data->save();
		if(!$saved){
		    echo "<script>alert('your query is not sent!');</script>";
		}
		else{
			echo "<script>alert('your query is sent successfully!');</script>";
		}
		return view('contact_us');
}
}