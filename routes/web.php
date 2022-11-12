<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

Route::get('/', [MovieController::class, 'index'])->name('main');
Route::get('movie/{movie:slug}', [MovieController::class, 'show'])->name('movie');

Route::get('login', [UserController::class, 'create'])->name('login-page')->middleware('guest');
Route::post('login', [UserController::class, 'store'])->name('login')->middleware('guest');
