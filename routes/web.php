<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/contact', 'PageController@contact');

// Route::get('/keuangan', 'PageController@keuangan');

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/aboutUs', 'PageController@aboutUs');

Route::get('/kesehatan', function () {
    return view('kesehatan');
});

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/article', 'ArticleController@home')->name("article.home");


Route::resource('kesehatan', 'kesehatanController');

Route::get('/lembaga', 'PageController@lembaga')->name('lembaga');

Route::get('/datadesa', 'PageController@datadesa')->name('datadesa');

Route::get('/article/{id}', 'ArticleController@detail')->name("article.detail");

Route::resource('kesehatan', 'kesehatanController');

Route::resource('suratonline', 'SuratonlineController');

Auth::routes();

include("admin_routes.php");

// Pengaduan
Route::get('/buatpengaduan', 'pengaduanController@create')->name("pengaduan.create");
Route::post('/buatpengaduan', 'pengaduanController@store')->name("pengaduan.store");
Route::resource('pengaduan', 'pengaduanController');

//  Aspirasi
Route::get('/buataspirasi', 'aspirasiController@create')->name("aspirasi.create");
Route::resource('aspirasi', 'aspirasiController');
