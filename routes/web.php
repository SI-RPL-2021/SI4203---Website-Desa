<?php

use Illuminate\Support\Facades\Route;
use App\Article;



Route::get('/', function () {
    $articles = Article::all();
    return view('home', compact('articles'));
})->name('home');

Route::get('/home', function () {
    $articles = Article::all();
    return view('home', compact('articles'));
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

Route::get('/aspirasi', function () {
    return view('aspirasi');
});

Route::get('/buataspirasi', 'aspirasiController@create')->name("aspirasi.create");

Route::resource('aspirasi', 'aspirasiController');


Route::get('/pengaduan', function () {
    return view('pengaduan');
})->name("pengaduan.index");

Route::get('/buatpengaduan', 'pengaduanController@create')->name("pengaduan.create");

// Route::get('/pengaduan', 'pengaduanController@create')->name("pengaduan.create");

Route::post('/buatpengaduan', 'pengaduanController@store')->name("pengaduan.store");

Route::resource('pengaduan', 'pengaduanController');


Route::get('/kesehatan', function () {
    return view('kesehatan');
});

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

Route::resource('suratonline', 'SuratonlineController');


Route::resource('suratonline', 'suratonlineController');

Auth::routes();

include("admin_routes.php");
