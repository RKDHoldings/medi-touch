<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WomansDayBooking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bookingDocs(){
        return $this->hasOne(BookingDoctor::class, 'womans_day_booking_id');
    }
}
