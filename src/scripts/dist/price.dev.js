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

var prices = JSON.parse(loadURL('src/scripts/json/price.json'));
prices = Object.entries(prices);
var discount = JSON.parse(loadURL('src/scripts/json/discount.json'));
discount = Object.entries(discount);
var items = document.getElementsByClassName('price');
var offers = document.getElementsByClassName('offer');
var priceArr = [];
var discountArr = [];
var discounts = [];
var arrLength = items.length;
var priceLenght = prices.length;

for (i = 0; i < discount.length; i++) {
  discounts.push(parseInt(discount[i][1]));
}

for (i = 0; i < 4; i++) {
  var rand = getRandomInt(discounts.length);
  discountArr.push(rand);
  offers[i].textContent = '-' + discounts[rand] + '%';
}

for (i = 0; i < arrLength; i++) {
  var _rand = getRandomInt(priceLenght);

  priceArr.push(_rand);
  items[i].textContent = prices[_rand][1];
}

var newPrice = document.getElementsByClassName('new-price');
var oldPrice = document.getElementsByClassName('old-price');

for (i = 0; i < 4; i++) {
  newPrice[i].textContent = parseInt(prices[priceArr[i + 4]][1]) - (parseInt(prices[priceArr[i + 4]][1]) / 100 * discounts[discountArr[i]]).toFixed(1) + ' $';
}