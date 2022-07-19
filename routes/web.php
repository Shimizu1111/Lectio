<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LectioController;

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

Route::get('/top', [LectioController::class, 'top']);
Route::get('/favorite', [LectioController::class, 'favoriteBook']);
Route::get('/favorite/create', [LectioController::class, 'createFavoriteBook']);