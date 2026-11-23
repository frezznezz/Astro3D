<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/locale/{locale}', LocaleController::class)
    ->whereIn('locale', ['id', 'en', 'zh'])
    ->name('locale.switch');
