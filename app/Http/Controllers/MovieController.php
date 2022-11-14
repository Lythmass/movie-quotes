<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		return view('movies.index', [
			'movies' => Movie::inRandomOrder()->first(),
		]);
	}

	public function show(Movie $movie)
	{
		return view('movies.show', [
			'movie' => $movie,
		]);
	}
}
