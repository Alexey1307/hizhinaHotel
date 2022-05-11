<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send(){
        Mail::send(['text' => 'mail'], ['name', 'Hizhina'], function($message){
            $message->to('hizhinaHotel@yandex.ru', 'Дорогому гостю')->subject('Бронирование');
            $message->from('hizhinaHotel@yandex.ru', 'Хижина');
        });
    }
}
