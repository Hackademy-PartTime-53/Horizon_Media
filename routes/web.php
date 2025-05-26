<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;


Route::get('/', [HomeController::class, 'index'])->name('home');

// le rotte che gestiscono gli articoli
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');
Route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('article.byUser');
// Route::resource('article', ArticleController::class)->middleware(['auth'])->except(['index']);
// le rotte che gestiscono gli articoli
