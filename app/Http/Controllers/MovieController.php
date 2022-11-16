<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Facades\App;

class MovieController extends Controller
{
	public function index($locale)
	{
		if (!in_array($locale, ['en', 'ka']))
		{
			abort(404);
		}
		App::setLocale($locale);

		return view('movies.index', [
			'movies' => Movie::inRandomOrder()->first(),
		]);
	}

	public function show($locale, Movie $movie)
	{
		if (!in_array($locale, ['en', 'ka']))
		{
			abort(404);
		}
		App::setLocale($locale);

		return view('movies.show', [
			'movie'  => $movie,
		]);
	}
}
