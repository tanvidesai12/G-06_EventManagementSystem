<?php

use Illuminate\Support\Facades\Route;

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
  // return redirect("about");
});
// Route::get('/{name}', function ($name) {
    // return view('index',['name'=>$name]);
// });
//Route::get('/about', function () {
//    return view('about');
//});

Route::view("about","about");