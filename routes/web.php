<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('home', function () {
//     return view('pages.home');
// });

// Route::get('about', function () {
//     return view('pages.about');
// });
// Route::get('contact', function () {
//     return view('pages.contact');
// });
// Route::get('gallery', function () {
//     return view('pages.gallery');
// });
// Route::get('service', function () {
//     return view('pages.service');
// });

// Route::get('/{name?}/{color?}', function ($name='home',$color='blue') {
//     // return view('pages/'.$name,["fname" => "Kirishan" , "lname" => "Thavagnanaranjan"]);
//     return view('pages/'.$name)->with("fname","Kirishan") ->with("lname","Ranjan") ->with("color",$color);
// });



// Route::post('save', function (Request $request) {
//     $data = $request->all();
//     return view('pages.contact')->with('mydata',$data);

// });
// Route::get('/{name?}', function ($name = 'home') {
//     return view('pages/' . $name);
// });



Route::get('/home',[PageController::class,'home']);
Route::get('/about',[PageController::class,'about']);
Route::get( '/contact',[PageController::class,'contact']);
Route::get('/gallery',[PageController::class,'gallery']);
Route::get('/service',[PageController::class,'service']);
Route::get('/',[PageController::class,'home']);

Route::resource('my',MyController::class);
Route::resource('students',StudentController::class);