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
// Route::get('/', 'ArticleController@home')->name("article.home");
Route::post('/article', 'ArticleController@create')->name("article.create");
Route::get('/article', function () {
    return view('article');
})->name("article");
Route::get('/article/{id}', 'ArticleController@detail')->name("article.detail");
