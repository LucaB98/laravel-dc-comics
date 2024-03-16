@extends('layout.main')

@section('title', 'crea comic')

@section('main-content')
    <div class="container card-create">
        <div class="box-header">
            <h1>Crea il tuo comic</h1>
            <a href="{{route('home')}}" class="btn-success">Indietro</a>
        </div>
        <div class="box-main">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                <div class="row flex">
                    <div class="col-create">
                        <div class="my-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" name='title' class="form-control" id="title" placeholder="Es:Uomo d'acciaio">
                        </div>
                    </div>
                    <div class="col-create">
                        <div class="my-3">
                            <label for="thumb" class="form-label">Immagine</label>
                            <input type="url" name='thumb' class="form-control" id="thumb" placeholder="Es:http//...">
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-create">
                        <div class="mb-3 flex description-area">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row flex my-3">
                    <div class="col-create">
                        <div class="my-3">
                            <label for="type" class="form-label">genere</label>
                            <input type="text" name='type' class="form-info" id="type" placeholder="Es:'action">
                        </div>
                    </div>
                    <div class="col-create">
                        <div class="my-3">
                            <label for="series" class="form-label">series</label>
                            <input type="text" name='series' class="form-info" id="series" placeholder="Es:marvel">
                        </div>
                    </div>
                    <div class="col-create">
                        <div class="my-3">
                            <label for="sale_date" class="form-label">data</label>
                            <input type="text" name='sale_date' class="form-info" id="sale_date" placeholder="Es: 2022/10/16..">
                        </div>
                    </div>
                    <div class="col-create">
                        <div class="my-3">
                            <label for="price" class="form-label">prezzo</label>
                            <input type="text" name='price' class="form-info" id="price" placeholder="Es:6.99">
                        </div>
                    </div>    
                </div>
                <div class="row flex">
                    <div class="col-create">
                        <div class="my-3">
                            <label for="artists" class="form-label">Artista</label>
                            <input type="text" name='artists' class="form-info" id="artists" placeholder="stan lee">
                        </div>
                    </div>
                    <div class="col-create">
                        <div class="my-3">
                            <label for="writers" class="form-label">Scrittore</label>
                            <input type="text" name='writers' class="form-info" id="writers" placeholder="stan lee">
                        </div>
                    </div>
                </div>
                <div class="row flex row-btn">
                    <button class="btn-create">Crea</button>
                </div>
            </form>
        </div>
    </div>
@endsection
    
{{-- 
    titolo
    thumb

    description

    price
    series
    sale_date
    type
    
    
    
    --}}