<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventDetailsController;
use App\Http\Controllers\SelectedDishController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::view("contact_us",'contact_us');
Route::post("contact_us",[ContactController::class,'save']);
Route::view("feeback",'feedback');
Route::post("send",[FeedbackController::class,'add']);
Route::view("signup",'signup');
Route::post("signup",[UserController::class,'registerUser']);
Route::view("about","about");
Route::view("wedding_event",'wedding_event');
Route::view("corporate_event",'corporate_event');
Route::view("birthday_event",'birthday_event');
Route::view("index",'index');
Route::get('/login',function(){
	if(session()->has('user')){
		return redirect('/');
	}
	return view('login');
});
Route::post("login",[UserController::class,'loginUser']);
Route::get("/logout", function (){
	if(session()->has('user')){
		session()->flush();
	}
	return redirect('/');
});

Route::group(['middleware'=>['adminAuth']],function(){
	Route::view("admin_main",'admin_main');
});
Route::group(['middleware'=>['custAuth']],function(){
	Route::view("booking_details",'booking_details');
	Route::get("catering",[DishController::class,'showDish']);
	Route::post("catering/packages",[SelectedDishController::class,'addPackage']);
	Route::post("catering/dishes",[SelectedDishController::class,'addDish']);
	Route::post('booking_details',[EventDetailsController::class,'addData']);
	Route::get("venues",[EventDetailsController::class,'show']);
	Route::post('venues',[VenueController::class,'add']);
	Route::view('electronic_equipment','electronic_equipment');
});

