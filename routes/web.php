<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vaillant', function () {
    return view('vaillant');
});

Route::get('/buderus', function () {
    return view('buderus');
});

Route::get('/löblich', function () {
    return view('löblich');
}); 
Route::get('/baxi', function () {
    return view('baxi');
});

Route::get('/junkers', function () {
    return view('junkers');
});

Route::get('/wolf', function () {
    return view('wolf');
});
Route::get('/viessmann', function () {
    return view('viessmann');
});
