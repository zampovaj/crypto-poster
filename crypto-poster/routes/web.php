<?php

use App\Http\Controllers\Settings;
use Illuminate\Support\Facades\Route;

Route::get('/poster', function () {
    return view('poster');
})->name('app');
