
    <div>
         <h3>Id: 
            <span style="color: green">{{ $data->id }}</span>
        </h3>
        <h3>Имя: 
            <span style="color: green">{{ $data->name }}</span>
        </h3>
        <h3>Телефон: 
            <span style="color: green">{{ $data->phone }}</span>
        </h3>
        <h3>Почта: 
            <span style="color: green">{{ $data->email }}</span>
        </h3>
        <h3>Дата заезда: 
            <span style="color: green">{{ $data->enterDate }}</span>
        </h3>
        <h3>Дата выезда: 
            <span style="color: green">{{ $data->outDate }}</span>
        </h3>
        <h3>Количество номеров: 
            <span style="color: green">{{ $data->countRooms }}</span>
        </h3>
        <h3>Коментариий к бронированию: 
            <span style="color: green">{{ $data->guestComments }}</span>
        </h3>
        <h3>Предоплата: 
            <span style="color: green">{{ $data->prepayment }}</span>
        </h3>
        <h3>Остаток к оплате: <span style="color: green">{{ $data->payment }}</span>
        </h3>
    </div>