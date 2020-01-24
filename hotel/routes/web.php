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
Route::get('/customer', 'VisitorController@showMyView')->name('customer');
Route::get('/room', 'VisitorController@showMyRoom')->name('room');
Route::get('/rate', 'VisitorController@showRate')->name('rate');
Route::get('/presentation', 'VisitorController@showPresentation')->name('presentation');
Route::get('/account', 'VisitorController@showAccount')->name('account');
Route::get('/info', 'VisitorController@showInfo')->name('information');
Route::get('/booking', 'VisitorController@showBooking')->name('booking');
Route::get('/game', 'VisitorController@showGame')->name('game');


Route::get('/createVisitor', 'VisitorController@createVisitors')->name('createVisitor');
Route::post('/storeVisitor', 'VisitorController@storeVisitors')->name('storeVisitor');

Route::get('/connect', 'VisitorController@showRegister')->name('connect');




Route::resource('events', 'EventController');

Route::group(['middleware' => ['auth']], function () {

    
    //Route::post('/storeVisitor', 'VisitorController@storeVisitors')->name('storeVisitor');
    //Route::get('/connect', 'VisitorController@showRegister')->name('connect');
});