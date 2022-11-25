<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMovieRequest;
use App\Http\Requests\AddQuoteRequest;
use App\Http\Requests\EditMovieRequest;
use App\Http\Requests\EditQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class AdminController extends Controller
{
	public function index()
	{
		$movies = Movie::all()->sortDesc();
		return view('admin.movies.index', [
			'movies'  => $movies,
		]);
	}

	public function quotesShow()
	{
		$quotes = Quote::all()->sortDesc();
		return view('admin.quotes.index', [
			'quotes'  => $quotes,
		]);
	}

	public function movieStore(AddMovieRequest $request)
	{
		Movie::create([
			'title' => [
				'ka'	=> $request->title_ka,
				'en' => $request->title_en,
			],
		]);
		return redirect()->route('dashboard');
	}

	public function quoteStore(AddQuoteRequest $request)
	{
		Quote::create([
			'quote'   => [
				'en' => $request->quote_en,
				'ka' => $request->quote_ka,
			],
			'movie_id'=> request()->movie_id,
			'image'   => $request->file('image')->store('images'),
		]);
		return redirect()->route('dashboard');
	}

	public function quoteCreate()
	{
		$movies = Movie::all();
		return view('admin.quotes.create', [
			'movies' => $movies,
		]);
	}

	public function quoteShow()
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

	public function movieUpdate(Movie $movie, EditMovieRequest $request)
	{
		$movie->update(
			[
				'title' => $request->title, ]
		);
		return redirect()->route('dashboard');
	}

	public function quoteUpdate(Quote $quote, EditQuoteRequest $request)
	{
		$attributes = $request->validated();
		if (isset($attributes['image']))
		{
			$attributes['image'] = request()->file('image')->store('images');
			$quote->update([
				'quote' => $attributes['quote'],
				'image' => $attributes['image'],
			]);
		}
		else
		{
			$quote->update([
				'quote' => $attributes['quote'],
			]);
		}
		return redirect()->route('dashboard');
	}

	public function movieDestroy(Movie $movie)
	{
		$movie->delete();
		return redirect()->route('dashboard');
	}

	public function quoteDestroy(Quote $quote)
	{
		$quote->delete();
		return redirect()->route('dashboard');
	}
}
