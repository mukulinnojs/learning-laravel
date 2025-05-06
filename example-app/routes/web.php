<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});


//Passing Parameters using get routes

Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    return "Hi, $firstname $lastname, This is your portfolio";
});

//Named Routes

Route::get('/xyrazkjhdfkjlksjdfh', function () {
    return "This is the page with url = xyrazkjhdfkjlksjdfh but we used named routes here";
})->name('testpage');


//Prefix Grouping

Route::prefix('portfolio')->group(function () {
    Route::get('/company', function () {
        return view('comp');
    })->name('companypage');

    Route::get('/organization', function () {
        return view('org');
    })->name('orgpage');
});