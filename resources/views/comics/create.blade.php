@extends('layout.main')

@section('title', 'crea comic')

@section('main-content')
    <div class="container card-create">
        <div class="box-header">
            <h1>Crea il tuo comic</h1>
            <a href="{{route('home')}}" class="btn-success">Indietro</a>
        </div>
        <div class="box-main">
            <form action="">
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
                            <input type="url" name='type' class="form-info" id="type" placeholder="Es:http//...">
                        </div>
                    </div>
                    <div class="col-create">
                        <div class="my-3">
                            <label for="series" class="form-label">series</label>
                            <input type="url" name='series' class="form-info" id="series" placeholder="Es:http//...">
                        </div>
                    </div>
                    <div class="col-create">
                        <div class="my-3">
                            <label for="sale_date" class="form-label">data</label>
                            <input type="url" name='sale_date' class="form-info" id="sale_date" placeholder="Es:http//...">
                        </div>
                    </div>
                    <div class="col-create">
                        <div class="my-3">
                            <label for="price" class="form-label">prezzo</label>
                            <input type="url" name='price' class="form-info" id="price" placeholder="Es:http//...">
                        </div>
                    </div>
                </div>
                <div class="row flex row-btn">
                    <a href="{{route('comics.create')}}" class="btn-create">Crea</a>
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