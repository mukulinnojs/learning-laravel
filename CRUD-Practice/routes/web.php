<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
    $res = DB::table('products')->where('id', $id)->first();
    return view('update', ['data' => $res]);
})->name('updatepage');

Route::get('/delete', function () {
    return view('delete');
})->name('deletepage');