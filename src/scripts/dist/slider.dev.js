"use strict";

if (document.querySelector('.slider__items') != null) {
  var slider = document.querySelector('.slider__items');
  var width = slider.offsetWidth;
  var offset = -400;
  var itemNumber = document.getElementsByClassName('main-slider__item').length;
  var spetSize = width / itemNumber;
  document.querySelector('#prev').addEventListener('click', function () {
    offset += spetSize;

    if (offset > spetSize) {
      offset = -width;
    }

    slider.style.left = offset + 'px';
  });
  document.querySelector('#next').addEventListener('click', function () {
    offset -= spetSize;

    if (offset < -width) {
      offset = 0;
    }

    slider.style.left = offset + 'px';
  });
}