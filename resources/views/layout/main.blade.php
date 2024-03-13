<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME', 'Comics')}} | @yield('title')</title>

    <link rel="icon" type="image/svg" href="{{Vite::asset('resources/img/favicon.ico')}}" />

    <!-- importa Vite & co -->
    @vite('resources/js/app.js')
</head>
<body>
    @include('includes.header')
    @include('includes.jumbo')

    <main>
        @yield('main-content')
    </main>

    @include('includes.footer')
</body>
</html>