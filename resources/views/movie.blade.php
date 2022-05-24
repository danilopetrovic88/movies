@extends('layouts.app')

@section('title', $movie->title)

@section('content')
<h1>{{ $movie->title }}</h1>

<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                    <a href="/movies/{{ $movie->id }}" class="nav-link">{{ $movie->title }}</a>
                </div>
                <div class="card-body">
                    <p class="p-2">{{ $movie->storyline }}</p>
                </div>
                <div class="card-footer">
                    <p class="btn btn-info">Director: {{ $movie->director }}</p>
                    <p class="btn btn-warning">Year: {{ $movie->year }}</p>
                </div>
                @foreach($movie->comments as $comment)
                <p>{{ $comment->content }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection