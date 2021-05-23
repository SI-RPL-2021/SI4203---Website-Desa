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


Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/kesehatan', function () {
    return view('kesehatan');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/article', 'ArticleController@home')->name("article.home");
Route::post('/article', 'ArticleController@create')->name("article.create");
Route::get('/article', function () {
    return view('article');
})->name("article");


Route::get('/article/{id}', 'ArticleController@detail')->name("article.detail");

Route::resource('kesehatan', 'kesehatanController');

Route::get('/lembaga', 'lembagaController@index')->name('lembaga');

Route::get('/article/{id}', 'ArticleController@detail')->name("article.detail");

Route::resource('kesehatan', 'kesehatanController');
