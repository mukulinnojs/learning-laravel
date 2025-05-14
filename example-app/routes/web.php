<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;




// Controller Route

Route::get("/hello-world/{name}", [PageController::class, "helloworld"])->name('hellopage');




Route::get('/', function () {
    return view('welcome');
})->name('welcomepage');

Route::view('/layouts', 'layouts')->name('layoutspage');

ROute::view("/stack", "stack")->name('stackpushpage');

Route::view('/blade', 'bladetemplate')->name('bladesyntax');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/users', function () {
    return view('user');
})->name('userspage');


Route::post('/loginauth', function (Request $request) {

    $request->validate([
        'email' => 'required|email',
        'pass' => 'required|min:1|max:16',
    ]);

    $email = $request->input('email');
    $pass = $request->input('pass');

    return view('user', ["email" => $email, "pass" => $pass]);

})->name('loginauth');

Route::get('/home', function () {
    return view('home');
})->name('homepage');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfoliopage');


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