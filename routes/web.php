<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.pages.onePage_first');
    // return view('front.pages.onePage_second');
})->name('home');
