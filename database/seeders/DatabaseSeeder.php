<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$movie1 = Movie::factory()->create([
			'title' => 'The Pursuit Of Happyness',
		]);
		$movie2 = Movie::factory()->create([
			'title' => 'Spiderman',
		]);
		$movie3 = Movie::factory()->create([
			'title' => 'Batman',
		]);
		$movie4 = Movie::factory()->create([
			'title' => 'Shawshank',
		]);

		Quote::factory()->create([
			'movie_id' => $movie1->id,
			'quote'    => '',
			'image'    => '',
		]);

		Quote::factory()->create([
			'movie_id' => $movie1->id,
			'quote'    => '',
			'image'    => '',
		]);

		Quote::factory()->create([
			'movie_id' => $movie2->id,
			'quote'    => '',
			'image'    => '',
		]);

		Quote::factory()->create([
			'movie_id' => $movie2->id,
			'quote'    => '',
			'image'    => '',
		]);

		Quote::factory()->create([
			'movie_id' => $movie3->id,
			'quote'    => '',
			'image'    => '',
		]);

		Quote::factory()->create([
			'movie_id' => $movie3->id,
			'quote'    => '',
			'image'    => '',
		]);

		Quote::factory()->create([
			'movie_id' => $movie4->id,
			'quote'    => '',
			'image'    => '',
		]);

		Quote::factory()->create([
			'movie_id' => $movie4->id,
			'quote'    => '',
			'image'    => '',
		]);
	}
}
