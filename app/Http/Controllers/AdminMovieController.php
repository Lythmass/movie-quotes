<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('users.index', [
			'movies' => Movie::all(),
		]);
	}

	public function edit(Movie $movie)
	{
		return view('movies.edit', [
			'movie' => $movie,
		]);
	}

	public function update(Movie $movie, StoreMovieRequest $request)
	{
		$attributes = $request->validated();
		$movie->update($attributes);
		return redirect(route('movies-dashboard'));
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		$movie->quote()->delete();
		return back();
	}
}
