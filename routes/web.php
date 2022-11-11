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
Route::get('movies/{movie:title}', [MovieController::class, 'show']);

Route::get('login', [LoginController::class, 'create']);
Route::post('login', [LoginController::class, 'store']);

Route::post('logout', [LoginController::class, 'destroy']);

Route::get('admin/movies', [AdminController::class, 'index']);
