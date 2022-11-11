<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminController extends Controller
{
	public function index()
	{
		$movies = Movie::all();
		foreach ($movies as $movie)
		{
			$quotes = $movie->quotes;
		}
		return view('admin.movies.index', [
			'movies'  => $movies,
			'quotes'  => $quotes,
		]);
	}

	// public function show()
	// {
	// 	return view('admin.movies.show', [
	// 		'movies'  => $movies,
	// 		'quotes'  => $quotes,
	// 	]);
	// }

	// public function destroy(Movie $movie)
	// {
	// 	$movie->delete();
	// 	return redirect('movies');
	// }
}
