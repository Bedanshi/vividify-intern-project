<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings'; // Make sure this matches your table name
    protected $fillable = ['hotel', 'check_in', 'check_out', 'adult', 'child']; // Fillable fields

}
