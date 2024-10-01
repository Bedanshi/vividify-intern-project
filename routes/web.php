<?php

use Illuminate\Support\Facades\Route;

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
