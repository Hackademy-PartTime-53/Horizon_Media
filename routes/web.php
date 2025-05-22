<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('auth', RegisterController::class)->middleware(['auth']);
Route::resource('auth', LoginController::class)->middleware(['auth']);
Route::resource('auth', LogoutController::class)->middleware(['auth']);
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show{article}', [ArticleController::class, 'show'])->name('article.show');