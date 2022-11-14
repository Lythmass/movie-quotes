<?php

namespace App\Http\Controllers;

use App\Models\Quote;

class AdminQuoteController extends Controller
{
	public function index()
	{
		return view('users.index', [
			'quotes' => Quote::all(),
		]);
	}

	public function destroy(Quote $quote)
	{
		$quote->delete();
		return back();
	}
}
