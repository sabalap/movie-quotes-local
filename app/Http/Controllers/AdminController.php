<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Validation\Rule;

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

	public function movieCreate()
	{
		return view('admin.movies.create');
	}

	public function quoteCreate()
	{
		return view('admin.quotes.create');
	}

	public function movieStore()
	{
		Movie::create([
			'title' => request()->title,
		]);
		return redirect('/admin/movies');
	}

	public function quoteStore()
	{
		Quote::create([
			'quote'   => request()->quote,
			'movie_id'=> request()->movie_id,
			'image'   => request()->file('image')->store('images'),
		]);
		return redirect('/admin/movies');
	}

	protected function validateMovie(?Movie $movie = null): array
	{
		$movie ??= new Movie();

		return request()->validate([
			'title' => 'required',
			'id'    => ['required', Rule::unique('movies', 'id')->ignore($movie)],
		]);
	}
}
