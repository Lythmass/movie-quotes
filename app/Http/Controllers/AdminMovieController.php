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

	public function create()
	{
		return view('movies.create');
	}

	public function store(StoreMovieRequest $request)
	{
		$attributes = $request->validated();

		$slug = $this->createSlug($attributes);

		$attributes['title']['en'] = $attributes['title'][0];
		unset($attributes['title'][0]);
		$attributes['title']['ka'] = $attributes['title'][1];
		unset($attributes['title'][1]);

		$attributes['slug'] = $slug;

		Movie::create($attributes);
		return redirect(route('movies-dashboard'));
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

		$slug = $this->createSlug($attributes);
		$attributes['slug'] = $slug;

		$movie->update($attributes);
		return redirect(route('movies-dashboard'));
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		$movie->quote()->delete();
		return back();
	}

	protected function createSlug(array $attributes)
	{
		$slug = strtolower($attributes['title'][0]);
		$countOccurances = Movie::where('title', $slug)->count();
		$slug = strval($slug) . strval($countOccurances + 1);

		return $slug;
	}
}
