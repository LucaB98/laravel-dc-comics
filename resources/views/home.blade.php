@extends('layout.main')

@section('main-content')
    <div class="create-box">
        <h1>Crea il tuo Comics</h1>
        <a href="{{route('comics.create')}}" class="btn-success">Crea</a>
    </div>
@endsection