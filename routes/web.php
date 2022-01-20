<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MoviesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', [UserController::class, 'show']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'create_user']);
Route::get('/login', [UserController::class, 'show']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/add_movies', [MoviesController::class, 'add_movies']);
Route::post('/add_movies', [MoviesController::class, 'save_movie']);
Route::get('/movies', [MoviesController::class, 'movies']);
Route::get('/movie/{movieId}', [MoviesController::class, 'get_movie']);
Route::post('/movie/{movieId}', [MoviesController::class, 'edit_movie']);