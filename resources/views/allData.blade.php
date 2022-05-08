
@foreach ($data as $item)
    <div>
         <h3>Id: 
            <span style="color: green">{{ $item->id }}</span>
        </h3>
        <h3>Имя: 
            <span style="color: green">{{ $item->name }}</span>
        </h3>
        <h3>Телефон: 
            <span style="color: green">{{ $item->phone }}</span>
        </h3>
        <h3>Почта: 
            <span style="color: green">{{ $item->email }}</span>
        </h3>
        <h3>Дата заезда: 
            <span style="color: green">{{ $item->enterDate }}</span>
        </h3>
        <h3>Дата выезда: 
            <span style="color: green">{{ $item->outDate }}</span>
        </h3>
        <h3>Количество номеров: 
            <span style="color: green">{{ $item->countRooms }}</span>
        </h3>
        <h3>Коментариий к бронированию: 
            <span style="color: green">{{ $item->guestComments }}</span>
        </h3>
        <h3>Предоплата: 
            <span style="color: green">{{ $item->prepayment }}</span>
        </h3>
        <h3>Остаток к оплате: <span style="color: green">{{ $item->payment }}</span>
        </h3>
    </div>
    <a href=" {{ route('one_data', $item->id) }} "><button>Детальнее</button></a>
@endforeach

