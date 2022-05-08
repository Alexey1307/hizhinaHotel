<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::post('booking/submit',
'App\Http\Controllers\BookingController@submit');

Route::get('allData',
'App\Http\Controllers\BookingController@allData')->name('all_data_');

Route::get('allData/{id}',
'App\Http\Controllers\BookingController@oneData')->name('one_data');