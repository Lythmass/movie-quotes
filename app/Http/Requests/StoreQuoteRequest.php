<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
	public function rules()
	{
		return [
			'text'     => ['required', 'min:2'],
			'movie_id' => ['required'],
			'image'    => ['required'],
		];
	}
}
