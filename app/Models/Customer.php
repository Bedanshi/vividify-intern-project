<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers'; // Make sure this matches your table name
    protected $fillable = ['name', 'email', 'phone', 'address', 'gender','password']; // Fillable fields

}
