<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

Route::get('/', [MovieController::class, 'index']);
Route::get('/movie/{movie:slug}', [MovieController::class, 'show']);

Route::get('/login', [UserController::class, 'show']);
