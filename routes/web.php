<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
