<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/support', [SupportController::class, 'index'])->name('support');
Route::post('/support', [SupportController::class, 'store'])->name('support.store');
// routes/web.php
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
// routes/web.php
Route::get('/guides/appels', [GuideController::class, 'appels'])->name('guides.appels');

Route::get('/guides', function () {
    return view('guides');
})->name('guides');
use App\Http\Controllers\AdministrationController;

Route::get('/administration', [AdministrationController::class, 'index'])
    ->name('administration');
