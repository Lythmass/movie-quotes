<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('users.index', [
			'movies' => Movie::all(),
		]);
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		$movie->quote()->delete();
		return back();
	}
}
