<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Parking;

class Reservation extends Model
{
    use HasFactory;

    /**
     * Status should not be 0;
     *
     * Start at 1, work up from there (bitwise)
     * Reserve some status flags for future updates
     */
    const STATUS_NEW = 1;
    // const STATUS_... = 2;
    // const STATUS_... = 4;
    /**
     * Once our status hits bit #4, (8: 0b1000 - 15: 0b1111), the reservation is paid.
     * Refunds not part of this assignment.
     *
     * @var [type]
     */
    const STATUS_PAID = 8;
    // const STATUS_... = 16;
    // const STATUS_... = 32;
    // const STATUS_...


    public function parking()
    {
        return $this->belongsTo('App\Models\Parking', 'parking_id', 'id');
    }
    /**
     * Check the status flags for the 'paid' one. 
     * All other flags don't matter here.
     */
    public function getIsPaidAttribute($value = null): bool
    {
        return ($this->status & self::STATUS_PAID) === self::STATUS_PAID;
    }
}
