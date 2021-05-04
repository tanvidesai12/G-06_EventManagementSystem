<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::view("signup",'signup');
Route::post("signup",[UserController::class,'registerUser']);
Route::view("about","about");
Route::get('/login',function(){
	if(session()->has('user')){
		return redirect('/');
	}
	return view('login');
});
Route::post("login",[UserController::class,'loginUser']);
Route::get("/logout", function (){
	if(session()->has('user')){
		session()->pull('user');
	}
	return redirect('/');
});