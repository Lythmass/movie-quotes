<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

Route::get('/{locale}', [MovieController::class, 'index'])->name('main')->middleware('checkLocale');
Route::get('{locale}/movie/{movie:slug}', [MovieController::class, 'show'])->name('movie')->middleware('checkLocale');

Route::get('{locale}/login', [UserController::class, 'create'])->name('login-page')->middleware('guest', 'checkLocale');
Route::post('{locale}/login', [UserController::class, 'store'])->name('login')->middleware('guest', 'checkLocale');
Route::post('{locale}/logout', [UserController::class, 'destroy'])->name('logout')->middleware('auth', 'checkLocale');

Route::get('{locale}/dashboard/movies', [AdminMovieController::class, 'index'])->name('movies-dashboard')->middleware('auth', 'checkLocale');
Route::get('{locale}/dashboard/movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('movies-edit')->middleware('auth', 'checkLocale');
Route::get('{locale}/dashboard/movies/create', [AdminMovieController::class, 'create'])->name('movies-create')->middleware('auth', 'checkLocale');
Route::post('{locale}/dashboard/movies/create', [AdminMovieController::class, 'store'])->name('movies-store')->middleware('auth', 'checkLocale');
Route::patch('{locale}/dashboard/movies/{movie}', [AdminMovieController::class, 'update'])->name('movies-update')->middleware('auth', 'checkLocale');
Route::delete('{locale}/dashboard/movies/{movie}', [AdminMovieController::class, 'destroy'])->name('movies-delete')->middleware('auth', 'checkLocale');

Route::get('{locale}/dashboard/quotes', [AdminQuoteController::class, 'index'])->name('quotes-dashboard')->middleware('auth', 'checkLocale');
Route::get('{locale}/dashboard/quotes/create', [AdminQuoteController::class, 'create'])->name('quotes-create')->middleware('auth', 'checkLocale');
Route::get('{locale}/dashboard/quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('quotes-edit')->middleware('auth', 'checkLocale');
Route::post('{locale}/dashboard/quotes/create', [AdminQuoteController::class, 'store'])->name('quotes-store')->middleware('auth', 'checkLocale');
Route::patch('{locale}/dashboard/quotes/{quote}', [AdminQuoteController::class, 'update'])->name('quotes-update')->middleware('auth', 'checkLocale');
Route::delete('{locale}/dashboard/quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('quotes-delete')->middleware('auth', 'checkLocale');
