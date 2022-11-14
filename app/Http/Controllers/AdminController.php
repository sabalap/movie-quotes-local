<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

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

	public function quoteShow(Quote $quote)
	{
		$movie_id = request()->segments()[2];
		$movie = Movie::all()->where('id', $movie_id);
		$quotes = Quote::all();
		return view('admin.quotes.show', [
			'movie'    => $movie,
			'quotes'   => $quotes,
			'movie_id' => $movie_id,
		]);
	}

	public function movieEdit(Movie $movie)
	{
		return view('admin.movies.edit', ['movie' => $movie]);
	}

	public function quoteEdit(Quote $quote)
	{
		return view('admin.quotes.edit', [
			'quote' => $quote,
		]);
	}

	public function movieUpdate(Movie $movie)
	{
		$movie->update(
			[
				'title' => request()->title, ]
		);
		return redirect('/admin/movies');
	}

	public function quoteUpdate(Quote $quote)
	{
		$quote->update([
			'quote' => request()->Quote,
			'image' => request()->file('Image')->store('images'),
		]);
		return redirect('/admin/movies');
	}

	public function movieDestroy(Movie $movie)
	{
		$movie->delete();
		return redirect('/admin/movies');
	}

	public function quoteDestroy(Quote $quote)
	{
		$quote->delete();
		return redirect('/admin/movies');
	}
}
