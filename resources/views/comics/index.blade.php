@extends('layout.main')

@section('title', 'comics')

@section('main-content')
<main id="main">
    <div class="container">
        <a href="#" class="title-series bg-blue">CURRENT SERIES</a>
    </div>
    <div class="container card-container">
        @foreach($comics as $index => $comic)
            <div class="cards">
                <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                    <div class="thumb">
                        <img src="{{$comic->thumb}}" alt="{{$comic->series}}">
                    </div>
                    <h4>{{$comic->series}}</h4>
                </a>
            </div>
        @endforeach
    </div>
    <div class="container load-more">
        <a href="#" class="btn-load">LOAD MORE</a>
    </div>
</main>
@endsection