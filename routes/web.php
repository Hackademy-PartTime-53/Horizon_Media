<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('auth', RegisterController::class)->middleware(['auth']);
Route::resource('auth', LoginController::class)->middleware(['auth']);
Route::resource('auth', LogoutController::class)->middleware(['auth']);
