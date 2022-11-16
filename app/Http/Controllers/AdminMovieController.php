<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Support\Facades\App;

class AdminMovieController extends Controller
{
	public function index($locale)
	{
		if (!in_array($locale, ['en', 'ka']))
		{
			abort(404);
		}
		App::setLocale($locale);

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
		return redirect(route('movies-dashboard', [app()->getLocale()]));
	}

	public function edit($locale, Movie $movie)
	{
		if (!in_array($locale, ['en', 'ka']))
		{
			abort(404);
		}
		App::setLocale($locale);

		return view('movies.edit', [
			'movie' => $movie,
		]);
	}

	public function update(Movie $movie, StoreMovieRequest $request)
	{
		$attributes = $request->validated();

		$slug = $this->createSlug($attributes);

		$attributes['title']['en'] = $attributes['title'][0];
		unset($attributes['title'][0]);
		$attributes['title']['ka'] = $attributes['title'][1];
		unset($attributes['title'][1]);

		$attributes['slug'] = $slug;

		$movie->update($attributes);
		return redirect(route('movies-dashboard', [app()->getLocale()]));
	}

	public function destroy(Movie $movie)
	{
		$movie->delete();
		$movie->quote()->delete();
		return back();
	}

	protected function createSlug(array $attributes)
	{
		$slug = $attributes['title'][0];
		$countOccurances = Movie::where('title', 'like', '%' . $slug . '%')->count();
		$slug = strtolower(strval($slug) . strval($countOccurances + 1));

		return $slug;
	}
}
