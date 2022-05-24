@extends('layouts.app')

@section('title')
Movies app
@endsection

@section('content')
<h1>All movies</h1>

<div class="container">
    <div class="row">
        <div class="col-10">
            @foreach($movies as $movie)
            <div class="card">
                <div class="card-header">
                    <a href="/movies/{{ $movie->id }}" class="nav-link">{{ $movie->title }}</a>
                </div>
                <div class="card-body">
                    <p class="p-2">{{ $movie->storyline }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection