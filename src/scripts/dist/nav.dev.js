"use strict";

//close and open navigation
document.getElementById('open-btn').onclick = function () {
  document.getElementById('nav').classList.add('disable');
  document.getElementById('open-nav').classList.add('active');
};

document.getElementById('close-btn').onclick = function () {
  document.getElementById('nav').classList.remove('disable');
  document.getElementById('open-nav').classList.remove('active');
  content.innerHTML = '';
}; //change content  on navigation


var content = document.getElementById('content'); //content section 

document.getElementById('item-1').onclick = function () {
  content.innerHTML = "<p class=\"aside-content__header\">Board games</p>\n        <div class=\"aside-content__list\">\n            <ul>\n                <li>\n                    <a href=\"#\">battle cry (49)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Warhammer 40k (400)</a>\n                </li>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Blood Bowl (28)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Nercomunda (21)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href=\"#\">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Killtem (4)</a>\n                </li>\n            </ul>\n        </div>";
}; //content section


document.getElementById('item-2').onclick = function () {
  var content = document.getElementById('content');
  content.innerHTML = "<p class=\"aside-content__header\">Warhammer 40000</p>\n        <div class=\"aside-content__list\">\n            <ul>\n                <li>\n                    <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Blood Bowl (28)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Nercomunda (21)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href=\"#\">battle cry (49)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Warhammer 40k (400)</a>\n                </li>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href=\"#\">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Killtem (4)</a>\n                </li>\n            </ul>\n        </div>";
}; //content section


document.getElementById('item-3').onclick = function () {
  var content = document.getElementById('content');
  content.innerHTML = "<p class=\"aside-content__header\">Magic: the Gathering</p>\n        <div class=\"aside-content__list\">\n            <ul>\n                <li>\n                    <a href=\"#\">Warhammer 40k (400)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href=\"#\">battle cry (49)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Warhammer 40k (400)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Killtem (4)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Nercomunda (21)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href=\"#\">Warhammer 40k (400)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Nercomunda (21)</a>\n                </li>\n            </ul>\n        </div>";
}; //content section


document.getElementById('item-4').onclick = function () {
  var content = document.getElementById('content');
  content.innerHTML = "<p class=\"aside-content__header\">Game accessories</p>\n        <div class=\"aside-content__list\">\n            <ul>\n                <li>\n                    <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Killtem (4)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Nercomunda (21)</a>\n                </li>\n            </ul><ul>\n                <li>\n                    <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Killtem (4)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Nercomunda (21)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href=\"#\">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Killtem (4)</a>\n                </li>\n                <li>\n                <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href=\"#\">Blood Bowl (28)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Nercomunda (21)</a>\n                </li>\n            </ul>\n        </div>";
}; //content section


document.getElementById('item-5').onclick = function () {
  content.innerHTML = "<p class=\"aside-content__header\">Paints</p>\n        <div class=\"aside-content__list\">\n        <ul>\n            <li>\n                <a href=\"#\">battle cry (49)</a>\n            </li>\n            <li>\n                <a href=\"#\">Warhammer 40k (400)</a>\n            </li>\n        </ul>\n        <ul>\n            <li>\n                <a href=\"#\">Warhammer: Underworlds (22)</a>\n            </li>\n            <li>\n                <a href=\"#\">Killtem (4)</a>\n            </li>\n        </ul>\n        <ul>\n            <li>\n                <a href=\"#\">Lord of the Rings(16)</a>\n            </li>\n            <li>\n                <a href=\"#\">Warhammer: Underworlds (22)</a>\n            </li>\n            <li>\n                <a href=\"#\">Blood Bowl (28)</a>\n            </li>\n            <li>\n                <a href=\"#\">Nercomunda (21)</a>\n            </li>\n        </ul>\n    </div>";
}; //content section


document.getElementById('item-6').onclick = function () {
  content.innerHTML = "<p class=\"aside-content__header\">Goods for children</p>\n        <div class=\"aside-content__list\">\n        <ul>\n            <li>\n                <a href=\"#\">battle cry (49)</a>\n            </li>\n            <li>\n                <a href=\"#\">Warhammer 40k (400)</a>\n            </li>\n        </ul>\n        <ul>\n            <li>\n                <a href=\"#\">Warhammer: Underworlds (22)</a>\n            </li>\n            <li>\n                <a href=\"#\">Killtem (4)</a>\n            </li>\n        </ul>\n        <ul>\n        <li>\n        <a href=\"#\">Warhammer 40k (400)</a>\n        </li>\n            <li>\n                <a href=\"#\">Warhammer: Underworlds (22)</a>\n            </li>\n            <li>\n                <a href=\"#\">Blood Bowl (28)</a>\n            </li>\n            <li>\n                <a href=\"#\">Nercomunda (21)</a>\n            </li>\n        </ul>\n    </div>";
}; //content section


document.getElementById('item-7').onclick = function () {
  var content = document.getElementById('content');
  content.innerHTML = "<p class=\"aside-content__header\">Accessories for modeling</p>\n        <div class=\"aside-content__list\">\n            <ul>\n                <li>\n                    <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Killtem (4)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Nercomunda (21)</a>\n                </li>\n            </ul><ul>\n                <li>\n                    <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Killtem (4)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Nercomunda (21)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href=\"#\">Warhammer: Underworlds (22)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Killtem (4)</a>\n                </li>\n                <li>\n                <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Lord of the Rings(16)</a>\n                </li>\n            </ul>\n            <ul>\n                <li>\n                    <a href=\"#\">Blood Bowl (28)</a>\n                </li>\n                <li>\n                    <a href=\"#\">Nercomunda (21)</a>\n                </li>\n            </ul>\n        </div>";
};