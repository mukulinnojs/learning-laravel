<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function () {
    return view('insert');
})->name('insertPage');

Route::post('/insertData', [InsertController::class, 'insertIntoDB'])->name('insertData');