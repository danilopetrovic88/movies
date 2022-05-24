<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('/movies', compact('movies'));
    }

    public function show(Movie $movie)
    {
        return view('movie', compact('movie'));
    }
}