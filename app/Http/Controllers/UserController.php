<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;

class UserController extends Controller
{
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
}
