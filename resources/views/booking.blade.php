<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Бронирование</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <a href="/">На главную</a> <br>

    {{-- Для вывода ошибок валидации --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li style="background-color: green; color:aliceblue; padding:1em;"> {{$error}} </li>
        @endforeach
    @endif <br>

    <form action="/booking/submit" method="POST" class="calendarWrapper">
        @csrf
        <div class="calendar">

            <div class="item">
                <label for="name">Ваше имя</label>
            </div>
            <div class="item">
                <input type="text" name="name" id="name" placeholder="ФИО">
            </div>
            
            <div class="item">
                <label for="phone">Номер телефона</label>
            </div>
            <div class="item">
                <input type="text" name="phone" id="phone" placeholder="Телефон">
            </div>
            
            <div class="item">
                <label for="email">Электронная почта (при наличии)</label>
            </div>
            <div class="item">
                <input type="text" name="email" id="email" placeholder="Email">
            </div>
            
            <div class="item">
                <label for="enterDate">Дата заезда</label>
            </div>
            <div class="item">
                <input class="start_date" type="date" name="enterDate" id="enterDate">
            </div>

            <div class="item">
                <label for="outDate">Дата выезда</label>
            </div>
            <div class="item">
                <input class="end_date" type="date" name="outDate" id="outDate">
            </div>

            <div class="item item_5">
                <label for="countRooms">Выберите количество номеров</label>
            </div>
            <div class="item" name="countRooms" id="countRooms">
                {{-- <select name="rooms" id="countRooms">
                    <option value="1 номер">1 номер</option>
                    <option value="2 номера">2 номера</option>
                    <option value="3 номера">3 номера</option>
                </select> --}}
                <input type="text" name="countRooms" id="countRooms" placeholder="countRooms">
            </div>
            

            <div class="item">
                <label for="guestComments">Коментарий к бронированию</label>
            </div>
            <div class="item">
                <textarea name="guestComments" id="guestComments" cols="30" rows="9" placeholder="Здесь вы можете указать время прибытия, обозначить необходимость дополнительного места для ребенка, или рассказать о вашем питомце которого вы бы хотели взять с собой!"></textarea>
            </div>

            <div class="item">
                <label for="prepayment">Сумма предоплаты.</label>
            </div>
            <div class="item">
                <textarea name="prepayment" id="prepayment" cols="30" rows="4" placeholder="Вы можете внести предоплату от 1000р, или оплатить бронирвание полностью."></textarea>
            </div>

            <div class="item">
                <label for="payment">Остаток к оплате при заселении</label>
            </div>
            <div class="item">
                <input type="text" name="payment" id="payment">
                <div class="item out_3"><output name="payment" id="payment"></output></div>
            </div>

            <div class="item">Даты:</div>
            <div class="item out"><output></output></div>

            <div class="item">Количество ночей:</div>
            <div class="item out_2"><output></output></div>

            <div class="item">Сумма</div>
            <div class="item out_3"><output></output></div>

            <button type="submit" class="button bookingSubmit">Забронировать</button>
        </div>
    </form>

    <script src="js/calendar.js"></script>
</body>
</html>