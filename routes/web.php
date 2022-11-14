<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

Route::get('/', [MovieController::class, 'index'])->name('main');
Route::get('movie/{movie:slug}', [MovieController::class, 'show'])->name('movie');

Route::get('login', [UserController::class, 'create'])->name('login-page')->middleware('guest');
Route::post('login', [UserController::class, 'store'])->name('login')->middleware('guest');
Route::post('logout', [UserController::class, 'destroy'])->name('logout')->middleware('auth');

Route::get('dashboard/movies', [AdminMovieController::class, 'index'])->name('movies-dashboard')->middleware('auth');
Route::get('dashboard/movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('movies-edit')->middleware('auth');
Route::patch('dashboard/movies/{movie}', [AdminMovieController::class, 'update'])->name('movies-update')->middleware('auth');
Route::delete('dashboard/movies/{movie}', [AdminMovieController::class, 'destroy'])->name('movies-delete')->middleware('auth');

Route::get('dashboard/quotes', [AdminQuoteController::class, 'index'])->name('quotes-dashboard')->middleware('auth');
