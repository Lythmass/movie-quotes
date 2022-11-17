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

		$attributes = [
			'title' => [
				'en' => $attributes['en'],
				'ka' => $attributes['ka'],
			],
		];

		$slug = $this->createSlug($attributes);

		$attributes['slug'] = $slug;

		Movie::create($attributes);
		return redirect(route('movies-dashboard', [app()->getLocale()]));
	}

	public function edit($locale, Movie $movie)
	{
		return view('movies.edit', [
			'movie' => $movie,
		]);
	}

	public function update($locale, Movie $movie, StoreMovieRequest $request)
	{
		$attributes = $request->validated();

		$attributes = [
			'title' => [
				'en' => $attributes['en'],
				'ka' => $attributes['ka'],
			],
		];
		$slug = $this->createSlug($attributes);

		$attributes['slug'] = $slug;

		$movie->update($attributes);
		return redirect(route('movies-dashboard', [app()->getLocale()]));
	}

	public function destroy($locale, Movie $movie)
	{
		$movie->delete();
		$movie->quote()->delete();
		return back();
	}

	protected function createSlug(array $attributes)
	{
		$slug = $attributes['title']['en'];
		$countOccurances = Movie::where('title', 'like', '%' . strtolower($slug) . '%')->count();
		$slug = strtolower(strval($slug) . strval($countOccurances + 1));

		return $slug;
	}
}
