<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Http\Requests\BookingRequest;
use Mail;

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

        Mail::send('mail', ['data' => [Booking::all()->last()]], function($message){
            $message->to('hizhinaHotel@yandex.ru', 'Дорогому гостю')->subject('Бронирование')
            ->cc('hizhinaHotel@yandex.ru',)->subject('Бронирование');
            $message->from('hizhinaHotel@yandex.ru', 'Хижина');
        });

        return view('messages');
    }


    //УБЕРИ ЭТО ПЕРЕД ПРОДАКШЕНОМ!!! УТЕЧКА БАЗЫ ДАННЫХ!!! или в админку
    public function allData()
    {
        return view('allData', ['data' => Booking::all()]);
        // return view('allData', ['data' => [Booking::find(1)]]); //find - метод для поиска записи из БД по ID.
        // return view('allData', ['data' => Booking::where('name', '=', 'Алексей')->get()]); //ищем по параметрам

    }

    public function oneData($id)
    {
        return view('oneData', ['data' => Booking::find($id)]);
    }
}