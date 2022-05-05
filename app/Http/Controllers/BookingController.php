<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Http\Requests\BookingRequest;

class BookingController extends Controller{

    public function submit(BookingRequest $req){
        $booking = new Booking();
        $booking->name = $req->input('name');
        $booking->phone = $req->input('phone');
        $booking->email = $req->input('email');

        $booking->enterDate = $req->input('enterDate');
        $booking->outDate = $req->input('outDate');
        $booking->countRooms = $req->input('countRooms');
        $booking->guestComments = $req->input('guestComments');

        $booking->prepayment = $req->input('prepayment');
        $booking->payment = $req->input('payment');

        $booking->save();

        return view('messages');
    }

    public function allData()
    {
        // dd(Booking::all());
        return view('allData', ['data' => Booking::all()]);
    }
}