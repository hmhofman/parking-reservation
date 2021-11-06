<?php 

namespace App\Http\Api;

use App\Http\Api\ApiController;
use App\Http\Jobs\SendMailJob;


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
        $model = $this->saveFill($request, new Reservation());
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
        $model = $this->saveFill($request, $reservation);

    }
    private function saveFill($request, $model)
    {
        // Autofill; do not override
        // $model->id = 
        dd($model);
        $model->arrival = $request->input('arrival');
        $model->departure = $request->input('arrival');
        if ($request->input('paid')) {
            $model->status = $model->status | Reservation::STATUS_PAID;
            dispatch(new SendMailJob($model));
        } else {
            $model->status = $model->status & ~ Reservation::STATUS_PAID;
        }
        $model->parking_id = $request->input('parking_id');
        $model->spot = $request->input('spot');
        $model->license_plate = $request->input('license_plate');
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