<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;



Route::get('/', [HomeController::class, 'index'])->name('home');

// le rotte che gestiscono gli articoli
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/index',[ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');
Route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('article.byUser');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::post('/careers/submit', [HomeController::class, 'careerssubmit'])->name('careers.submit');
// ROTTE ADMIN
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::patch('/admin/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');
    Route::patch('/admin/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');
    Route::patch('/admin/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');
});
// ROTTE REVISOR
Route::middleware('revisor')->group(function(){
Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
Route::post('/revisor/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
Route::post('/revisor{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
Route::post('/revisor{article}/undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
});
// ROTTE WRITER
Route::middleware('writer')->group(function(){
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
});