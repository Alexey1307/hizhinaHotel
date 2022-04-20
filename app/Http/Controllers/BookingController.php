<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller{

    public function bookingRoom(BookingRequest $req){
        $booking = new Booking();
        $booking->name = $req->input('name');
        $booking->phone = $req->input('phone');
        $booking->email = $req->input('email');

        $booking->enterDate = $req->input('enterDate');
        $booking->outDate = $req->input('outDate');
        $booking->countRooms = $req->input('countRooms');
        $booking->guestComments = $req->input('guestComments');

        $booking->paymentType = $req->input('paymentType');
        $booking->prepayment = $req->input('prepayment');
        $booking->payment = $req->input('payment');
        $booking->checkInHotel = $req->input('checkInHotel');

        $booking->save();

        return redirect()->route('/'); //А оно нужно? переадрессация! with sucsses ->Сообщение было отправлено!
    }
}
