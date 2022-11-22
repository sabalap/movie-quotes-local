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
			'title' => [
				'en' => 'The Pursuit of Happyness',
				'ka' => 'ბედნიერების დევნაში',
			],
		]);
		$movie2 = Movie::factory()->create([
			'title' => [
				'en' => 'Spiderman',
				'ka' => 'სპაიდერმენი',
			],
		]);
		$movie3 = Movie::factory()->create([
			'title' => [
				'en' => 'Batman',
				'ka' => 'ბეტმენი',
			],
		]);
		$movie4 = Movie::factory()->create([
			'title' => [
				'en' => 'Shawshank',
				'ka' => 'შოუშენკი',
			],
		]);

		Quote::factory()->create([
			'movie_id'    => $movie1->id,
			'quote'       => [
				'en' => "It's okay to fail; it's not okay to quit",
				'ka' => 'კარგია წარუმატებლობა, არ არის კარგი დანებდე',
			],
			'image'       => 'storage' . '/images/the-pursuit-of-happyness1.jpg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie1->id,
			'quote'    => [
				'en' => "Don't just talk that talk, walk it and go forward.",
				'ka' => 'მხოლოდ ასე არ  ილაპარაკო, იარე და წინ წადი',
			],
			'image'    => 'storage' . '/images/the-pursuit-of-happyness2.jpg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie2->id,
			'quote'    => [
				'en' => "I've just got to do this on my own.",
				'ka' => 'მე უბრალოდ უნდა გავაკეთო ჩემით',
			],
			'image'    => 'storage' . '/images/spiderman1.jpg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie2->id,
			'quote'    => [
				'en' => 'Mary Jane Watson: Who are you?',
				'ka' => 'მერი ჯეინ ვოტსონ: ვინ ხარ?',
			],
			'image'    => 'storage' . '/images/spiderman2.jpeg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie3->id,
			'quote'    => [
				'en' => 'Your anger gives you great power.',
				'ka' => 'შენი ბრაზი დიდ ძალას გაძლევს',
			],
			'image'    => 'storage' . '/images/batman1.jpeg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie3->id,
			'quote'    => [
				'en' => 'The night is darkest just before the dawn.',
				'ka' => 'ღამე ყველაზე ბნელია გათენებამდე.',
			],
			'image'    => 'storage' . '/images/batman2.jpg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie4->id,
			'quote'    => [
				'en' => "There's not a day goes by I don't feel regret.",
				'ka' => 'არ გავა დღე, არ ვიგრძნო სინანული',
			],
			'image'    => 'storage' . '/images/shawshank1.jpeg',
		]);

		Quote::factory()->create([
			'movie_id' => $movie4->id,
			'quote'    => [
				'en' => 'The world went and got itself in a big damn hurry.',
				'ka' => 'სამყარო დიდ აურზაურშია',
			],
			'image'    => 'storage' . '/images/shawshank2.jpg',
		]);
	}
}
