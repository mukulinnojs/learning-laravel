<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EventController::class, 'fetchevents']);

Route::get('/editevent/{id}', [EventController::class, 'editevent'])->name('edit.event');

Route::get('/deleteevent/{id}', [EventController::class, 'deleteevent'])->name('delete.event');

Route::post('/saveevent', [EventController::class, 'addevent'])->name('save.event');

Route::post('/updateevent', [EventController::class, 'updateevent'])->name('update.event');