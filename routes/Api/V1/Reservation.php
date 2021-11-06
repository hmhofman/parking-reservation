<?php 

/**
 * Create Routes to CRUD actions for reservations (ReservationController)
 * Not all webservers support Put/Patch/Delete HTTP Verbs
 * Therefore: double routes to use POST as backup
 */
Route::group(['prefix'  => 'reservation', 'as' => 'reservation.'], function() {

    Route::get('', [
        'as' => 'index',
        'uses' => 'ReservationController@index'
    ]);

    /**
     * Get the form for a new TO create reservation
     */
    Route::get('create', [
        'as' => 'create',
        'uses' => 'ReservationController@create'
    ]);

    /**
     * Save the new reservation to the database
     * Crud
     */
    Route::post('', [
        'as' => 'store',
        'uses' => 'ReservationController@store'
    ]);

    /**
     * cRud
     */
    Route::get('{reservation}', [
        'as' => 'show',
        'uses' => 'ReservationController@show'
    ]);

    /**
     * Show the form to edit
     * crUd
     */
    Route::get('{reservation}/edit', [
        'as' => 'edit',
        'uses' => 'ReservationController@edit'
    ]);

    /**
     * crUd
     */
    Route::put('{reservation}', [
        'as' => 'update',
        'uses' => 'ReservationController@update'
    ]);
    
    Route::post('{reservation}/update', [
        'as' => 'update',
        'uses' => 'ReservationController@update'
    ]);

    /**
     * cruD
     */
    Route::delete('{reservation}', [
        'as' => 'destroy',
        'uses' => 'ReservationController@destroy'
    ]);
    Route::post('{reservation}/delete', [
        'as' => 'destroy',
        'uses' => 'ReservationController@destroy'
    ]);
});