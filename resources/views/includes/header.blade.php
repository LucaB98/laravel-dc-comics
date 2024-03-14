@php
    $links = config('header')
@endphp



<header id="header">
    <div class="container">
        <section class="nav-header">
            <a href="{{route('home')}}">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
            </a>
            <nav>
                <ul class="flex">
                @foreach($links as $link)
                    <li>
                        <a href="{{route($link['route_name'])}}" class="{{Route::is($link['route_name']) ? 'active' : ''}}">{{$link['text']}}</a>
                    </li> 
                @endforeach
                </ul>
            </nav>
        </section>
    </div>
</header>