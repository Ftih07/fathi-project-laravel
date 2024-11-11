<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/index', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/car', function () {
    return view('car');
});

Route::get('/', function () {
    return view('login');
});



Route::get('/', [HomeController::class, 'login'])->name('login');
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/car', [HomeController::class, 'car'])->name('car');