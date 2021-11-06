<?php
/**
 * Parking lookup for the reservation
 * No need for CRUD here
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parking;


class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('parking/all', ['parkings' => Parking::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parking/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Parking $parking)
    {
        return view('parking/show', ['parking' => $parking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Parking $parking)
    {
        return view('parking/edit', ['parking' => $parking]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parking $parking)
    {
        //
        throw new Exception('Modifications in the database only through API calls');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parking $parking)
    {
        throw new Exception('Modifications in the database only through API calls');
    }
}
