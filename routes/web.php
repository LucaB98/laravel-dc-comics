<?php
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// comics
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');


// characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// games
Route::get('/games', function () {
    return view('games');
})->name('games');

// collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// news
Route::get('/news', function () {
    return view('news');
})->name('news');

// shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

