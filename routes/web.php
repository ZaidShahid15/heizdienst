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

Route::get('/nordgas', fn() => view('Notdienst Wien.nordgas'));
Route::get('/windhager', fn() => view('Notdienst Wien.windhager'));
Route::get('/thermen-notdienst-wien', fn() => view('thermen-notdienst-wien'));
Route::get('/heizung-notdienst-wien', fn() => view('heizung-notdienst-wien'));
/*
|--------------------------------------------------------------------------
| Kundendienst Pages (prefix + view prefix)
|--------------------------------------------------------------------------
| URL: /kundendienst/vaillant
| View: resources/views/kundendienst/vaillant.blade.php
*/

// ==================== Kundendienst ====================
Route::get('/vaillant-kundendienst-wien', fn() => view('kundendienst.vaillant-kaundseint'))->name('vaillant.kundendienst');
Route::get('/junkers-kundendienst-wien', fn() => view('kundendienst.junkers-kaundseint'))->name('junkers.kundendienst');
Route::get('/viessmann-kundendienst-wien', fn() => view('kundendienst.viessmann-kaundseint'))->name('viessmann.kundendienst');
Route::get('/wolf-kundendienst-wien', fn() => view('kundendienst.wolf-kaundseint'))->name('wolf.kundendienst');
Route::get('/saunier-duval-kundendienst-wien', fn() => view('kundendienst.saunier-duval-kaundseint'))->name('saunier-duval.kundendienst');
Route::get('/ocean-kundendienst-wien', fn() => view('kundendienst.ocean-kaundseint'))->name('ocean.kundendienst');
Route::get('/rapido-kundendienst-wien', fn() => view('kundendienst.rapido-kaundseint'))->name('rapido.kundendienst');
Route::get('/löblich-kundendienst-wien', fn() => view('kundendienst.löblich-kaundseint'))->name('löblich.kundendienst');
Route::get('/buderus-kundendienst-wien', fn() => view('kundendienst.buderus-kaundseint'))->name('buderus.kundendienst');
Route::get('/baxi-kundendienst-wien', fn() => view('kundendienst.baxi-kaundseint'))->name('baxi.kundendienst');
Route::get('/nordgas-kundendienst-wien', fn() => view('kundendienst.nordgas-kaundseint'))->name('nordgas.kundendienst');
Route::get('/windhager-kundendienst-wien', fn() => view('kundendienst.windhager-kaundseint'))->name('windhager.kundendienst');

// ==================== Notdienst ====================
Route::get('/vaillant-notdienst-wien', fn() => view('Notdienst Wien.vaillant-notdienst-wien'))->name('vaillant.notdienst');
Route::get('/junkers-notdienst-wien', fn() => view('Notdienst Wien.junkers-notdienst-wien'))->name('junkers.notdienst');
Route::get('/viessmann-notdienst-wien', fn() => view('Notdienst Wien.viessmann-notdienst-wien'))->name('viessmann.notdienst');
Route::get('/wolf-notdienst-wien', fn() => view('Notdienst Wien.wolf-notdienst-wien'))->name('wolf.notdienst');
Route::get('/saunier-duval-notdienst-wien', fn() => view('Notdienst Wien.saunier-duval-notdienst-wien'))->name('saunier-duval.notdienst');
Route::get('/ocean-notdienst-wien', fn() => view('Notdienst Wien.ocean-notdienst-wien'))->name('ocean.notdienst');
Route::get('/rapido-notdienst-wien', fn() => view('Notdienst Wien.rapido-notdienst-wien'))->name('rapido.notdienst');
Route::get('/löblich-notdienst-wien', fn() => view('Notdienst Wien.löblich-notdienst-wien'))->name('löblich.notdienst');
Route::get('/buderus-notdienst-wien', fn() => view('Notdienst Wien.buderus-notdienst-wien'))->name('buderus.notdienst');
Route::get('/baxi-notdienst-wien', fn() => view('Notdienst Wien.baxi-notdienst-wien'))->name('baxi.notdienst');
// Special case: nordgas and windhager use view names without the suffix
Route::get('/nordgas-notdienst-wien', fn() => view('Notdienst Wien.nordgas'))->name('nordgas.notdienst');
Route::get('/windhager-notdienst-wien', fn() => view('Notdienst Wien.windhager'))->name('windhager.notdienst');

// ==================== Thermentausch ====================
Route::get('/vaillant-thermentausch-wien', fn() => view('Thermentausch.vaillant'))->name('vaillant.thermentausch');
Route::get('/junkers-thermentausch-wien', fn() => view('Thermentausch.junkers'))->name('junkers.thermentausch');
Route::get('/viessmann-thermentausch-wien', fn() => view('Thermentausch.viessmann'))->name('viessmann.thermentausch');
Route::get('/wolf-thermentausch-wien', fn() => view('Thermentausch.wolf'))->name('wolf.thermentausch');
// Saunier-Duval uses short view name 'saunier'
Route::get('/saunier-duval-thermentausch-wien', fn() => view('Thermentausch.saunier'))->name('saunier-duval.thermentausch');
Route::get('/ocean-thermentausch-wien', fn() => view('Thermentausch.ocean'))->name('ocean.thermentausch');
Route::get('/rapido-thermentausch-wien', fn() => view('Thermentausch.rapido'))->name('rapido.thermentausch');
Route::get('/löblich-thermentausch-wien', fn() => view('Thermentausch.löblich'))->name('löblich.thermentausch');
Route::get('/buderus-thermentausch-wien', fn() => view('Thermentausch.buderus'))->name('buderus.thermentausch');
Route::get('/baxi-thermentausch-wien', fn() => view('Thermentausch.baxi'))->name('baxi.thermentausch');
Route::get('/nordgas-thermentausch-wien', fn() => view('Thermentausch.nordgas'))->name('nordgas.thermentausch');
Route::get('/windhager-thermentausch-wien', fn() => view('Thermentausch.windhager'))->name('windhager.thermentausch');

// ==================== Thermenreparatur ====================
Route::get('/vaillant-thermenreparatur-wien', fn() => view('Thermenreparatur.vaillant'))->name('vaillant.thermenreparatur');
Route::get('/junkers-thermenreparatur-wien', fn() => view('Thermenreparatur.junkers'))->name('junkers.thermenreparatur');
Route::get('/viessmann-thermenreparatur-wien', fn() => view('Thermenreparatur.viessmann'))->name('viessmann.thermenreparatur');
Route::get('/wolf-thermenreparatur-wien', fn() => view('Thermenreparatur.wolf'))->name('wolf.thermenreparatur');
// Saunier-Duval uses short view name 'saunier'
Route::get('/saunier-duval-thermenreparatur-wien', fn() => view('Thermenreparatur.saunier'))->name('saunier-duval.thermenreparatur');
Route::get('/ocean-thermenreparatur-wien', fn() => view('Thermenreparatur.ocean'))->name('ocean.thermenreparatur');
Route::get('/rapido-thermenreparatur-wien', fn() => view('Thermenreparatur.rapido'))->name('rapido.thermenreparatur');
Route::get('/löblich-thermenreparatur-wien', fn() => view('Thermenreparatur.löblich'))->name('löblich.thermenreparatur');
Route::get('/buderus-thermenreparatur-wien', fn() => view('Thermenreparatur.buderus'))->name('buderus.thermenreparatur');
Route::get('/baxi-thermenreparatur-wien', fn() => view('Thermenreparatur.baxi'))->name('baxi.thermenreparatur');
Route::get('/nordgas-thermenreparatur-wien', fn() => view('Thermenreparatur.nordgas'))->name('nordgas.thermenreparatur');
Route::get('/windhager-thermenreparatur-wien', fn() => view('Thermenreparatur.windhager'))->name('windhager.thermenreparatur');

// ==================== Installateur ====================
Route::get('/vaillant-installateur-wien', fn() => view('Installateur.vaillant'))->name('vaillant.installateur');
Route::get('/junkers-installateur-wien', fn() => view('Installateur.junkers'))->name('junkers.installateur');
Route::get('/viessmann-installateur-wien', fn() => view('Installateur.viessmann'))->name('viessmann.installateur');
Route::get('/wolf-installateur-wien', fn() => view('Installateur.wolf'))->name('wolf.installateur');
// Saunier-Duval uses short view name 'saunier'
Route::get('/saunier-duval-installateur-wien', fn() => view('Installateur.saunier'))->name('saunier-duval.installateur');
Route::get('/ocean-installateur-wien', fn() => view('Installateur.ocean'))->name('ocean.installateur');
Route::get('/rapido-installateur-wien', fn() => view('Installateur.rapido'))->name('rapido.installateur');
Route::get('/löblich-installateur-wien', fn() => view('Installateur.löblich'))->name('löblich.installateur');
Route::get('/buderus-installateur-wien', fn() => view('Installateur.buderus'))->name('buderus.installateur');
Route::get('/baxi-installateur-wien', fn() => view('Installateur.baxi'))->name('baxi.installateur');
Route::get('/nordgas-installateur-wien', fn() => view('Installateur.nordgas'))->name('nordgas.installateur');
Route::get('/windhager-installateur-wien', fn() => view('Installateur.windhager'))->name('windhager.installateur');
