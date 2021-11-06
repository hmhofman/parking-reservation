<?php 

namespace App\Http\Api;

use App\Http\Api\ApiController;


/**
 * The web-controller takes care of blade -stuff
 * This controller should take care of the actual CRUD 
 */
class ReservationController extends ApiController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Reservation();
        if ($model->save()) {
            return response()->json(['reservation' => $model]);
        } else {
            return response()->error(500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        // $reservation->id = 
        $reservation->arrival = 
        $reservation->departure = 
        $reservation->status = 
        $reservation->parking_id = 
        $reservation->spot = 
        $reservation->license_plate = 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        throw new Exception('Modifications in the database only through API calls');
    }
}