<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function (){
    return view('pages.about');
});

Route::get('/feedback', function (){
    return view('pages.feedback');
});
Route::view('/contact', 'pages.contact');