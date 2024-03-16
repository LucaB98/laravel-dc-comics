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
                <div class="row flex my-3">
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
                    <div class="col box-img">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAWlBMVEXv8fNod4f19vhkdIRcbX52g5KPmqX29/iYoq3l6OuCj5vd4eTr7fBfcIFaa33M0dbBx82SnKe7wchtfIt8iZejq7TU2N2Ik6CwuL/Gy9Gqsrqbpa/P1NmhqrNz0egRAAADBklEQVR4nO3c63KqMBRAYUiwwUvEete27/+ax1tVAqhwEtnprO+XM62Oyw2CGTFJAAAAAAAAAAAAAAAAAAAAAAAAAAAAAJe6Mb5vqL7jjsws/wgln/dddzBZZjocuxj2HaiWNg1JL/oO3GVBA9PUzvvdF80q7AgPQ/zot1DlOnThyFBIIYWvFtrMK3mFdj30aWzFFWZjr+/qE4mFXh+YwrehsDMK34bCzmIoVEad1nC6PbD8QpXMNwOdDvKi2xMUX2jm2h7/onU2WHcZo/RCld8WN3TWZR1CeKH6LK1tTGftE2UXqpmzPGXbLwnKLkzcT8X6s/UQRReqWWX9LWs9RNGF5qOysmFb74miC9XCDUzt6k8VJtXC9jsihW9Tu5Uuq/vhvlKokuGjc1bRhWZVLdw5MWq8mU6zfNL4wKILk/W0spW6dyvOZ61p4wKd7EIzcoZot+UQVVxeA62bEmUXJuPyIV8PnDsVtxXtpikKL1S7++1U6/IZzV1g8xSFFx4i9HWMdjksNZQCGxOlFyZq8jW1VmubpZV90PngUZ8ovvDYuNt//Wy/1ZPAhsQICo+rUMa4T70msP7tJorCun8vKofKhilGWlg7wfopxlnYMMHaKUZZ2DjBuinGWPgwsDLFCAufBLqJ8RU+DXQ21OgKXwgsTzG2wpcCj1O8nsJGVvjgMNE0xbgKX5zgeYqXxKgKX57geYrnDTWmwhYTvJtiRIUtA3/fbuIpbB14mWI0hR0Cz1OMpbBT4CkxiaOwY+BpQ42isNVhwk283hJc2HmC5Va5hf8xwTgK/UxQcKGvQLGF3gKlFvoLFFroMVBmoc9AkYWeDhNyC1Xh9aJLeYV+Jyiw0Os+KLHQe6C0Qv+BwgoDBMoqDBEoqtCECJRUOPz2e5gQV2jnYa7qllOYBvr5CEGFgVBIIYXPmJ/ghZueZ+hexOWd+w3q9ycuwg5R2377DsapDflbX7rTFah+TbajQSij/aT/wNNF26FUvoELAAAAAAAAAAAAAAAAAAAAAAAAAAAA4G/4B9L3P1vg3y4/AAAAAElFTkSuQmCC" alt="" id="preview" class="img-fluid">
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
    
@section('script')
    <script>
        const placeholder = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAWlBMVEXv8fNod4f19vhkdIRcbX52g5KPmqX29/iYoq3l6OuCj5vd4eTr7fBfcIFaa33M0dbBx82SnKe7wchtfIt8iZejq7TU2N2Ik6CwuL/Gy9Gqsrqbpa/P1NmhqrNz0egRAAADBklEQVR4nO3c63KqMBRAYUiwwUvEete27/+ax1tVAqhwEtnprO+XM62Oyw2CGTFJAAAAAAAAAAAAAAAAAAAAAAAAAAAAAJe6Mb5vqL7jjsws/wgln/dddzBZZjocuxj2HaiWNg1JL/oO3GVBA9PUzvvdF80q7AgPQ/zot1DlOnThyFBIIYWvFtrMK3mFdj30aWzFFWZjr+/qE4mFXh+YwrehsDMK34bCzmIoVEad1nC6PbD8QpXMNwOdDvKi2xMUX2jm2h7/onU2WHcZo/RCld8WN3TWZR1CeKH6LK1tTGftE2UXqpmzPGXbLwnKLkzcT8X6s/UQRReqWWX9LWs9RNGF5qOysmFb74miC9XCDUzt6k8VJtXC9jsihW9Tu5Uuq/vhvlKokuGjc1bRhWZVLdw5MWq8mU6zfNL4wKILk/W0spW6dyvOZ61p4wKd7EIzcoZot+UQVVxeA62bEmUXJuPyIV8PnDsVtxXtpikKL1S7++1U6/IZzV1g8xSFFx4i9HWMdjksNZQCGxOlFyZq8jW1VmubpZV90PngUZ8ovvDYuNt//Wy/1ZPAhsQICo+rUMa4T70msP7tJorCun8vKofKhilGWlg7wfopxlnYMMHaKUZZ2DjBuinGWPgwsDLFCAufBLqJ8RU+DXQ21OgKXwgsTzG2wpcCj1O8nsJGVvjgMNE0xbgKX5zgeYqXxKgKX57geYrnDTWmwhYTvJtiRIUtA3/fbuIpbB14mWI0hR0Cz1OMpbBT4CkxiaOwY+BpQ42isNVhwk283hJc2HmC5Va5hf8xwTgK/UxQcKGvQLGF3gKlFvoLFFroMVBmoc9AkYWeDhNyC1Xh9aJLeYV+Jyiw0Os+KLHQe6C0Qv+BwgoDBMoqDBEoqtCECJRUOPz2e5gQV2jnYa7qllOYBvr5CEGFgVBIIYXPmJ/ghZueZ+hexOWd+w3q9ycuwg5R2377DsapDflbX7rTFah+TbajQSij/aT/wNNF26FUvoELAAAAAAAAAAAAAAAAAAAAAAAAAAAA4G/4B9L3P1vg3y4/AAAAAElFTkSuQmCC';

        const thumb = document.getElementById('thumb');
        const preview = document.getElementById('preview');

        thumb.addEventListener('input', () => {
            const url = thumb.value;
            preview.src = url ? url : placeholder;
        });
    </script>
@endsection