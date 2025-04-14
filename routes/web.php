<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page',]);
});
Route::get('/Pembayaran', function () {
    return view('Pembayaran', ['title' => 'Pembayaran',]);
});
Route::get('/BiayaPemakaian', function () {
    return view('BiayaPemakaian', ['title' => 'Biaya Pemakaian',]);
});
