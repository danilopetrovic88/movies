<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
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

    public function create()
    {
        return view('create');
    }

    public function store(CreateMovieRequest $request)
    {
        $data = $request->validated();
        $movie = Movie::create($data);
        return redirect('/movies/' . $movie->id);
    }
}