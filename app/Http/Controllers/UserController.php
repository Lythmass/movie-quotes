<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
	public function create($locale)
	{
		App::setLocale($locale);
		return view('users.create');
	}

	public function store(StoreAuthRequest $request)
	{
		$attributes = $request->validated();
		if (auth()->attempt($attributes))
		{
			session()->regenerate();
			return redirect(route('main', [app()->getLocale()]));
		}

		return abort(403);
	}

	public function destroy()
	{
		auth()->logout();
		return redirect(route('main', [app()->getLocale()]));
	}
}
