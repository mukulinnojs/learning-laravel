<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserController::class, 'renderDashboard'])->name('user.dashboard');

Route::post('/attempting-login', [UserController::class, 'login'])->name('user.login');
Route::post('/attempting-signup', [UserController::class, 'signup'])->name('user.signup');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');


Route::get('/signup', [UserController::class, 'renderSignupView'])->name('signup');
Route::get('/login', [UserController::class, 'renderLoginView'])->name('login');