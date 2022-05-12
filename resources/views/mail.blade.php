Вы забронировали номер в Хижине!


@foreach ($data as $item)
    <div>
        <h3>Дата заезда: 
            <span style="color: green">{{ $item->enterDate }}</span>
        </h3>
        <h3>Дата выезда: 
            <span style="color: green">{{ $item->outDate }}</span>
        </h3>
        <h3>Количество номеров: 
            <span style="color: green">{{ $item->countRooms }}</span>
        </h3>
        <h3>Предоплата: 
            <span style="color: green">{{ $item->prepayment }}</span>
        </h3>
        <h3>Остаток к оплате: <span style="color: green">{{ $item->payment }}</span>
        </h3>
    </div>
@endforeach

<hr>
<h1 style="font-style:italic">Хижина</h1>
    <a href="tel:89184289606">8-918-428-96-06</a><br><br>
    <a href="https://t.me/hizhinaHotel" style="padding-right: 2em">Telegram</a>
    <a href="https://vk.com/club210847892">VK</a



 