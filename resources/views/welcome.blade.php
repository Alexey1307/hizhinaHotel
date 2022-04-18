<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hizhina</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>
<div class="container">
    <header>
        <nav class="navbar">
            <div class="leftSide">
                <div class="logo">Хижина</div>
            </div>
            <div class="rightSide">
                <div class="mainMenu">
                    <button class="buttonCalendar">Бронирование</button>
                    <button class="buttonRooms">Наши номера</button>
                    <button class="buttonMaps">Как проехать</button>
                    <button class="buttonContact">Контакты</button>
                </div>

            </div>
        </nav>
    </header>

        <div class="booking">
            <p class="bookingDescription">Посетите Хаджохскую теснину, водопады Руфабго, Кавказский Биосферный заповедник и
                Дольмены!<br>
                Пролетите на троллее над ущельем Мишоко!<br>
                Покатайтесь на лошадях и исследуйте Азишскую пещеру!</p>
    </div>
    <form action="" class="calendarWrapper">
        <a name="calendar" class="scroll"></a>
        <div class="calendar">
            <div class="item">
                <p>Дата заезда</p>
            </div>
            <div class="item"><input class="start_date" type="date"></div>
            <div class="item">
                <p>Дата выезда</p>
            </div>
            <div class="item"><input class="end_date" type="date"></div>
            <div class="item item_5">
                <p>Выберите количество номеров</p>
            </div>
            <div class="item">
                <select name="rooms" id="">
                    <option value="1 номер">1 номер</option>
                    <option value="2 номера">2 номера</option>
                    <option value="3 номера">3 номера</option>
                </select>
            </div>
            <div class="item">Даты:</div>
            <div class="item out"><output></output></div>
            <div class="item">Количество ночей:</div>
            <div class="item out_2"><output></output></div>
            <div class="item">Сумма</div>
            <div class="item out_3"><output></output></div>
            <button type="button" class="button">Забронировать</button>
        </div>
    </form>
        
    <div class="price">
        <span>Бронируйте отдых от 2000 &#8381</span>
    </div>


    <div class="roomsDescription">
        наши номера
    </div>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/images/room.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/room2.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/room3.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/kitchen.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/kitchen2.jpg" alt="интернета немамана"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div><br><br>
        <div class="swiper-pagination"></div>
    </div>

    <div class="roomsDescription">
        наш дворик
    </div>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/images/house.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/yard.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/yard2.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/yard3.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/room4.jpg" alt="интернета немамана"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div><br><br>
        <div class="swiper-pagination"></div>
    </div>

    <div class="roomsDescription">
        наша адыгея
    </div>
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="/images/adygea.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/adygea2.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/adygea3.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/adygea4.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/adygea5.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/adygea6.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/adygea7.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/adygea8.jpg" alt="интернета немамана"></div>
            <div class="swiper-slide"><img src="/images/adygea9.jpg" alt="интернета немамана"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> <br><br>
        <div class="swiper-pagination"></div>
    </div>

    <div class="roomsDescription">
        отзывы гостей
    </div>
    <div class="swiper" id="rewievs">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                Очень комфортные, уютные номера. Везде чистота и порядок. Хозяева всегда на связи. <br><br>
                Оксана. Booking.com
            </div>
            <div class="swiper-slide">
                Чисто, удобно, комфортно! Просторный номер, удобная кровать, большая общая кухня.
                Приветливый и доброжелательный хозяин
                и очаровательный Бакс! Большое спасибо за отдых! <br><br>
                Анастасия. Booking.com
            </div>
            <div class="swiper-slide">
                Здравствуйте, от души рекомендую вам это место. Самое главное, что нас подкупило это чистота номеров. На юге пожалуй это
                редкость. Плюсом ко всему имеется кухня, чистая и уютная. Также для любителей шашлыка и т.п имеется мангал и хорошая
                беседка! <br><br>
                Олег. Booking.com
            </div>
            <div class="swiper-slide">
                Спасибо Алексею за гостеприимство! Отличное место. Номер чистый , удобный , тёплый. Уютный дворик с беседкой и мангалом.
                Особая благодарность Баксу))) ты настоящий талисман этого места)! <br><br>
                Николай. Booking.com
            </div>
            <div class="swiper-slide">
                Хотелось бы отдельно отметить гостеприимство Алексея, его подсказки по местам посещения. Что касается самого места
                проживания. Сам гостевой дом новый, располагается в тихом месте, до кафе минут 10 ходьбы, магазин в 5, Пятерочка в
                минутах 15 через парк. Номер чистый, комфортный,удобная двуспальная кровать, в номере тепло, также присутствует
                конвектор(его не включали, и так тепло было), просторный балконом, сантехника вся работает, проблем с горячей водой не
                было. На улице есть беседка и мангальная зона. Отличное соотношение цена/качество. <br><br>
                Евгений. Booking.com
            </div>
            <div class="swiper-slide">
                Удобное месторасположение, часть достопримечательностей находится вблизи от отеля, часть в 30 минутах езды, в номерах
                панорамные окна, выходящие на балкон где вечером можно послушать шум реки, комнаты светлые и чистые, вся мебель и
                сантехника новая, было очень тепло и уютно как дома, отзывчивый и дружелюбный хозяин, если что надо все подскажет и
                поможет, а ещё отличное соотношение цена / качество, открыли для себя Адыгею и этот уютный отель, обязательно вернёмся. <br><br>
                Юлия. Booking.com
            </div>
            <div class="swiper-slide">
                Отличная атмосфера и гостеприимный хозяин, такое чувство будто у друзей отдыхал, все аккуратно и чисто. <br><br>
                Александр. Booking.com
            </div>
            <div class="swiper-slide">
                Встретил гостиприимный хозяин, всё рассказал, показал, спросил пожелания. Когда бронировала, было опасение, что мало
                отзывов. Прибыв на место и осмотрев жильё, всё понравилось и главное соответствует фото на сайте. Отдыхали с
                родственниками. Заняли на 2-м этаже всё 3 номера, потому в нашем распоряжении был весь этаж с кухней, а также мангальная
                зона и беседка. Дом, как оказалось совсем новый, номера с балконами: светлые, чистые, тёплые и аккуратные с новой
                мебелью. На кухне достаточно посуды, бокалов... Нам понравилось, рекомендую! По совету хозяина, сходили (находится
                рядом) на навесной мост, и речку. Вид с моста очень красивый, сходите не пожалеете. <br><br>
                Свтлана. Booking.com
            </div>
            <div class="swiper-slide">
                Заботливый, приветливый хозяин, чистота и уют в номере, все продумано до мелочей. Вся мебель новая из икеи, номер с
                отличным ремонтом, большая общая просторная кухня, в общем все, что надо для отличного отдыха как семьей, так и одному.
                Суперские панорамные окна, выходящие на веранду. Рекомендую всем. <br><br>
                Филипп. Booking.com
            </div>
            <div class="swiper-slide">
                Местонахождение, чистота, уют, удобная кровать и подушки, рядом река, замечательный хозяин, есть все необходимое для
                отдыха. Обязательно вернёмся. <br><br>
                Елена. Booking.com
            </div>
            <div class="swiper-slide">
                Отдыхали на выходных в этой прекрасной Хижине.. Это был семейный отдых , отмечали день рождение . Нас встретил очень
                приятный молодой хозяин этого дома , внимательный и вежливый . Номера очень чистые , уютные , светлые . Из каждого
                номера выход на балкон с видом на горы , кухня это мечта каждой хозяйки , столики с видом на горы .. Чистота и тепло ..
                Во дворе беседка и мангал ..Расположение прекрасное для семейного отдыха .. Рекомендую .!! 
                Еще Вернемся и не один раз..У вас все очень здорово..Спасибо за гостеприимство ..!!!! <br><br>
                Елена. Yandex.ru/maps
            </div>
            <div class="swiper-slide">
                Прекрасное место. Очень чисто, уютно, большое пространство и удобное расположение. Красивые большие окна, балкон в
                каждой комнате.
                Новый ремонт, очень приветливый хозяин ☺️
                Вся компания была в восторге! Надеюсь, приедем ещё ! <br><br>
                Мария. Yandex.ru/maps
            </div>
            <div class="swiper-slide">
                Замечательное место отдыха, отдыхали семьей, номера чистые и уютные, обслуживание на высшем уровне, хозяин очень
                гостеприимный. <br><br>
                Сергей. Yandex.ru/maps
            </div>
            <div class="swiper-slide">
                Отличное место для отдыха на природе! Рядом много красивых мест, речка в 5 минутах ходьбы.. Номера чистые и уютные,
                вежливый хозяин. <br><br>
                Данил. Google.com/maps
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> <br><br>
        <div class="swiper-pagination"></div>
    </div>

    <div class="mapsDescription">Как добраться</div>
    <div class="maps">
        <div><a class="socialNet" href="https://yandex.ru/maps/-/CCUFE4uoHA">Yandex карты</a></div>
        <div><a class="socialNet" href="https://goo.gl/maps/U7ub8dpT1CnPjMT17">Google карты</a></div>
        <div><a class="socialNet" href="https://go.2gis.com/vfjo1q">2ГИС</a></div>
    </div>

    <footer class="footer">
        <p class="address">
            Адыгея, Каменномостский, Речная 10 <br>
            <span>Хижина</span>
        </p>
        <p class="phone">&#9742;
            <a href="tel:89184289606">8-918-428-96-06</a><br><br>
            <a href="https://t.me/hizhinaHotel"><img class="socialNet" src="/images/telegram.png" alt="Telegram"></a>
            <a href="https://vk.com/club210847892"><img class="socialNet" src="images/VK.png" alt="VK"></a>
        </p>
    </footer>

</div>

    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>