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
        <label for="guestComments">Коментарий</label><br>
        <input type="text" name="guestComments" id="guestComments" placeholder="Пожелания"><br><br>
    </div>
    <div class="formWrapper">
        <label for="paymentType">Тип оплаты</label><br>
        <input type="text" name="paymentType" id="paymentType" placeholder="Сдесь надо сделать чекбоксы"><br><br>
    </div>
    
    <button class="bookingSubmit" type="submit">Забронировать</button>
</form>