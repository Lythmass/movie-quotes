<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
	public function rules()
	{
		$rules = [
			'en'       => ['required', 'min:2'],
			'ka'       => ['required', 'min:2'],
			'movie_id' => ['required'],
		];

		if ($this->method() == 'PATCH')
		{
			$rules['image'] = ['image'];
		}
		else
		{
			$rules['image'] = ['required', 'image'];
		}

		return $rules;
	}
}
