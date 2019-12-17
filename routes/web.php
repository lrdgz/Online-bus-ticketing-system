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

//Operator Routes
Route::resource('operator', 'OperatorController');

//Bus Routes
Route::resource('bus', 'BusController');

//Region Routes
Route::resource('region', 'RegionController');

//Sub Region Routes
Route::resource('sub-region', 'SubRegionController');
