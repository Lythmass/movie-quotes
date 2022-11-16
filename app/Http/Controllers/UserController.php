<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
	public function create($locale)
	{
		$this->checkLocale($locale);
		App::setLocale($locale);
		return view('users.create');
	}

	public function store($locale, StoreAuthRequest $request)
	{
		$this->checkLocale($locale);
		$attributes = $request->validated();
		if (auth()->attempt($attributes))
		{
			session()->regenerate();
			return redirect(route('main', [app()->getLocale()]));
		}

		return abort(403);
	}

	public function destroy($locale)
	{
		$this->checkLocale($locale);

		auth()->logout();
		return redirect(route('main', [app()->getLocale()]));
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
