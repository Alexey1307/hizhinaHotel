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

const colors = {
    '3': 'green',
    '2': 'green',
    '1': 'green',
    '0': 'red',
};

const setColor = input => {
    const { value } = input;
    if (colors.hasOwnProperty(value)) {
        input.style.backgroundColor = colors[value];
    }
}

const onInput = e => {
    setColor(e.target);
}

let rooms = document.querySelectorAll('.input');
rooms.forEach(elem => {
    elem.addEventListener('input', onInput);
    setColor(elem);
});


let days = document.querySelectorAll('.items');
days.forEach(
    function (elem) {
        elem.style.backgroundColor = 'orange';
    });