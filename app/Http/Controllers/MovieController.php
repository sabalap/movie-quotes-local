<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

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

	public function show(Movie $movie)
	{
		$quotes = Quote::all()->where('movie_id', $movie->id);
		return view('movies.show', [
			'movie'  => $movie,
			'quotes' => $quotes,
		]);
	}
}
