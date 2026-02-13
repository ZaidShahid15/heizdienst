<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Brand Pages (normal)
|--------------------------------------------------------------------------
*/
Route::get('/vaillant', fn() => view('vaillant'));
Route::get('/buderus', fn() => view('buderus'));
Route::get('/löblich', fn() => view('löblich'));
Route::get('/baxi', fn() => view('baxi'));
Route::get('/junkers', fn() => view('junkers'));
Route::get('/wolf', fn() => view('wolf'));
Route::get('/viessmann', fn() => view('viessmann'));
Route::get('/saunier-duval', fn() => view('saunier-duval'));
Route::get('/rapido', fn() => view('rapido'));
Route::get('/ocean', fn() => view('ocean'));
// Route::get('impressum',fn() => view('impressum'))->name('impressum');
// Route::get('/Datenschutzerklärung',fn() => view('Datenschutzerklärung'));

Route::view('/impressum', 'impressum')->name('impressum');
Route::view('/datenschutzerklaerung', 'datenschutzerklaerung')->name('datenschutzerklaerung');

/*
|--------------------------------------------------------------------------
| Kundendienst Pages (prefix + view prefix)
|--------------------------------------------------------------------------
| URL: /kundendienst/vaillant
| View: resources/views/kundendienst/vaillant.blade.php
*/
Route::prefix('kundendienst')->group(function () {

    Route::get('/vaillant', fn() => view('kundendienst.vaillant-kaundseint'));
    Route::get('/junkers', fn() => view('kundendienst.junkers-kaundseint'));
    Route::get('/viessmann', fn() => view('kundendienst.viessmann-kaundseint'));
    Route::get('/wolf', fn() => view('kundendienst.wolf-kaundseint'));
    Route::get('/saunier-duval', fn() => view('kundendienst.saunier-duval-kaundseint'));
    Route::get('/ocean', fn() => view('kundendienst.ocean-kaundseint'));
    Route::get('/rapido', fn() => view('kundendienst.rapido-kaundseint'));
    Route::get('/löblich', fn() => view('kundendienst.löblich-kaundseint'));
    Route::get('/buderus', fn() => view('kundendienst.buderus-kaundseint'));
    Route::get('/baxi', fn() => view('kundendienst.baxi-kaundseint'));

});


Route::prefix('notdienstwien')->group(function () {

    Route::get('/vaillant', fn() => view('Notdienst Wien.vaillant-notdienst-wien'));
    Route::get('/junkers', fn() => view('Notdienst Wien.junkers-notdienst-wien'));
    Route::get('/viessmann', fn() => view('Notdienst Wien.viessmann-notdienst-wien'));
    Route::get('/wolf', fn() => view('Notdienst Wien.wolf-notdienst-wien'));
    Route::get('/saunier-duval', fn() => view('Notdienst Wien.saunier-duval-notdienst-wien'));
    Route::get('/ocean', fn() => view('Notdienst Wien.ocean-notdienst-wien'));
    Route::get('/rapido', fn() => view('Notdienst Wien.rapido-notdienst-wien'));
    Route::get('/löblich', fn() => view('Notdienst Wien.löblich-notdienst-wien'));
    Route::get('/buderus', fn() => view('Notdienst Wien.buderus-notdienst-wien'));
    Route::get('/baxi', fn() => view('Notdienst Wien.baxi-notdienst-wien'));

});


Route::prefix('Thermentausch')->group(function(){
    Route::get('/vaillant',fn() => view('Thermentausch.vaillant'));
    Route::get('/junkers',fn() => view('Thermentausch.junkers'));
    Route::get('/viessmann',fn() => view('Thermentausch.viessmann'));
    Route::get('/wolf',fn() => view('Thermentausch.wolf'));
    Route::get('/baxi',fn() => view('Thermentausch.baxi'));
    Route::get('/buderus',fn() => view('Thermentausch.buderus'));
    Route::get('/saunier',fn() => view('Thermentausch.saunier'));
    Route::get('/löblich',fn() => view('Thermentausch.löblich'));
    Route::get('/ocean',fn() => view('Thermentausch.ocean'));
    Route::get('/rapido',fn() => view('Thermentausch.rapido'));
});


Route::prefix('Thermenreparatur')->group(function(){
    Route::get('/vaillant',fn() => view('Thermenreparatur.vaillant'));
    Route::get('/junkers',fn() => view('Thermenreparatur.junkers'));
    Route::get('/viessmann',fn() => view('Thermenreparatur.viessmann'));
    Route::get('/wolf',fn() => view('Thermenreparatur.wolf'));
    Route::get('/baxi',fn() => view('Thermenreparatur.baxi'));
    Route::get('/buderus',fn() => view('Thermenreparatur.buderus'));
    // Route::get('/saunier',fn() => view('Thermenreparatur.saunier'));
    // Route::get('/löblich',fn() => view('Thermenreparatur.löblich'));
    // Route::get('/ocean',fn() => view('Thermenreparatur.ocean'));
    Route::get('/rapido',fn() => view('Thermenreparatur.rapido'));
});