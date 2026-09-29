<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('formulaire');
});

Route::get('/events', [EventController::class, 'index']);

Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, '']);
