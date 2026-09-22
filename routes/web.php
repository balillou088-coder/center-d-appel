<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/guides', function () {
    return view('guides');
})->name('guides');
