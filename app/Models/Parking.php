<?php
/**
 * Parking or location information 
 * This is (more of less) Static information. No need for CRUD
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    
    // Aparently, the default for Laravel is multiple?
    protected $table = 'parking';
}
