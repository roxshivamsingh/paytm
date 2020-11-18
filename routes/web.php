<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('order', function () {
    return view('checkout');
});

Route::resource('paytm', \App\Http\Controllers\PaytmController::class);
Route::post('paytm-callback', [\App\Http\Controllers\PaytmController::class, 'paytmCallback']);
