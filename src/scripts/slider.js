const slider = document.querySelector('.slider__items');
const width = slider.offsetWidth;
let offset = -400;
let itemNumber = document.getElementsByClassName('main-slider__item').length;
let spetSize = width / itemNumber;
console.log('width ' + width);
console.log('items number ' + itemNumber);
console.log('step size ' + spetSize);

document.querySelector('#prev').addEventListener('click', function() {
    offset += spetSize;
    if (offset > spetSize) {
        offset = -width;
    }
    slider.style.left = offset + 'px';
});
document.querySelector('#next').addEventListener('click', function() {
    offset -= spetSize;
    if (offset < -width) {
        offset = 0;
    }
    slider.style.left = offset + 'px';
});