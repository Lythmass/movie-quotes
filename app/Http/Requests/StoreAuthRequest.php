<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthRequest extends FormRequest
{
	protected $stopOnFirstFailure = true;

	public function rules()
	{
		return [
			'username' => ['required', 'min:2'],
			'password' => ['required', 'min:8'],
		];
	}
}
