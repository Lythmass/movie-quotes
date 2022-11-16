<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
	protected $stopOnFirstFailure = true;

	public function rules()
	{
		return [
			'en' => ['required', 'min:2'],
			'ka' => ['required', 'min:2'],
		];
	}
}
