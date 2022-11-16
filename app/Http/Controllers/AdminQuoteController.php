<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Support\Facades\App;

class AdminQuoteController extends Controller
{
	public function index($locale)
	{
		$this->checkLocale($locale);
		return view('users.index', [
			'quotes' => Quote::all(),
		]);
	}

	public function create($locale)
	{
		$this->checkLocale($locale);
		return view('quotes.create', [
			'movies' => Movie::all(),
		]);
	}

	public function store(StoreQuoteRequest $request)
	{
		$attributes = $request->validated();
		$attributes['image'] = request()->file('image')->store('images');

		$attributes['text']['en'] = $attributes['text'][0];
		unset($attributes['text'][0]);
		$attributes['text']['ka'] = $attributes['text'][1];
		unset($attributes['text'][1]);

		Quote::create($attributes);
		return redirect(route('quotes-dashboard', [app()->getLocale()]));
	}

	public function edit($locale, Quote $quote)
	{
		$this->checkLocale($locale);
		return view('quotes.edit', [
			'quote'  => $quote,
			'movies' => Movie::all(),
		]);
	}

	public function update(Quote $quote, StoreQuoteRequest $request)
	{
		$attributes = $request->validated();
		$attributes['image'] = request()->file('image')->store('images');

		$attributes['text']['en'] = $attributes['text'][0];
		unset($attributes['text'][0]);
		$attributes['text']['ka'] = $attributes['text'][1];
		unset($attributes['text'][1]);

		$quote->update($attributes);
		return redirect(route('quotes-dashboard', [app()->getLocale()]));
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();
		return back();
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
