<?php

use App\Http\Controllers\AdminController;
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
Route::get('movies/{movie:title}', [MovieController::class, 'show'])->name('movie');

Route::view('login', 'login.create')->name('loginCreate');

Route::post('login', [LoginController::class, 'store'])->name('loginStore');

Route::post('logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('admin/movies', [AdminController::class, 'index'])->name('dashboard');

Route::post('admin/movies', [AdminController::class, 'movieStore'])->name('movieStore');
Route::post('admin/quotes', [AdminController::class, 'quoteStore'])->name('quoteStore');

Route::view('admin/movies/create', 'admin.movies.create')->name('movieCreate');
Route::get('admin/quotes/create', [AdminController::class, 'quoteCreate'])->name('quoteCreate');

Route::get('admin/quotes/{movie}', [AdminController::class, 'quoteShow'])->name('quotesShow');

Route::get('admin/movies/{movie}/edit', [AdminController::class, 'movieEdit'])->name('movieEdit');
Route::get('admin/quotes/edit/{quote}', [AdminController::class, 'quoteEdit'])->name('quoteEdit');

Route::patch('admin/movies/{movie}', [AdminController::class, 'movieUpdate'])->name('movieUpdate');
Route::patch('admin/quotes/{quote}', [AdminController::class, 'quoteUpdate'])->name('quoteUpdate');

Route::delete('admin/movies/{movie}', [AdminController::class, 'movieDestroy'])->name('deleteMovie');
Route::delete('admin/quotes/{quote}', [AdminController::class, 'quoteDestroy'])->name('deleteQuote');
