<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;

class QuoteFactory extends Factory
{
	public function definition()
	{
		return [
			'text'     => $this->faker->sentence(),
			'movie_id' => Movie::factory(),
			'image'    => $this->faker->imageUrl(100, 100),
		];
	}
}
