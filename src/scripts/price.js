loadURL = function(url) {
    var oRequest = new XMLHttpRequest();
    oRequest.open('GET', url, false);
    oRequest.send(null);
    return oRequest.responseText;
};

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

function shuffle(o) {
    for (var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
}

let products = JSON.parse(loadURL('src/scripts/json/products.json'));
products = Object.entries(products);

let gameBlock = document.querySelectorAll(".main .main__wrapper .main__slider .slider__item");
let gameLength = gameBlock.length;
let productsLength = products.length;

let arr = [productsLength];
for (let i = 0; i < productsLength; i++) {
    arr[i] = i;
}
let random = shuffle(arr);

for (let i = 0; i < gameLength; i++) {
    gameBlock[i].getElementsByClassName('description')[0].innerHTML = products[random[i]][1].name;
    gameBlock[i].getElementsByClassName('price')[0].innerHTML = products[random[i]][1].price;
    gameBlock[i].getElementsByClassName('people-count')[0].innerHTML = products[random[i]][1].people;
    gameBlock[i].getElementsByClassName('time-counter')[0].innerHTML = products[random[i]][1].time;
    gameBlock[i].getElementsByClassName('age')[0].innerHTML = products[random[i]][1].age;
    gameBlock[i].getElementsByTagName('img')[0].setAttribute('src', './build/img/product-' + products[random[i]][1].id + '.png');
}

//discounts

let discount = JSON.parse(loadURL('src/scripts/json/discount.json'));
discount = Object.entries(discount);

let offerBlock = document.querySelectorAll('.main .main__wrapper .special-offer .slider__item');
let offerLenght = offerBlock.length;

let discountBlock = document.querySelectorAll('.offer');
let discountLenght = discountBlock.length;

let rand = [];
for (let i = 0; i < discountLenght; i++) {
    rand[i] = getRandomInt(discount.length);
}

for (let i = 0; i < offerLenght; i++) {
    offerBlock[i].getElementsByClassName('offer')[0].innerHTML = '-' + discount[rand[i]][1];
}


let newPrice = document.getElementsByClassName('new-price');
let oldPrice = document.getElementsByClassName('old-price');
let newPriceLenght = newPrice.length;


for (let i = 0; i < offerLenght; i++) {
    newPrice[i].innerHTML = (parseInt(oldPrice[i].innerHTML) - parseInt(oldPrice[i].innerHTML) / 100 * parseInt(discount[rand[i]][1])).toFixed(1) + '$';
}