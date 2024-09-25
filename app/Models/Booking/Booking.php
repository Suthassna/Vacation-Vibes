<?php

namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table ="bookings";

    protected $fillable = [
        'name',
        'mail',
        'phone_number',
        'Check_in',
        'Check_out',
        'days',
        'price',
        'user_id',
        'room_name',
        'hotel_name',
        'status'


    ];


    public $timestamps = true;
}
