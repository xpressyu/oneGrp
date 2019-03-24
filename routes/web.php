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
})->name('welcome');

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
})->name('grandH');

Route::get('/projectDetail/Deicorp/highlineA1', function () {
    return view('projectDetail.Deicorp.highlineA1');
})->name('highline');

Route::get('/projectDetail/Deicorp/southVillage', function () {
    return view('projectDetail.Deicorp.southVillage');
})->name('southVillage');

Route::get('/projectDetail/Deicorp/theSiding', function () {
    return view('projectDetail.Deicorp.theSiding');
})->name('theSiding');

Route::get('/projectDetail/Deicorp/tntApa', function () {
    return view('projectDetail.Deicorp.tntApa');
})->name('tntApa');

//BM
Route::get('/projectDetail/Bm/vivid', function () {
    return view('projectDetail.Bm.vivid');
})->name('vivid');

Route::get('projectDetail/Bm/theAlbanyOne', function () {
    return view('projectDetail.Bm.theAlbanyOne');
})->name('theAlbanyOne');

Route::get('/projectDetail/Bm/melroseParkTwo', function () {
    return view('projectDetail.Bm.melroseParkTwo');
})->name('melrosePark');

//Frasers
Route::get('/projectDetail/Frasers/botany', function () {
    return view('projectDetail.Frasers.botany');
})->name('botany');

Route::get('/projectDetail/Frasers/northRyde', function () {
    return view('projectDetail.Frasers.northRyde');
})->name('northRyde');

Route::get('/projectDetail/Frasers/putneyHill', function () {
    return view('projectDetail.Frasers.putneyHill');
})->name('putneyHill');

//Meriton
Route::get('/projectDetail/Meriton/altitudeParramatta', function () {
    return view('projectDetail.Meriton.altitudeParramatta');
})->name('altitudeParramatta');

Route::get('/projectDetail/Meriton/aquaRhodes', function () {
    return view('projectDetail.Meriton.aquaRhodes');
})->name('aquaRhodes');

Route::get('/projectDetail/Meriton/botaniaOlympicP', function () {
    return view('projectDetail.Meriton.botaniaOlympicP');
})->name('botania');

Route::get('/projectDetail/Meriton/escadaORiordan', function () {
    return view('projectDetail.Meriton.escadaORiordan');
})->name('escada');

Route::get('/projectDetail/Meriton/kiaraMascot', function () {
    return view('projectDetail.Meriton.kiaraMascot');
})->name('kiaraMascot');

Route::get('/projectDetail/Meriton/lighthouseDeeW', function () {
    return view('projectDetail.Meriton.lighthouseDeeW');
})->name('lighthouse');

Route::get('/projectDetail/Meriton/pagewood4Dahlia', function () {
    return view('projectDetail.Meriton.pagewood4Dahlia');
})->name('pagewood4');

Route::get('/projectDetail/Meriton/pagewood5Allium', function () {
    return view('projectDetail.Meriton.pagewood5Allium');
})->name('pagewood5');

Route::get('/projectDetail/Meriton/riverviewRhodes', function () {
    return view('projectDetail.Meriton.riverviewRhodes');
})->name('riverviewRhodes');

Route::get('/projectDetail/Meriton/spectrumMascot', function () {
    return view('projectDetail.Meriton.spectrumMascot');
})->name('spectrumMascot');

Route::get('/projectDetail/Meriton/thegalleryRosebery', function () {
    return view('projectDetail.Meriton.thegalleryRosebery');
})->name('thegalleryRosebery');

Route::get('/projectDetail/Meriton/thegalleryMintRosebery', function () {
    return view('projectDetail.Meriton.thegalleryMintRosebery');
})->name('thegalleryMint');

Route::get('/projectDetail/Meriton/thegalleryPoloRosebery', function () {
    return view('projectDetail.Meriton.thegalleryPoloRosebery');
})->name('thegalleryPolo');

Route::get('/projectDetail/Meriton/theRetreatOlympicP', function () {
    return view('projectDetail.Meriton.theRetreatOlympicP');
})->name('theRetreat');

Route::get('/projectDetail/Meriton/vidaMascot', function () {
    return view('projectDetail.Meriton.vidaMascot');
})->name('vidaMascot');

//Metro
Route::get('/projectDetail/Metro/silkTerracesSchofields', function () {
    return view('projectDetail.Metro.silkTerracesSchofields');
})->name('silkTerraces');

Route::get('/projectDetail/Metro/sierraResidencesKellyville', function () {
    return view('projectDetail.Metro.sierraResidencesKellyville');
})->name('sierraResidence');

Route::get('/projectDetail/Metro/edenCatherineField', function () {
    return view('projectDetail.Metro.edenCatherineField');
})->name('eden');

Route::get('/projectDetail/Metro/theCCJordanSprings', function () {
    return view('projectDetail.Metro.theCCJordanSprings');
})->name('theCCJordan');

Route::get('/projectDetail/Metro/theCCClaymore', function () {
    return view('projectDetail.Metro.theCCClaymore');
})->name('theCCClaymore');

Route::get('/projectDetail/Metro/theNinesNaremburn', function () {
    return view('projectDetail.Metro.theNinesNaremburn');
})->name('theNinesNaremburn');

Route::get('/projectDetail/Metro/fairwayResidence', function () {
    return view('projectDetail.Metro.fairwayResidence');
})->name('fairway');

Route::get('/projectDetail/Metro/leppington', function () {
    return view('projectDetail.Metro.leppington');
})->name('leppington');

Route::get('/projectDetail/Metro/orchard', function () {
    return view('projectDetail.Metro.orchard');
})->name('orchard');

Route::get('/projectDetail/Metro/theGables', function () {
    return view('projectDetail.Metro.theGables');
})->name('theGables');

// Greenland
Route::get('/projectDetail/Greenland/parkSydney', function () {
    return view('projectDetail.Greenland.parkSydney');
})->name('parkSydney');

Route::get('/projectDetail/Greenland/omnia', function () {
    return view('projectDetail.Greenland.omnia');
})->name('omnia');
Route::get('/projectDetail/Greenland/nbh', function () {
    return view('projectDetail.Greenland.nbh');
})->name('nbh');

Route::get('/projectDetail/Greenland/lucent', function () {
    return view('projectDetail.Greenland.lucent');
})->name('lucent');

Route::get('/projectDetail/Greenland/lg', function () {
    return view('projectDetail.Greenland.lg');
})->name('lg');

Route::get('/projectDetail/Greenland/centre', function () {
    return view('projectDetail.Greenland.centre');
})->name('centre');

// Route for enquiry page
Route::get('/sendemail', 'SendEmailController@index')->name('SEND_EMAIL');
Route::post('/sendemail/send', 'SendEmailController@send');

//Route for social service
Route::get('/socialService', function () {
    return view('socialService');
})->name('social');

//Route for top 10
Route::get('/projectList/top10', function () {
    return view('projectList.top10');
})->name('top10');

//Route for staff
Route::get('/staff', function () {
    return view('staff');
})->name('staff');

//Route for company
Route::get('/company', function () {
    return view('company');
})->name('company');
//Route for sydney
Route::get('/sydney', function () {
    return view('sydney');
})->name('sydney');

//Route for project list
Route::get('/projectList/Metro', function () {
    return view('projectList.Metro');
})->name('metro');

Route::get('/projectList/Deicorp', function () {
    return view('projectList.Deicorp');
})->name('deicorp');

Route::get('/projectList/BM', function () {
    return view('projectList.BM');
})->name('bm');

Route::get('/projectList/Meriton', function () {
    return view('projectList.Meriton');
})->name('meriton');

Route::get('/projectList/Greenland', function () {
    return view('projectList.Greenland');
})->name('greenland');

Route::get('/projectList/Frasers', function () {
    return view('projectList.Frasers');
})->name('frasers');

Route::get('/projectList', function () {
    return view('projectList.PropertyList');
})->name('list');


// Route for north
Route::get('/sydney/north', function () {
    return view('sydney.north');
})->name('north');
// Route for south
Route::get('/sydney/south', function () {
    return view('sydney.south');
})->name('south');
// Route for west
Route::get('/sydney/west', function () {
    return view('sydney.west');
})->name('west');
// Route for east
Route::get('/sydney/east', function () {
    return view('sydney.east');
})->name('east');