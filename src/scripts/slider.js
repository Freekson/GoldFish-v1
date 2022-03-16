let offset = 0;
const slider = document.querySelector('.slider__items');
const width = slider.offsetWidth;
console.log(width);

document.querySelector('#prev').addEventListener('click', function() {
    offset += 300;
    if (offset > 300) {
        offset = -width;
    }
    slider.style.left = offset + 'px';
});
document.querySelector('#next').addEventListener('click', function() {
    offset -= 300;
    if (offset < -width) {
        offset = 210;
    }
    slider.style.left = offset + 'px';
});