<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $title = 'Featured Books';
    $books = Book::latest();
    if(request('search')){
        $books->where('judul', 'like', '%'.request('search').'%');
        $title = "Hasil Pencarian";
    }
    return view('index', [
        'books' => $books->get(),
        'title' => $title
    ]);
});
