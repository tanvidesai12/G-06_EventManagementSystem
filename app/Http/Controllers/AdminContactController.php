<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;


class AdminContactController extends Controller
{
    function viewcontacts()
	{
	 $data  = Contact::all();
	return view('admin_contactus',['contacts'=>$data]);
	//return DB::select("select * from contacts");
	}
}
