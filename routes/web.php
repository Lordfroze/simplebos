<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('index');
});
