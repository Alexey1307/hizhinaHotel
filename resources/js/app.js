require('./bootstrap');

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
// let btnCalendar = document.querySelector('.buttonCalendar');
// let calendarElement = document.querySelector(".calendar");
// function bookingClick() {
//     calendarElement.scrollIntoView({ block: "center", behavior: "smooth" });
// }
// btnCalendar.addEventListener('click', bookingClick);

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