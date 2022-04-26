<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Http\Requests\BookingRequest;

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

        $booking->save();

//Валидация: можно здесь, через метод validate(), в который передается массив.
//Если здесь, то первый параметр 'Request', а не BookingRequest
//Но сейчас валидация перенесена в файл BookingRequest

        // $validation = $req->validate([
        //     'name' => 'required',
        //     'phone' => 'required|min:11',
        //     'email' => 'email',
        //     'outDate' => 'after:enterDate'
        // ]);

        // return redirect()->route('/messages');
        // return 'fuck you';
    }
}
