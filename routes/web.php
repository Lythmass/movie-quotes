<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', [MovieController::class, 'index'])->name('main');
Route::get('movie/{movie:slug}', [MovieController::class, 'show'])->name('movie');

Route::get('dashboard', [UserController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('login', [UserController::class, 'create'])->name('login-page')->middleware('guest');
Route::post('login', [UserController::class, 'store'])->name('login')->middleware('guest');
Route::post('logout', [UserController::class, 'destroy'])->name('logout')->middleware('auth');