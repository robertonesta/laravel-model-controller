@extends('layouts.app')

@section('content')

<div class="container py-3">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
        @foreach ($movies as $movie)
            
        <div class="col">
            <div class="card h-100 shadow">
                <img class="card-img-top" src="{{$movie->cover_image}}" alt="{{$movie->title}}">
                <div class="card-body">
                    <h6>Title: {{$movie->title}}</h6>
                    <p>Vote: {{$movie->vote}}/10 </p>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@endsection