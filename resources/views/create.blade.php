@extends('layouts.app')

@section('title', 'Add movie')

@section('content')
<h1>Add movie</h1>

<div class="container">
    <div class="row">
        <div class="col-10">
            <form method="POST" action="/create">
                @csrf
                <input type="text" name="title" id="title" placeholder="add title" class="form-control"><br>
                @include('partials.errors', [ 'field' => 'title'])
                <input type="text" name="genre" id="genre" placeholder="genre" class="form-control"><br>
                @include('partials.errors', [ 'field' => 'genre'])
                <input type="text" name="director" id="director" placeholder="director" class="form-control"><br>
                @include('partials.errors', [ 'field' => 'director'])
                <input type="number" name="year" id="year" placeholder="year" class="form-control"><br>
                @include('partials.errors', [ 'field' => 'year'])
                <textarea name="storyline" id="storyline" placeholder="storyline" cols="30" rows="10"
                    class="form-control"></textarea><br>
                @include('partials.errors', [ 'field' => 'storyline'])
                <button type="submit" class="btn btn-primary">Add movie</button>
            </form>
        </div>
    </div>
</div>
@endsection