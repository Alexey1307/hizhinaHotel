<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('phone');
            $table->string('email');

            $table->date('enterDate');
            $table->date('outDate');
            $table->integer('countRooms');
            $table->text('guestComments'); // пожелания / коментарии гостя

            $table->string('paymentType'); // наличка, онлайн
            $table->integer('prepayment'); // предоплата
            $table->integer('payment'); // здесь будет считаться остаток к оплате
            $table->boolean('checkInHotel'); // статус - заезд / незаезд
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
