<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::get('/Personal_Data', function () {
    return view('components.basic-information');
})->name('basic-information');
