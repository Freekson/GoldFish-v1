if (document.querySelector('.slider__items') != null) {
    const slider = document.querySelector('.slider__items');
    const width = slider.offsetWidth;
    let offset = -400;
    let itemNumber = document.getElementsByClassName('main-slider__item').length;
    let spetSize = width / itemNumber;

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
}