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
Route::get('/profile', function () {
    return view('profile');
=======
Route::get('/kesehatan', function () {
    return view('kesehatan');
>>>>>>> Hisyam
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/article', 'ArticleController@home')->name("article.home");
Route::post('/article', 'ArticleController@create')->name("article.create");
Route::get('/article', function () {
    return view('article');
})->name("article");
<<<<<<< HEAD

Route::get('/lembaga', 'lembagaController@index')->name('lembaga');
=======
<<<<<<< HEAD
=======
Route::get('/article/{id}', 'ArticleController@detail')->name("article.detail");

Route::resource('kesehatan', 'kesehatanController');
>>>>>>> Hisyam
>>>>>>> c4f133709455af2da2feb41aafc2738fb9931921
