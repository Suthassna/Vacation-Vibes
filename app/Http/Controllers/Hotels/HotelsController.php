<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment\Apartment;
use App\Models\Booking\Booking;
use App\Models\Hotel\Hotel;
use Auth;
use DateTime;


class HotelsController extends Controller
{

    


    public function rooms($id) {

        $getRooms = Apartment::select () ->orderBy('id', 'desc')->take(6)
        ->where('hotel_id', $id)->get();

        // Return the rooms view with the fetched rooms
        return view('hotels.rooms', compact('getRooms'));
    }



    public function roomsDetails($id) {

        $getRoom = Apartment::find($id);

        // Return the rooms view with the fetched rooms
        return view('hotels.roomdetails', compact('getRoom'));
    }

    public function roomsBooking(Request $request, $id) {

        $room = Apartment::find($id);
        $hotel = Hotel::find($id);


        if (!$room) {
            return response()->json(['error' => 'Room not found'], 404);  // Return an error if the room is not found
        }
    
        // Check if the hotel exists
        if (!$hotel) {
            return response()->json(['error' => 'Hotel not found'], 404);  // Return an error if the hotel is not found
        }

        if(strval(date("n/j/Y")) <strval($request->check_in) AND strval(date("n/j/Y")) < strval($request->check_out)){

            if($request->check_in < $request->check_out) {

                $datetime1 = new DateTime($request->check_in);
                $datetime2 = new DateTime($request->check_out);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');


                $bookRooms = Booking::create([

                    "name" => $request->name,
                    "mail" => $request->email,
                    "phone_number" => $request->phone_number,
                    "Check_in" => $request->check_in,
                    "Check_out" => $request->check_out,
                    "days" => $days,
                    "price" => 0,
                    "user_id" => Auth::user()->id,
                    "room_name" => $room->name,
                    "hotel_name" => $hotel->name,
                ]);

                echo "you booked successfully";


            } else {
                echo "check out date should be greater than check in date";

            }
        
        
        } else {

            echo "Invalid Check in/Check out dates";

        }
    
    }

}    
