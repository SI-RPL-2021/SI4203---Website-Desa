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

<<<<<<< HEAD
=======

>>>>>>> ee0747385ec5d00a9ddc75bc6a3780d0fbdb2ce1
Route::get('/profile', function () {
    return view('profile');
});

<<<<<<< HEAD
Route::get('/aboutUs', function () {
    return view('aboutUs');
=======
Route::get('/kesehatan', function () {
    return view('kesehatan');

>>>>>>> ee0747385ec5d00a9ddc75bc6a3780d0fbdb2ce1
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/article', 'ArticleController@home')->name("article.home");
Route::post('/article', 'ArticleController@create')->name("article.create");
Route::get('/article', function () {
    return view('article');
})->name("article");

<<<<<<< HEAD
Route::get('/article/{id}', 'ArticleController@detail')->name("article.detail");

Route::resource('kesehatan', 'kesehatanController');
=======

Route::get('/lembaga', 'lembagaController@index')->name('lembaga');

Route::get('/article/{id}', 'ArticleController@detail')->name("article.detail");

Route::resource('kesehatan', 'kesehatanController');
>>>>>>> ee0747385ec5d00a9ddc75bc6a3780d0fbdb2ce1
