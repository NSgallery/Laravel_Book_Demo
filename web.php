<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/details', [BookController::class, 'get_record'])->name('details');
Route::get('/delete', [BookController::class, 'del_record'])->name('delete');
Route::get('/edit', [BookController::class, 'edit_record'])->name('edit');
Route::post('/submit_edit_book', [BookController::class, 'submit_edit_book'])->name('submit_edit_book');
Route::post('/submit_add_book', [BookController::class, 'submit_add_book'])->name('submit_add_book');