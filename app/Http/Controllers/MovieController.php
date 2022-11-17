<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function index($locale)
	{
		return view('movies.index', [
			'movies' => Movie::inRandomOrder()->first(),
		]);
	}

	public function show($locale, Movie $movie)
	{
		return view('movies.show', [
			'movie'  => $movie,
		]);
	}
}
