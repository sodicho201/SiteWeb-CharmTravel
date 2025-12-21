<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.pages.onepage_first');
    // return view('front.pages.onepage_second');
})->name('home');
