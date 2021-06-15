<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\addVenueController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\RemoveVenueController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventDetailsController;
use App\Http\Controllers\SelectedDishController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\AdminFeedbackController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\ViewBookingsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\BillDetailsController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminViewBookingController;
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

Route::get('/',[ReviewsController::class,'viewReviews']);
Route::get("index",[ReviewsController::class,'viewReviews']);
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
Route::get('music',[MusicController::class,'showbands']);
Route::view("deco","deco");
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
	Route::get("admin_view_reviews",[ReviewsController::class,'viewReviewsAdmin']);

	Route::post("addVenue",[addVenueController::class,'addvenue']);
	Route::view("addVenue",'addVenue');

	Route::get('removeVenue',[RemoveVenueController::class,'show']);
	Route::post("removeVenue",[RemoveVenueController::class,'remove']);
	Route::get("confirm_bkg",[AdminViewBookingController::class,'confirmBooking']);
	Route::get("reject_bkg",[AdminViewBookingController::class,'rejectBooking']);
});
Route::group(['middleware'=>['custAuth']],function(){
	Route::view("booking_details",'booking_details');
	Route::get("catering",[DishController::class,'showDish']);
	Route::post("catering/packages",[SelectedDishController::class,'addPackage']);
	Route::post("catering/dishes",[SelectedDishController::class,'addDish']);
	Route::post('booking_details',[EventDetailsController::class,'addData']);
	Route::get("venues",[EventDetailsController::class,'show']);
	Route::post('venues',[VenueController::class,'add']);
	Route::get("bill_details",[BillDetailsController::class,'showBillDetails']);
	Route::get("add_review",[ReviewsController::class,'addReview']);
	Route::post("add_review",[ReviewsController::class,'submitReview']);
	Route::get("view_bookings",[ViewBookingsController::class,'showBookings']);
	Route::get("view_booking_details",[ViewBookingsController::class,'showBookingDetails']);
	Route::get("cancel_booking",[ViewBookingsController::class,'cancelBooking']);
	
	Route::get('payment', [PaymentController::class, 'index'])->name('payment');
	Route::post('payment-process', [PaymentController::class, 'paymentProcess']);
	Route::get('payment-success', [PaymentController::class, 'paymentSuccess']);;
	
});
Route::get("admin_feedback",[AdminFeedbackController::class,'viewfeedbacks']);
Route::get("admin_contactus",[AdminContactController::class,'viewcontacts']);
Route::get('forget-password', [ForgotPasswordController::class,'getEmail']);
Route::post('forget-password', [ForgotPasswordController::class,'postEmail']);
Route::get('reset-password/{token}', [ResetPasswordController::class,'getPassword']);
Route::post('/reset-password', [ResetPasswordController::class,'updatePassword']);
Route::get('admin_main',[AdminViewBookingController::class,'display']);
