<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 'email', 'phone', 'alt_phone', 'total_seats', 'total_price', 'departure', 'arrival', 'booking_date'
    ];
}
