<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('movies/{movie:id}', [MovieController::class, 'show'])->name('movie');

Route::view('login', 'login.create')->middleware('guest')->name('loginCreate');

Route::post('login', [LoginController::class, 'login'])->middleware('guest')->name('loginStore');

Route::post('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::prefix('admin')->middleware('auth')->group(function () {
	Route::get('movies', [AdminController::class, 'index'])->name('dashboard');
	Route::get('quotes', [AdminController::class, 'quotesShow'])->name('allQuotes');

	Route::post('movies', [AdminController::class, 'movieStore'])->name('movieStore');
	Route::post('quotes', [AdminController::class, 'quoteStore'])->name('quoteStore');

	Route::view('movies/create', 'admin.movies.create')->name('movieCreate');
	Route::get('quotes/create', [AdminController::class, 'quoteCreate'])->name('quoteCreate');

	Route::get('quotes/{movie}', [AdminController::class, 'quoteShow'])->name('quotesShow');

	Route::get('movies/{movie}/edit', [AdminController::class, 'movieEdit'])->name('movieEdit');
	Route::get('quotes/edit/{quote}', [AdminController::class, 'quoteEdit'])->name('quoteEdit');

	Route::patch('movies/{movie}', [AdminController::class, 'movieUpdate'])->name('movieUpdate');
	Route::patch('quotes/{quote}', [AdminController::class, 'quoteUpdate'])->name('quoteUpdate');

	Route::delete('movies/{movie}', [AdminController::class, 'movieDestroy'])->name('deleteMovie');
	Route::delete('quotes/{quote}', [AdminController::class, 'quoteDestroy'])->name('deleteQuote');
});

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');
