"use strict";

var offset = 0;
var slider = document.querySelector('.slider__items');
var width = slider.offsetWidth;
document.querySelector('#prev').addEventListener('click', function () {
  offset += 300;

  if (offset > 300) {
    offset = -width;
  }

  slider.style.left = offset + 'px';
});
document.querySelector('#next').addEventListener('click', function () {
  offset -= 300;

  if (offset < -width) {
    offset = 210;
  }

  slider.style.left = offset + 'px';
});