<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class AdminQuoteController extends Controller
{
	public function index()
	{
		return view('users.index', [
			'quotes' => Quote::all(),
		]);
	}

	public function create()
	{
		return view('quotes.create', [
			'movies' => Movie::all(),
		]);
	}

	public function store(StoreQuoteRequest $request)
	{
		$attributes = $request->validated();
		$attributes['image'] = request()->file('image')->store('images');

		$attributes['text'] = [
			'en' => $attributes['en'],
			'ka' => $attributes['ka'],
		];

		Quote::create($attributes);
		return redirect(route('quotes-dashboard', [app()->getLocale()]));
	}

	public function edit($locale, Quote $quote)
	{
		return view('quotes.edit', [
			'quote'  => $quote,
			'movies' => Movie::all(),
		]);
	}

	public function update($locale, Quote $quote, StoreQuoteRequest $request)
	{
		$attributes = $request->validated();

		if (array_key_exists('image', $attributes))
		{
			$attributes['image'] = request()->file('image')->store('images');
		}

		$attributes['text'] = [
			'en' => $attributes['en'],
			'ka' => $attributes['ka'],
		];

		$quote->update($attributes);
		return redirect(route('quotes-dashboard', [app()->getLocale()]));
	}

	public function destroy($locale, Quote $quote)
	{
		$quote->delete();
		return back();
	}
}
