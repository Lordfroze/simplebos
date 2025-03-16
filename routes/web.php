<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/profile', function () {
    return view('dashboard.profile');
});
