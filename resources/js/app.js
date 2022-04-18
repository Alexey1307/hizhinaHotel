require('./bootstrap');


// Календарь
document.querySelector('.button').addEventListener('click', function () {
    let dateStart = document.querySelector('.start_date').value;
    let dateEnd = document.querySelector('.end_date').value;
    dateStart = Date.parse(dateStart);
    dateEnd = Date.parse(dateEnd);

    let out = document.querySelector('.out');
    let out_2 = document.querySelector('.out_2');
    let out_3 = document.querySelector('.out_3');
    let count = 0;
    let select = document.querySelector('select').selectedIndex;
    let selectValue = select + 1; // selectedIndex считается с 0, поэтому +1


    const startDateRender = new Date(dateStart).toLocaleDateString().substring(0, 10);
    const endDateRender = new Date(dateEnd).toLocaleDateString().substring(0, 10);

    if (startDateRender && endDateRender != 'Invalid Da') {
        out.innerHTML = startDateRender + ' - ' + endDateRender; //Выводим выбранные даты
    }

    for (let i = dateStart; i <= dateEnd; i = i + 24 * 60 * 60 * 1000) {
        count++;
        let trueCount = count - 1;
        out_2.innerHTML = `${trueCount}`; //количесвто дней
        out_3.innerHTML = trueCount * 2000 * selectValue + "р"; //сумма
    }
});

//swiper
const swiper = new Swiper('.swiper', {
    loop: true,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

});

//scrolling
// calendar
let btnCalendar = document.querySelector('.buttonCalendar');
let calendarElement = document.querySelector(".calendar");
function bookingClick() {
    calendarElement.scrollIntoView({ block: "center", behavior: "smooth" });
}
btnCalendar.addEventListener('click', bookingClick);

// rooms
let btnRooms = document.querySelector('.buttonRooms');
let roomsElement = document.querySelector(".roomsDescription");
function roomsClick() {
    roomsElement.scrollIntoView({ block: "center", behavior: "smooth" });
}
btnRooms.addEventListener('click', roomsClick);

// maps
let btnMaps = document.querySelector('.buttonMaps');
let mapsElement = document.querySelector(".mapsDescription");
function mapsClick() {
    mapsElement.scrollIntoView({ block: "center", behavior: "smooth" });
}
btnMaps.addEventListener('click', mapsClick);

// contacts
let btnContact = document.querySelector('.buttonContact');
let contactElement = document.querySelector(".footer");
function contactClick() {
    contactElement.scrollIntoView({ block: "center", behavior: "smooth" });
}
btnContact.addEventListener('click', contactClick);