<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\SitemapController;



Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| Brand Pages (normal)
|--------------------------------------------------------------------------
*/
Route::get('/vaillant-thermenwartung-wien', fn() => view('vaillant'))->name('vaillant.thermenwartung');

Route::get('/buderus-thermenwartung-wien', fn() => view('buderus'))->name('buderus.thermenwartung');

Route::get('/loeblich-thermenwartung-wien', fn() => view('löblich'))->name('loeblich.thermenwartung');

Route::get('/baxi-thermenwartung-wien', fn() => view('baxi'))->name('baxi.thermenwartung');

Route::get('/junkers-thermenwartung-wien', fn() => view('junkers'))->name('junkers.thermenwartung');

Route::get('/wolf-thermenwartung-wien', fn() => view('wolf'))->name('wolf.thermenwartung');

Route::get('/viessmann-thermenwartung-wien', fn() => view('viessmann'))->name('viessmann.thermenwartung');

Route::get('/saunier-duval-thermenwartung-wien', fn() => view('saunier-duval'))->name('saunierduval.thermenwartung');

Route::get('/rapido-thermenwartung-wien', fn() => view('rapido'))->name('rapido.thermenwartung');

Route::get('/ocean-thermenwartung-wien', fn() => view('ocean'))->name('ocean.thermenwartung');

Route::get('/nordgas-thermenwartung-wien', fn() => view('nordgas'))->name('nordgas.thermenwartung');

Route::get('/windhager-thermenwartung-wien', fn() => view('windhager'))->name('windhager.thermenwartung');
// Route::get('impressum',fn() => view('impressum'))->name('impressum');
// Route::get('/Datenschutzerklärung',fn() => view('Datenschutzerklärung'));

Route::view('/impressum', 'impressum')->name('impressum');
Route::view('/datenschutzerklaerung', 'datenschutzerklaerung')->name('datenschutzerklaerung');

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



Route::get('/warmepumpel-Wartung-wien', fn() => view('warmepumpel.Wartung'))->name('warmepumpel.Wartung');
Route::get('/warmepumpel-Installation-wien', fn() => view('warmepumpel.Installation'))->name('warmepumpel.Installation');
Route::get('/warmepumpel-Reparatur-wien', fn() => view('warmepumpel.Reparatur'))->name('warmepumpel.Reparatur');
Route::get('/warmepumpel-Installation-Niederosterreich-wien', fn() => view('warmepumpel.Installation-Niederosterreich'))->name('warmepumpel.Installation-Niederosterreich');
Route::get('/warmepumpel-Niederosterreich-wien', fn() => view('warmepumpel.Niederosterreich'))->name('warmepumpel.Niederosterreich');
Route::get('/warmepumpel-Wartung-Burgenland-wien', fn() => view('warmepumpel.Wartung-Burgenland'))->name('warmepumpel.Wartung-Burgenland');
Route::get('/warmepumpel-Reparatur-Niederosterreich-wien', fn() => view('warmepumpel.Reparatur-Niederosterreich'))->name('warmepumpel.Reparatur-Niederosterreich');
Route::get('/warmepumpel-Installation-Burgenland-wien', fn() => view('warmepumpel.Installation-Burgenland'))->name('warmepumpel.Installation-Burgenland');
Route::get('/warmepumpel-Reparatur-Burgenland-wien', fn() => view('warmepumpel.Reparatur-Burgenland'))->name('warmepumpel.Reparatur-Burgenland');




Route::get('/installateur-1010-wien', fn() => view('installateur_wien.installateur-1010-wien'))->name('installateur.1010');
Route::get('/installateur-1020-wien', fn() => view('installateur_wien.installateur-1020-wien'))->name('installateur.1020');
Route::get('/installateur-1030-wien', fn() => view('installateur_wien.installateur-1030-wien'))->name('installateur.1030');
Route::get('/installateur-1040-wien', fn() => view('installateur_wien.installateur-1040-wien'))->name('installateur.1040');
Route::get('/installateur-1050-wien', fn() => view('installateur_wien.installateur-1050-wien'))->name('installateur.1050');
Route::get('/installateur-1060-wien', fn() => view('installateur_wien.installateur-1060-wien'))->name('installateur.1060');
Route::get('/installateur-1070-wien', fn() => view('installateur_wien.installateur-1070-wien'))->name('installateur.1070');
Route::get('/installateur-1080-wien', fn() => view('installateur_wien.installateur-1080-wien'))->name('installateur.1080');
Route::get('/installateur-1090-wien', fn() => view('installateur_wien.installateur-1090-wien'))->name('installateur.1090');
Route::get('/installateur-1100-wien', fn() => view('installateur_wien.installateur-1100-wien'))->name('installateur.1100');
Route::get('/installateur-1110-wien', fn() => view('installateur_wien.installateur-1110-wien'))->name('installateur.1110');
Route::get('/installateur-1120-wien', fn() => view('installateur_wien.installateur-1120-wien'))->name('installateur.1120');
Route::get('/installateur-1130-wien', fn() => view('installateur_wien.installateur-1130-wien'))->name('installateur.1130');
Route::get('/installateur-1140-wien', fn() => view('installateur_wien.installateur-1140-wien'))->name('installateur.1140');
Route::get('/installateur-1150-wien', fn() => view('installateur_wien.installateur-1150-wien'))->name('installateur.1150');
Route::get('/installateur-1160-wien', fn() => view('installateur_wien.installateur-1160-wien'))->name('installateur.1160');
Route::get('/installateur-1170-wien', fn() => view('installateur_wien.installateur-1170-wien'))->name('installateur.1170');
Route::get('/installateur-1180-wien', fn() => view('installateur_wien.installateur-1180-wien'))->name('installateur.1180');
Route::get('/installateur-1190-wien', fn() => view('installateur_wien.installateur-1190-wien'))->name('installateur.1190');
Route::get('/installateur-1200-wien', fn() => view('installateur_wien.installateur-1200-wien'))->name('installateur.1200');
Route::get('/installateur-1210-wien', fn() => view('installateur_wien.installateur-1210-wien'))->name('installateur.1210');
Route::get('/installateur-1220-wien', fn() => view('installateur_wien.installateur-1220-wien'))->name('installateur.1220');
Route::get('/installateur-1230-wien', fn() => view('installateur_wien.installateur-1230-wien'))->name('installateur.1230');



Route::get('/thermenwartung-1010-wien', fn() => view('thermenwartung.thermenwartung-1010-wien'))->name('thermenwartung.1010');
Route::get('/thermenwartung-1020-wien', fn() => view('thermenwartung.thermenwartung-1020-wien'))->name('thermenwartung.1020');
Route::get('/thermenwartung-1030-wien', fn() => view('thermenwartung.thermenwartung-1030-wien'))->name('thermenwartung.1030');
Route::get('/thermenwartung-1040-wien', fn() => view('thermenwartung.thermenwartung-1040-wien'))->name('thermenwartung.1040');
Route::get('/thermenwartung-1050-wien', fn() => view('thermenwartung.thermenwartung-1050-wien'))->name('thermenwartung.1050');
Route::get('/thermenwartung-1060-wien', fn() => view('thermenwartung.thermenwartung-1060-wien'))->name('thermenwartung.1060');
Route::get('/thermenwartung-1070-wien', fn() => view('thermenwartung.thermenwartung-1070-wien'))->name('thermenwartung.1070');
Route::get('/thermenwartung-1080-wien', fn() => view('thermenwartung.thermenwartung-1080-wien'))->name('thermenwartung.1080');
Route::get('/thermenwartung-1090-wien', fn() => view('thermenwartung.thermenwartung-1090-wien'))->name('thermenwartung.1090');
Route::get('/thermenwartung-1100-wien', fn() => view('thermenwartung.thermenwartung-1100-wien'))->name('thermenwartung.1100');
Route::get('/thermenwartung-1110-wien', fn() => view('thermenwartung.thermenwartung-1110-wien'))->name('thermenwartung.1110');
Route::get('/thermenwartung-1120-wien', fn() => view('thermenwartung.thermenwartung-1120-wien'))->name('thermenwartung.1120');
Route::get('/thermenwartung-1130-wien', fn() => view('thermenwartung.thermenwartung-1130-wien'))->name('thermenwartung.1130');
Route::get('/thermenwartung-1140-wien', fn() => view('thermenwartung.thermenwartung-1140-wien'))->name('thermenwartung.1140');
Route::get('/thermenwartung-1150-wien', fn() => view('thermenwartung.thermenwartung-1150-wien'))->name('thermenwartung.1150');
Route::get('/thermenwartung-1160-wien', fn() => view('thermenwartung.thermenwartung-1160-wien'))->name('thermenwartung.1160');
Route::get('/thermenwartung-1170-wien', fn() => view('thermenwartung.thermenwartung-1170-wien'))->name('thermenwartung.1170');
Route::get('/thermenwartung-1180-wien', fn() => view('thermenwartung.thermenwartung-1180-wien'))->name('thermenwartung.1180');
Route::get('/thermenwartung-1190-wien', fn() => view('thermenwartung.thermenwartung-1190-wien'))->name('thermenwartung.1190');
Route::get('/thermenwartung-1200-wien', fn() => view('thermenwartung.thermenwartung-1200-wien'))->name('thermenwartung.1200');
Route::get('/thermenwartung-1210-wien', fn() => view('thermenwartung.thermenwartung-1210-wien'))->name('thermenwartung.1210');
Route::get('/thermenwartung-1220-wien', fn() => view('thermenwartung.thermenwartung-1220-wien'))->name('thermenwartung.1220');
Route::get('/thermenwartung-1230-wien', fn() => view('thermenwartung.thermenwartung-1230-wien'))->name('thermenwartung.1230');


Route::post('/mail-send',[ContactMailController::class,'mail'])->name('mail-send');



Route::get('/sitemap.xml', [SitemapController::class,'index']);

Route::get('/sitemaps/sitemap-core.xml', [SitemapController::class,'core']);
Route::get('/sitemaps/sitemap-brands.xml', [SitemapController::class,'brands']);
Route::get('/sitemaps/sitemap-locations-core.xml', [SitemapController::class,'locationsCore']);
Route::get('/sitemaps/sitemap-location-services-wien.xml', [SitemapController::class,'wien']);
Route::get('/sitemaps/sitemap-location-services-noe.xml', [SitemapController::class,'noe']);
Route::get('/sitemaps/sitemap-location-services-burgenland.xml', [SitemapController::class,'burgenland']);




Route::get('/installateur-eisenstadt', fn() => view('Installateur-district.installateur-eisenstadt'))->name('installateur-eisenstadt');
Route::get('/installateur-rust', fn() => view('Installateur-district.installateur-rust'))->name('installateur-rust');
Route::get('/installateur-baden', fn() => view('Installateur-district.installateur-baden'))->name('installateur-baden');
Route::get('/installateur-bruck', fn() => view('Installateur-district.installateur-bruck'))->name('installateur-bruck');
Route::get('/installateur-deutsch', fn() => view('Installateur-district.installateur-deutsch'))->name('installateur-deutsch');
Route::get('/installateur-fischamend', fn() => view('Installateur-district.installateur-fischamend'))->name('installateur-fischamend');
Route::get('/installateur-gablitz', fn() => view('Installateur-district.installateur-gablitz'))->name('installateur-gablitz');
Route::get('/installateur-gansendorf', fn() => view('Installateur-district.installateur-gansendorf'))->name('installateur-gansendorf');
Route::get('/installateur-gerasdorf', fn() => view('Installateur-district.installateur-gerasdorf'))->name('installateur-gerasdorf');
Route::get('/installateur-grob', fn() => view('Installateur-district.installateur-grob'))->name('installateur-grob');
Route::get('/installateur-hornstein', fn() => view('Installateur-district.installateur-hornstein'))->name('installateur-hornstein');
Route::get('/installateur-kostenneuburg', fn() => view('Installateur-district.installateur-kostenneuburg'))->name('installateur-kostenneuburg');
Route::get('/installateur-korneuburg', fn() => view('Installateur-district.installateur-korneuburg'))->name('installateur-korneuburg');
Route::get('/installateur-modling', fn() => view('Installateur-district.installateur-modling'))->name('installateur-modling');
Route::get('/installateur-neunkirchen', fn() => view('Installateur-district.installateur-neunkirchen'))->name('installateur-neunkirchen');
Route::get('/installateur-neusiedl', fn() => view('Installateur-district.installateur-neusiedl'))->name('installateur-neusiedl');
Route::get('/installateur-parndorf', fn() => view('Installateur-district.installateur-parndorf'))->name('installateur-parndorf');
Route::get('/installateur-perchtoldsdorf', fn() => view('Installateur-district.installateur-perchtoldsdorf'))->name('installateur-perchtoldsdorf');
Route::get('/installateur-potten', fn() => view('Installateur-district.installateur-potten'))->name('installateur-potten');
Route::get('/installateur-pressbaum', fn() => view('Installateur-district.installateur-pressbaum'))->name('installateur-pressbaum');
Route::get('/installateur-purkersdorf', fn() => view('Installateur-district.installateur-purkersdorf'))->name('installateur-purkersdorf');
Route::get('/installateur-rust', fn() => view('Installateur-district.installateur-rust'))->name('installateur-rust');
Route::get('/installateur-schwechat', fn() => view('Installateur-district.installateur-schwechat'))->name('installateur-schwechat');
Route::get('/installateur-sollenau', fn() => view('Installateur-district.installateur-sollenau'))->name('installateur-sollenau');
Route::get('/installateur-strasshof', fn() => view('Installateur-district.installateur-strasshof'))->name('installateur-strasshof');
Route::get('/installateur-traiskirchen', fn() => view('Installateur-district.installateur-traiskirchen'))->name('installateur-traiskirchen');
Route::get('/installateur-tulln', fn() => view('Installateur-district.installateur-tulln'))->name('installateur-tulln');
Route::get('/installateur-vosendorf', fn() => view('Installateur-district.installateur-vosendorf'))->name('installateur-vosendorf');
Route::get('/installateur-wiener', fn() => view('Installateur-district.installateur-wiener'))->name('installateur-wiener');




Route::get('/installateur-notdienst-1010-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1010-wien'))->name('installateur-notdienst-1010-wien');
Route::get('/installateur-notdienst-1020-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1020-wien'))->name('installateur-notdienst-1020-wien');
Route::get('/installateur-notdienst-1030-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1030-wien'))->name('installateur-notdienst-1030-wien');
Route::get('/installateur-notdienst-1040-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1040-wien'))->name('installateur-notdienst-1040-wien');
Route::get('/installateur-notdienst-1050-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1050-wien'))->name('installateur-notdienst-1050-wien');
Route::get('/installateur-notdienst-1060-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1060-wien'))->name('installateur-notdienst-1060-wien');
Route::get('/installateur-notdienst-1070-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1070-wien'))->name('installateur-notdienst-1070-wien');
Route::get('/installateur-notdienst-1080-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1080-wien'))->name('installateur-notdienst-1080-wien');
Route::get('/installateur-notdienst-1090-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1090-wien'))->name('installateur-notdienst-1090-wien');
Route::get('/installateur-notdienst-1100-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1100-wien'))->name('installateur-notdienst-1100-wien');
Route::get('/installateur-notdienst-1110-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1110-wien'))->name('installateur-notdienst-1110-wien');
Route::get('/installateur-notdienst-1120-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1120-wien'))->name('installateur-notdienst-1120-wien');
Route::get('/installateur-notdienst-1130-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1130-wien'))->name('installateur-notdienst-1130-wien');
Route::get('/installateur-notdienst-1140-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1140-wien'))->name('installateur-notdienst-1140-wien');
Route::get('/installateur-notdienst-1150-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1150-wien'))->name('installateur-notdienst-1150-wien');
Route::get('/installateur-notdienst-1160-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1160-wien'))->name('installateur-notdienst-1160-wien');
Route::get('/installateur-notdienst-1170-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1170-wien'))->name('installateur-notdienst-1170-wien');
Route::get('/installateur-notdienst-1180-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1180-wien'))->name('installateur-notdienst-1180-wien');
Route::get('/installateur-notdienst-1190-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1190-wien'))->name('installateur-notdienst-1190-wien');
Route::get('/installateur-notdienst-1200-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1200-wien'))->name('installateur-notdienst-1200-wien');
Route::get('/installateur-notdienst-1210-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1210-wien'))->name('installateur-notdienst-1210-wien');
Route::get('/installateur-notdienst-1220-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1220-wien'))->name('installateur-notdienst-1220-wien');
Route::get('/installateur-notdienst-1230-wien', fn() => view('installateur-notdienst-wien.installateur-notdienst-1230-wien'))->name('installateur-notdienst-1230-wien');






Route::get('/thermentausch-1010-wien', fn() => view('thermentausch-wien.thermentausch-1010-wien'))->name('thermentausch-1010-wien');
Route::get('/thermentausch-1020-wien', fn() => view('thermentausch-wien.thermentausch-1020-wien'))->name('thermentausch-1020-wien');
Route::get('/thermentausch-1030-wien', fn() => view('thermentausch-wien.thermentausch-1030-wien'))->name('thermentausch-1030-wien');
Route::get('/thermentausch-1040-wien', fn() => view('thermentausch-wien.thermentausch-1040-wien'))->name('thermentausch-1040-wien');
Route::get('/thermentausch-1050-wien', fn() => view('thermentausch-wien.thermentausch-1050-wien'))->name('thermentausch-1050-wien');
Route::get('/thermentausch-1060-wien', fn() => view('thermentausch-wien.thermentausch-1060-wien'))->name('thermentausch-1060-wien');
Route::get('/thermentausch-1070-wien', fn() => view('thermentausch-wien.thermentausch-1070-wien'))->name('thermentausch-1070-wien');
Route::get('/thermentausch-1080-wien', fn() => view('thermentausch-wien.thermentausch-1080-wien'))->name('thermentausch-1080-wien');
Route::get('/thermentausch-1090-wien', fn() => view('thermentausch-wien.thermentausch-1090-wien'))->name('thermentausch-1090-wien');
Route::get('/thermentausch-1100-wien', fn() => view('thermentausch-wien.thermentausch-1100-wien'))->name('thermentausch-1100-wien');
Route::get('/thermentausch-1110-wien', fn() => view('thermentausch-wien.thermentausch-1110-wien'))->name('thermentausch-1110-wien');
Route::get('/thermentausch-1120-wien', fn() => view('thermentausch-wien.thermentausch-1120-wien'))->name('thermentausch-1120-wien');
Route::get('/thermentausch-1130-wien', fn() => view('thermentausch-wien.thermentausch-1130-wien'))->name('thermentausch-1130-wien');
Route::get('/thermentausch-1140-wien', fn() => view('thermentausch-wien.thermentausch-1140-wien'))->name('thermentausch-1140-wien');
Route::get('/thermentausch-1150-wien', fn() => view('thermentausch-wien.thermentausch-1150-wien'))->name('thermentausch-1150-wien');
Route::get('/thermentausch-1160-wien', fn() => view('thermentausch-wien.thermentausch-1160-wien'))->name('thermentausch-1160-wien');
Route::get('/thermentausch-1170-wien', fn() => view('thermentausch-wien.thermentausch-1170-wien'))->name('thermentausch-1170-wien');
Route::get('/thermentausch-1180-wien', fn() => view('thermentausch-wien.thermentausch-1180-wien'))->name('thermentausch-1180-wien');
Route::get('/thermentausch-1190-wien', fn() => view('thermentausch-wien.thermentausch-1190-wien'))->name('thermentausch-1190-wien');
Route::get('/thermentausch-1200-wien', fn() => view('thermentausch-wien.thermentausch-1200-wien'))->name('thermentausch-1200-wien');
Route::get('/thermentausch-1210-wien', fn() => view('thermentausch-wien.thermentausch-1210-wien'))->name('thermentausch-1210-wien');
Route::get('/thermentausch-1220-wien', fn() => view('thermentausch-wien.thermentausch-1220-wien'))->name('thermentausch-1220-wien');
Route::get('/thermentausch-1230-wien', fn() => view('thermentausch-wien.thermentausch-1230-wien'))->name('thermentausch-1230-wien');



Route::get('/Thermenreparatur-1010-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1010-wien'))->name('Thermenreparatur-1010-wien');
Route::get('/Thermenreparatur-1020-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1020-wien'))->name('Thermenreparatur-1020-wien');
Route::get('/Thermenreparatur-1030-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1030-wien'))->name('Thermenreparatur-1030-wien');
Route::get('/Thermenreparatur-1040-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1040-wien'))->name('Thermenreparatur-1040-wien');
Route::get('/Thermenreparatur-1050-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1050-wien'))->name('Thermenreparatur-1050-wien');
Route::get('/Thermenreparatur-1060-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1060-wien'))->name('Thermenreparatur-1060-wien');
Route::get('/Thermenreparatur-1070-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1070-wien'))->name('Thermenreparatur-1070-wien');
Route::get('/Thermenreparatur-1080-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1080-wien'))->name('Thermenreparatur-1080-wien');
Route::get('/Thermenreparatur-1090-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1090-wien'))->name('Thermenreparatur-1090-wien');
Route::get('/Thermenreparatur-1100-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1100-wien'))->name('Thermenreparatur-1100-wien');
Route::get('/Thermenreparatur-1110-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1110-wien'))->name('Thermenreparatur-1110-wien');
Route::get('/Thermenreparatur-1120-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1120-wien'))->name('Thermenreparatur-1120-wien');
Route::get('/Thermenreparatur-1130-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1130-wien'))->name('Thermenreparatur-1130-wien');
Route::get('/Thermenreparatur-1140-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1140-wien'))->name('Thermenreparatur-1140-wien');
Route::get('/Thermenreparatur-1150-wien', fn() => view('Thermenreparatur-wien.Thermenreparatur-1150-wien'))->name('Thermenreparatur-1150-wien');



