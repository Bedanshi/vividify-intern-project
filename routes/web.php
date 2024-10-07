<?php

use Illuminate\Support\Facades\Route;

use App\Models\Booking;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/message', function () {
    return view('message');
});
Route::get('/board', function () {
    return view('board');
});
Route::get('/confrence', function () {
    return view('confrence');
});

Route::post('/bookings/store', [UserController::class,'store'])->name('bookings.store');
