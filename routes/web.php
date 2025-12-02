<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/{name?}/{color?}', function ($name='home',$color='blue') {
    // return view('pages/'.$name,["fname" => "Kirishan" , "lname" => "Thavagnanaranjan"]);
    return view('pages/'.$name)->with("fname","Kirishan") ->with("lname","Ranjan") ->with("color",$color);
});
