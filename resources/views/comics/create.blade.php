@extends('layout.main')

@section('title', 'crea comic')

@section('main-content')
    <div class="container card-create">
        <div class="box-header">
            <h1>Crea il tuo comic</h1>
            <a href="{{route('home')}}" class="btn-success">Indietro</a>
        </div>
        <div class="box-main">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="email" class="form-control" id="title" placeholder="Es:Uomo d'acciaio">
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
{{-- 
    titolo
    description
    thumb
    price
    series
    sale_date
    type
    
    
    
    --}}