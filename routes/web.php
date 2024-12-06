<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;


Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);


Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/author/create', [AuthorController::class, 'create'])->name('authors.create');
Route::get('/author', [AuthorController::class, 'index'])->name('authors.index');
