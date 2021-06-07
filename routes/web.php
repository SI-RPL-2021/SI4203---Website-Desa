<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/keuangan', function () {
    return view('keuangan');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/kesehatan', function () {
    return view('kesehatan');
});

Route::get('/aspirasi', function () {
    return view('aspirasi');
});

Route::get('/buataspirasi', 'aspirasiController@create')->nama("aspirasi.create");

Route::resource('aspirasi', 'aspirasiController');


Route::get('/pengaduan', function () {
    return view('pengaduan');
});

Route::get('/buatpengaduan', 'pengaduanController@create')->name("pengaduan.create");

Route::resource('pengaduan', 'pengaduanController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/article', 'ArticleController@home')->name("article.home");
Route::post('/article', 'ArticleController@create')->name("article.create");
Route::get('/article', function () {
    return view('article');
})->name("article");

Route::get('/lembaga', 'lembagaController@index')->name('lembaga');