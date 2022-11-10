<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		$movie = Movie::factory()->create();

		Quote::factory(5)->create([
			'movie_id' => $movie->id,
		]);

		Quote::factory(15)->create();
	}
}
