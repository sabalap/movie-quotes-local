<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class MovieController extends Controller
{
	public function index()
	{
		$movies = Movie::inRandomOrder()->limit(1)->get();
		foreach ($movies as $movie)
		{
			$quotes = Quote::all()->where('movie_id', $movie->id)->random(1);
		}
		return view('movies.index', [
			'movies'  => $movies,
			'quotes'  => $quotes,
		]);
	}
}
