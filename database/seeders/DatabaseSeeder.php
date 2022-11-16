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
			'quote'    => "It's okay to fail; it's not okay to quit",
			'image'    => '/images/the-pursuit-of-happyness1.jpg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie1->id,
			'quote'    => "Don't just talk that talk, walk it and go forward.",
			'image'    => '/images/the-pursuit-of-happyness2.jpg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie2->id,
			'quote'    => "I've just got to do this on my own.",
			'image'    => '/images/spiderman1.jpg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie2->id,
			'quote'    => 'Mary Jane Watson: Who are you?',
			'image'    => '/images/spiderman2.jpeg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie3->id,
			'quote'    => 'Your anger gives you great power.',
			'image'    => '/images/batman1.jpeg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie3->id,
			'quote'    => 'The night is darkest just before the dawn.',
			'image'    => '/images/batman2.jpg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie4->id,
			'quote'    => "There's not a day goes by I don't feel regret.",
			'image'    => '/images/shawshank1.jpeg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie4->id,
			'quote'    => 'The world went and got itself in a big damn hurry.',
			'image'    => '/images/shawshank2.jpg',
		]);
	}
}
