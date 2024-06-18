<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SneakerController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/sneaker', function () {
    return view('pages.plp');
})->name('plp');

Route::get('/sneaker/{i}', function () {
    return view('pages.pdp');
})->name('pdp');
