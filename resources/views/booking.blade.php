{{-- Для вывода ошибок валидации --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li style="background-color: green; color:aliceblue; padding:1em;"> {{$error}} </li>
        @endforeach
    @endif <br>

<form action="/booking/submit" method="POST">
    @csrf

    <div class="formWrapper">
        <label for="name">Фамилия Имя Отчетство</label><br>
        <input type="text" name="name" id="name" placeholder="ФИО"><br><br>
    </div>
    <div class="formWrapper">
        <label for="phone">Номер телефона</label><br>
        <input type="text" name="phone" id="phone" placeholder="Телефон"><br><br>
    </div>
    <div class="formWrapper">
        <label for="email">Электронная почта</label><br>
        <input type="text" name="email" id="email" placeholder="Email"><br><br>
    </div>
    <div class="formWrapper">
        <label for="enterDate">enterDate</label><br>
        <input type="date" name="enterDate" id="enterDate""><br><br>
    </div>
    <div class="formWrapper">
        <label for="outDate">outDate</label><br>
        <input type="date" name="outDate" id="outDate""><br><br>
    </div>
    <div class="formWrapper">
        <label for="countRooms">countRooms</label><br>
        <input type="text" name="countRooms" id="countRooms" placeholder="countRooms"><br><br>
    </div>
    <div class="formWrapper">
        <label for="guestComments">Коментарий</label><br>
        <input type="text" name="guestComments" id="guestComments" placeholder="Пожелания"><br><br>
    </div>
    <div class="formWrapper">
        <label for="paymentType">Тип оплаты</label><br>
        <input type="text" name="paymentType" id="paymentType" placeholder="Сдесь надо сделать чекбоксы"><br><br>
    </div>
    <div class="formWrapper">
        <label for="prepayment">prepayment</label><br>
        <input type="text" name="prepayment" id="prepayment" placeholder="prepayment"><br><br>
    </div>
    <div class="formWrapper">
        <label for="payment">payment</label><br>
        <input type="text" name="payment" id="payment" placeholder="payment"><br><br>
    </div>
    <div class="formWrapper">
        <label for="checkInHotel">checkInHotel</label><br>
        <input type="text" name="checkInHotel" id="checkInHotel" placeholder="checkInHotel"><br><br>
    </div>
    
    <button class="bookingSubmit" type="submit">Забронировать</button>
</form>