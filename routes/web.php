<?php

use Illuminate\Support\Facades\Route;

use App\Models\booking;
use App\Models\Customer;
use App\Http\Controllers\UserController;

use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('index');
});
Route::get('/message', function () {
    return view('message');
});
Route::get('/board', function () {
    return view('board');
});

Route::get('/wedding', function () {
    return view('wedding');
});
Route::get('/offer', function () {
    return view('offer');
});

Route::get('/history', function () {
    return view('history');
});
Route::get('/contact', function () {
    return view('contact');
});



Route::get('/confrence', function () {
    return view('confrence');
});

Route::post('/bookings/store', [UserController::class,'store'])->name('bookings.store');
Route::get('/booking', [UserController::class, 'index']);

Route::get('/register', function () {
    return view('register');
});

Route::get('register',[AuthController::class,'index']);
Route::post('/customers/store', [AuthController::class,'store']);
