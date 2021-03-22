<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ArticleController::class, 'home'])->name("article.home");
Route::post('/article', [ArticleController::class, 'create'])->name("article.create");
Route::get('/article', function () {
    return view('article');
})->name("article");
Route::get('/article/{id}', [ArticleController::class, 'detail'])->name("article.detail");