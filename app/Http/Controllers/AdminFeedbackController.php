<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Feedback;
class AdminFeedbackController extends Controller
{
    function viewfeedbacks()
	{
	 $data  = Feedback::all();
	return view('admin_feedback',['feedbacks'=>$data]);
	//return DB::select("select * from feedbacks");
	}
}
