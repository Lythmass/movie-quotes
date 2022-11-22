<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

Route::prefix('{locale}')->group(function () {
	Route::get('/', [MovieController::class, 'index'])->name('main');
	Route::get('movie/{movie:slug}', [MovieController::class, 'show'])->name('movie');

	Route::get('login', [UserController::class, 'create'])->name('login-page')->middleware('guest');
	Route::post('login', [UserController::class, 'store'])->name('login')->middleware('guest');
	Route::post('logout', [UserController::class, 'destroy'])->name('logout')->middleware('auth');

	Route::prefix('dashboard')->group(function () {
		Route::prefix('movies')->group(function () {
			Route::middleware(['auth'])->group(function () {
				Route::get('', [AdminMovieController::class, 'index'])->name('movies-dashboard');
				Route::get('{movie}/edit', [AdminMovieController::class, 'edit'])->name('movies-edit');
				Route::view('create', 'movies.create')->name('movies-create');
				Route::post('create', [AdminMovieController::class, 'store'])->name('movies-store');
				Route::patch('{movie}', [AdminMovieController::class, 'update'])->name('movies-update');
				Route::delete('{movie}', [AdminMovieController::class, 'destroy'])->name('movies-delete');
			});
		});
		Route::prefix('quotes')->group(function () {
			Route::middleware(['auth'])->group(function () {
				Route::get('', [AdminQuoteController::class, 'index'])->name('quotes-dashboard');
				Route::get('create', [AdminQuoteController::class, 'create'])->name('quotes-create');
				Route::get('{quote}/edit', [AdminQuoteController::class, 'edit'])->name('quotes-edit');
				Route::post('create', [AdminQuoteController::class, 'store'])->name('quotes-store');
				Route::patch('{quote}', [AdminQuoteController::class, 'update'])->name('quotes-update');
				Route::delete('{quote}', [AdminQuoteController::class, 'destroy'])->name('quotes-delete');
			});
		});
	});
});

Route::get('/', function () {
	return redirect(route('main', ['en']));
});
