<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login');
});