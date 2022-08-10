<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/articles', [ArticleController::class, 'articleIndex'])->name('articlesAll');

Route::get('/articles/{slug}', [ArticleController::class, 'articleOne'])->name('articleOne');

Route::get('/#about', [HomeController::class, 'index'])->name('about');
