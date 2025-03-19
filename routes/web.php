<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //LAZY LOADING
    //$books = Book::all(); //Book::all() consulta del ORM (eloquent)

    //EAGER LOADING
    $books = Book::with('genre')->get();

    return view('welcome', compact('books'));
});
