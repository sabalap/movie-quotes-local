<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		return view('movies.index', [
			'movies' => Movie::all(),
		]);
	}
}
