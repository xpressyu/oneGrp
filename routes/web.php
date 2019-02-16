<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('project', 'ProjectController');
Route::get('/search', 'ProjectController@search');

// Route for admin
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Admin\RegisterController@register');
Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
Route::get('admin', 'AdminController@index')->name('admin.home');

//Route for project detail

//Deicorp
Route::get('/projectDetail/Deicorp/grandHAB', function () {
    return view('projectDetail.Deicorp.grandHAB');
});
Route::get('/projectDetail/Deicorp/highlineA1', function () {
    return view('projectDetail.Deicorp.highlineA1');
});
Route::get('/projectDetail/Deicorp/southVillage', function () {
    return view('projectDetail.Deicorp.southVillage');
});
Route::get('/projectDetail/Deicorp/theSiding', function () {
    return view('projectDetail.Deicorp.theSiding');
});
Route::get('/projectDetail/Deicorp/tntApa', function () {
    return view('projectDetail.Deicorp.tntApa');
});

//BM
Route::get('/projectDetail/Bm/vivid', function () {
    return view('projectDetail.Bm.vivid');
});
Route::get('projectDetail/Bm/theAlbanyOne', function () {
    return view('projectDetail.Bm.theAlbanyOne');
});
Route::get('/projectDetail/Bm/melroseParkTwo', function () {
    return view('projectDetail.Bm.melroseParkTwo');
});

//Frasers
Route::get('/projectDetail/Frasers/botany', function () {
    return view('projectDetail.Frasers.botany');
});
Route::get('/projectDetail/Frasers/northRyde', function () {
    return view('projectDetail.Frasers.northRyde');
});
Route::get('/projectDetail/Frasers/putneyHill', function () {
    return view('projectDetail.Frasers.putneyHill');
});


//Meriton
Route::get('/projectDetail/Meriton/altitudeParramatta', function () {
    return view('projectDetail.Meriton.altitudeParramatta');
});
Route::get('/projectDetail/Meriton/aquaRhodes', function () {
    return view('projectDetail.Meriton.aquaRhodes');
});
Route::get('/projectDetail/Meriton/botaniaOlympicP', function () {
    return view('projectDetail.Meriton.botaniaOlympicP');
});
Route::get('/projectDetail/Meriton/escadaORiordan', function () {
    return view('projectDetail.Meriton.escadaORiordan');
});
Route::get('/projectDetail/Meriton/kiaraMascot', function () {
    return view('projectDetail.Meriton.kiaraMascot');
});
Route::get('/projectDetail/Meriton/lighthouseDeeW', function () {
    return view('projectDetail.Meriton.lighthouseDeeW');
});
Route::get('/projectDetail/Meriton/pagewood4Dahlia', function () {
    return view('projectDetail.Meriton.pagewood4Dahlia');
});
Route::get('/projectDetail/Meriton/pagewood5Allium', function () {
    return view('projectDetail.Meriton.pagewood5Allium');
});
Route::get('/projectDetail/Meriton/riverviewRhodes', function () {
    return view('projectDetail.Meriton.riverviewRhodes');
});
Route::get('/projectDetail/Meriton/spectrumMascot', function () {
    return view('projectDetail.Meriton.spectrumMascot');
});
Route::get('/projectDetail/Meriton/thegalleryRosebery', function () {
    return view('projectDetail.Meriton.thegalleryRosebery');
});
Route::get('/projectDetail/Meriton/thegalleryMintRosebery', function () {
    return view('projectDetail.Meriton.thegalleryMintRosebery');
});
Route::get('/projectDetail/Meriton/thegalleryPoloRosebery', function () {
    return view('projectDetail.Meriton.thegalleryPoloRosebery');
});
Route::get('/projectDetail/Meriton/theRetreatOlympicP', function () {
    return view('projectDetail.Meriton.theRetreatOlympicP');
});
Route::get('/projectDetail/Meriton/vidaMascot', function () {
    return view('projectDetail.Meriton.vidaMascot');
});


//Metro
Route::get('/projectDetail/Metro/silkTerracesSchofields', function () {
    return view('projectDetail.Metro.silkTerracesSchofields');
});

Route::get('/projectDetail/Metro/sierraResidencesKellyville', function () {
    return view('projectDetail.Metro.sierraResidencesKellyville');
});

Route::get('/projectDetail/Metro/edenCatherineField', function () {
    return view('projectDetail.Metro.edenCatherineField');
});

Route::get('/projectDetail/Metro/theCCJordanSprings', function () {
    return view('projectDetail.Metro.theCCJordanSprings');
});

Route::get('/projectDetail/Metro/theCCClaymore', function () {
    return view('projectDetail.Metro.theCCClaymore');
});

Route::get('/projectDetail/Metro/theNinesNaremburn', function () {
    return view('projectDetail.Metro.theNinesNaremburn');
});

// Greenland

Route::get('/projectDetail/Greenland/parkSydney', function () {
    return view('projectDetail.Greenland.parkSydney');
});
Route::get('/projectDetail/Greenland/omnia', function () {
    return view('projectDetail.Greenland.omnia');
});
Route::get('/projectDetail/Greenland/nbh', function () {
    return view('projectDetail.Greenland.nbh');
});
Route::get('/projectDetail/Greenland/lucent', function () {
    return view('projectDetail.Greenland.lucent');
});
Route::get('/projectDetail/Greenland/lg', function () {
    return view('projectDetail.Greenland.lg');
});
Route::get('/projectDetail/Greenland/centre', function () {
    return view('projectDetail.Greenland.centre');
});