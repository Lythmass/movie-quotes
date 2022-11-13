<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use App\Models\Movie;
use App\Models\Quote;

class UserController extends Controller
{
	public function index()
	{
		return view('users.index', [
			'movies' => Movie::all(),
			'quotes' => Quote::all(),
		]);
	}

	public function create()
	{
		return view('users.create');
	}

	public function store(StoreAuthRequest $request)
	{
		$attributes = $request->validated();
		if (auth()->attempt($attributes))
		{
			session()->regenerate();
			return redirect(route('main'));
		}

		return abort(403);
	}

	public function destroy()
	{
		auth()->logout();
		return redirect(route('main'));
	}
}
