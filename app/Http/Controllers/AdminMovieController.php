<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Support\Facades\App;

class AdminMovieController extends Controller
{
	public function index($locale)
	{
		$this->checkLocale($locale);
		return view('users.index', [
			'movies' => Movie::all(),
		]);
	}

	public function create($locale)
	{
		$this->checkLocale($locale);

		return view('movies.create');
	}

	public function store($locale, StoreMovieRequest $request)
	{
		$this->checkLocale($locale);
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
		$this->checkLocale($locale);

		return view('movies.edit', [
			'movie' => $movie,
		]);
	}

	public function update($locale, Movie $movie, StoreMovieRequest $request)
	{
		$this->checkLocale($locale);
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

	public function destroy(Movie $movie)
	{
		$movie->delete();
		$movie->quote()->delete();
		return back();
	}

	protected function createSlug(array $attributes)
	{
		$slug = $attributes['title']['en'];
		$countOccurances = Movie::where('title', 'like', '%' . $slug . '%')->count();
		$slug = strtolower(strval($slug) . strval($countOccurances + 1));

		return $slug;
	}

	protected function checkLocale($locale)
	{
		if (!in_array($locale, ['en', 'ka']))
		{
			abort(404);
		}
		return App::setLocale($locale);
	}
}
