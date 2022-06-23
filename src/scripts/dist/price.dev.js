"use strict";

loadURL = function loadURL(url) {
  var oRequest = new XMLHttpRequest();
  oRequest.open('GET', url, false);
  oRequest.send(null);
  return oRequest.responseText;
};

function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}

function shuffle(o) {
  for (var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x) {
    ;
  }

  return o;
}

var products = JSON.parse(loadURL('src/scripts/json/products.json'));
products = Object.entries(products);
var gameBlock = document.querySelectorAll(".main .main__wrapper .main__slider .slider__item");
var gameLength = gameBlock.length;
var productsLength = products.length;
var arr = [productsLength];

for (var i = 0; i < productsLength; i++) {
  arr[i] = i;
}

var random = shuffle(arr);

for (var _i = 0; _i < gameLength; _i++) {
  gameBlock[_i].getElementsByClassName('description')[0].innerHTML = products[random[_i]][1].name;
  gameBlock[_i].getElementsByClassName('price')[0].innerHTML = products[random[_i]][1].price;
  gameBlock[_i].getElementsByClassName('people-count')[0].innerHTML = products[random[_i]][1].people;
  gameBlock[_i].getElementsByClassName('time-counter')[0].innerHTML = products[random[_i]][1].time;
  gameBlock[_i].getElementsByClassName('age')[0].innerHTML = products[random[_i]][1].age;

  gameBlock[_i].getElementsByTagName('img')[0].setAttribute('src', './build/img/product-' + products[random[_i]][1].id + '.png');
} //discounts


var discount = JSON.parse(loadURL('src/scripts/json/discount.json'));
discount = Object.entries(discount);
var offerBlock = document.querySelectorAll('.main .main__wrapper .special-offer .slider__item');
var offerLenght = offerBlock.length;
var discountBlock = document.querySelectorAll('.offer');
var discountLenght = discountBlock.length;
var rand = [];

for (var _i2 = 0; _i2 < discountLenght; _i2++) {
  rand[_i2] = getRandomInt(discount.length);
}

for (var _i3 = 0; _i3 < offerLenght; _i3++) {
  offerBlock[_i3].getElementsByClassName('offer')[0].innerHTML = '-' + discount[rand[_i3]][1];
}

var newPrice = document.getElementsByClassName('new-price');
var oldPrice = document.getElementsByClassName('old-price');
var newPriceLenght = newPrice.length;

for (var _i4 = 0; _i4 < offerLenght; _i4++) {
  newPrice[_i4].innerHTML = (parseInt(oldPrice[_i4].innerHTML) - parseInt(oldPrice[_i4].innerHTML) / 100 * parseInt(discount[rand[_i4]][1])).toFixed(1) + '$';
}