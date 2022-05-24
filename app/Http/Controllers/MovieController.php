<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Comment;
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
        // $comments = Comment::where('movie_id', $movie->id)->get();

        return view('movie', compact('movie'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Movie $movie, CreateMovieRequest $request)
    {
        $data = $request->validated();

        $movie = Movie::create($data);
        return redirect('/movies/' . $movie->id);
    }
}