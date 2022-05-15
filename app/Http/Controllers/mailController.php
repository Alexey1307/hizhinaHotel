<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Booking;


class mailController extends Controller
{
    public function send(){
        // Mail::send(['text' => 'mail'], ['name', 'Hizhina'], function($message){
        // Mail::send('mail', ['name', 'Hizhina'], function($message){
        Mail::send('mail', ['data' => [Booking::all()->last()]], function($message){
            $message->to('hizhinaHotel@yandex.ru', 'Дорогому гостю')->subject('Бронирование');
            $message->from('hizhinaHotel@yandex.ru', 'Хижина');
        });

        return view('messages');
    }
}
