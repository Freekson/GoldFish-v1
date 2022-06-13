loadURL = function(url) {
    var oRequest = new XMLHttpRequest();
    oRequest.open('GET', url, false);
    oRequest.send(null);
    return oRequest.responseText;
};

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

let prices = JSON.parse(loadURL('src/scripts/json/price.json'));
prices = Object.entries(prices);

let discount = JSON.parse(loadURL('src/scripts/json/discount.json'));
discount = Object.entries(discount);

let items = document.getElementsByClassName('price');
let offers = document.getElementsByClassName('offer');

let priceArr = [];
let discountArr = [];
let discounts = [];
let arrLength = items.length;
let priceLenght = prices.length;

for (i = 0; i < discount.length; i++) {
    discounts.push(parseInt(discount[i][1]));
}

for (i = 0; i < 4; i++) {
    let rand = getRandomInt(discounts.length);
    discountArr.push(rand);
    offers[i].textContent = '-' + discounts[rand] + '%';
}
for (i = 0; i < arrLength; i++) {
    let rand = getRandomInt(priceLenght);
    priceArr.push(rand);
    items[i].textContent = prices[rand][1];
}

let newPrice = document.getElementsByClassName('new-price');
let oldPrice = document.getElementsByClassName('old-price');

for (i = 0; i < 4; i++) {
    newPrice[i].textContent = parseInt(prices[priceArr[i + 4]][1]) - (parseInt(prices[priceArr[i + 4]][1]) / 100 * discounts[discountArr[i]]).toFixed(1) + ' $';
}