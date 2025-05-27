<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); //resources --> views
});
//about page route example
Route::get('/about', function () {
    return view('about');
    //return 'about page';
});
Route::get('/contact', function () {
    return view('contact');
   
});