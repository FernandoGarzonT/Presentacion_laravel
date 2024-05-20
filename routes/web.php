<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

Route::view('/Personal_Data', 'components.basic-information')
    ->name('basic-information');

Route::view('/studys', 'components.studys')->name('studys');
Route::view('/games', 'components.games')->name('games');
