<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AuthController@showFormLogin')->name('login');
Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', 'HomeController@index')->name('home');
    Route::get('logout', 'AuthController@logout')->name('logout');
});

// Route::get('/', [ArticleController::class, 'home'])->name("article.home");
// Route::post('/article', [ArticleController::class, 'create'])->name("article.create");
// Route::get('/article', function () {
//     return view('article');
// })->name("article");
// Route::get('/article/{id}', [ArticleController::class, 'detail'])->name("article.detail");

Route::get('/contact', function () {
    return view('contact');
});
