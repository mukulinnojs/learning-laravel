<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Controller Routes

Route::post('/addproduct', [ProductController::class, "addProduct"])->name('addproduct');

Route::get('/fetchproducts', [ProductController::class, 'fetchProducts'])->name('fetchproducts');

Route::get('/editproduct/{id}', [ProductController::class, 'fetchProducts'])->name('fetchproducts');


Route::get('/insert', function () {
    return view('insert');
})->name('insertpage');

Route::get('/read', function () {
    return view('read');
})->name('readpage');


Route::get('/update', function () {
    return view('update');
})->name('updatepage');

Route::get('/delete', function () {
    return view('delete');
})->name('deletepage');