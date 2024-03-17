@extends('layout.main')

@section('main-content')

<div class="bg-blue"></div>

<section class="bg-white">
    <div class="container comic">
        <div class="figure">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="box flex">
            <div class="info">
                <h1 class="title-comic">{{$comic['title']}}</h1>
                <div class="box-avaibles flex">
                    <div class="box-price bg-green">
                        <div class="price">
                           <strong class="opacity">U.S. Price:</strong> {{$comic['price']}}
                        </div>
                        <div class="status"><strong class="opacity">AVAILABLE</strong></div>
                    </div>
                    <div class="box-avaible bg-green">
                        <div class="check">
                            Check Availability
                        </div>
                    </div>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="spot">
                <h6 class="title-spot">ADVERTISEMENT</h6>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </div>
        </div>
        <div class="row text-end">
            <a href="{{route('comics.edit', $comic->id)}}" class="btn-success">Modifica</a>
        </div>
    </div>
    
</section>

@endsection