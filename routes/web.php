<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => 'parking', 'as' => 'parking.'], function() {
    Route::get('/', 'ParkingController@index');
    Route::get('/create', 'ParkingController@create'); // Show the form
    Route::get('/{parking}', 'ParkingController@show');
    Route::get('/{parking}/create', 'ParkingController@create');
    Route::get('/{parking}/edit', 'ParkingController@edit');
});
Route::group(['prefix' => 'reservation', 'as' => 'reservation.'], function() {
    Route::get('/', 'ReservationController@index');
    Route::get('/create', 'ReservationController@create'); // Show the form
    Route::get('/{reservation}', 'ReservationController@show');
    Route::get('/{reservation}/create', 'ReservationController@create');
    Route::get('/{reservation}/edit', 'ReservationController@edit');
});
