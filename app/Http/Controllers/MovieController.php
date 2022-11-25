<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function index($locale)
	{
		$movies = Movie::inRandomOrder()->get();
		$sendMovie = [];

		foreach ($movies as $movie)
		{
			if (count($movie->quote))
			{
				$sendMovie = $movie;
				break;
			}
		}

		return view('movies.index', [
			'movies' => $sendMovie,
		]);
	}

	public function show($locale, Movie $movie)
	{
		return view('movies.show', [
			'movie'  => $movie,
		]);
	}
}
