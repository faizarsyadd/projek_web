<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saran', function (){
    return view('saran');
});

Route::view('/contact', 'pages.contact');