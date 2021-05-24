<?php

namespace App\Http\Controllers;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusicController extends Controller
{
    function showbands()
	{
	 $data  = Music::all();
	return view('music',['musics'=>$data]);
	//return DB::select("select * from contacts");
	}
}
