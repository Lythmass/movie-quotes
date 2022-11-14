<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

Route::get('/', [MovieController::class, 'index'])->name('main');
Route::get('movie/{movie:slug}', [MovieController::class, 'show'])->name('movie');
Route::delete('dashboard/movies/{movie}', [MovieController::class, 'destroy'])->name('delete-movie')->middleware('auth');

Route::get('dashboard/movies', [UserController::class, 'index'])->name('movies-dashboard')->middleware('auth');
Route::get('dashboard/quotes', [UserController::class, 'index'])->name('quotes-dashboard')->middleware('auth');
Route::get('login', [UserController::class, 'create'])->name('login-page')->middleware('guest');
Route::post('login', [UserController::class, 'store'])->name('login')->middleware('guest');
Route::post('logout', [UserController::class, 'destroy'])->name('logout')->middleware('auth');
