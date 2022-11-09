<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		$movie = Movie::inRandomOrder()->first();
		$randomQuote = $movie->quotes->random(1);
		return view('movies.index', [
			'movies'  => $movie,
			'quotes'  => $randomQuote,
		]);
	}
}
