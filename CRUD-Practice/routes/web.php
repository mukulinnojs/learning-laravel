<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Controller Routes

Route::post('/addproduct', [ProductController::class, "addProduct"])->name('addproduct');

Route::get('/fetchproducts', [ProductController::class, 'fetchProducts'])->name('fetchproducts');

Route::post('/editproduct', [ProductController::class, 'editProduct'])->name('editproduct');

Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteproduct');


Route::get('/insert', function () {
    return view('insert');
})->name('insertpage');

Route::get('/read', function () {
    return view('read');
})->name('readpage');


Route::get('/update/{id}', function ($id) {
    
    return view('update', ['id' => $id]);
})->name('updatepage');

Route::get('/delete', function () {
    return view('delete');
})->name('deletepage');