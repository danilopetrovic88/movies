<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/create', [MovieController::class, 'create']);
Route::post('/create', [MovieController::class, 'store']);
Route::get('/movies/{movie}', [MovieController::class, 'show']);