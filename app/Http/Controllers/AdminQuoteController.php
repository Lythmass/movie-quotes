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
		Quote::create($attributes);
		return redirect(route('quotes-dashboard'));
	}

	public function edit(Quote $quote)
	{
		return view('quotes.edit', [
			'quote'  => $quote,
			'movies' => Movie::all(),
		]);
	}

	public function update(Quote $quote, StoreQuoteRequest $request)
	{
		$attributes = $request->validated();
		$attributes['image'] = request()->file('image')->store('images');
		$quote->update($attributes);
		return redirect(route('quotes-dashboard'));
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();
		return back();
	}
}
