<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;

Route::get('/', [Movie::class, 'index']);
