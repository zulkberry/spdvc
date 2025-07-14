<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});
Route::get('/program', function () {
    return view('program');
});
