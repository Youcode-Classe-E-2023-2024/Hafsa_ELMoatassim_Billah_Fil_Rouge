<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('Auth.login');
});

Route::get('/register', function () {
    return view('Auth.register');
});

Route::get('/All_products', function () {
    return view('All_products');
});

Route::get('/Description', function () {
    return view('Description');
});

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/FAQ', function () {
    return view('FAQ');
});


