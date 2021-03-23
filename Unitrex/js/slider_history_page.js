let widths = 800; // ширина картинки
let couts = 2; // видимое количество изображений

let lists = carousel_for_history_page.querySelector('ul');
let listsElems = carousel_for_history_page.querySelectorAll('li');

let positions = 0; // положение ленты прокрутки

document.getElementById('carousel_for_history_page').onwheel = function (event){
    let lines = event.deltaX;
    positions = positions + 8.0*lines;
    positions = Math.max(positions, -widths * (listsElems.length - couts));
    positions = Math.min(positions, +	widths / 8);
    lists.style.marginLeft = positions + 'px';
}
carousel_for_history_page.querySelector('.prev').onclick = function() {
    // сдвиг влево
    positions -= widths * (couts-3);
    // последнее передвижение влево может быть не на 3, а на 2 или 1 элемент
    positions = Math.min(positions, 0)
    lists.style.marginLeft = positions + 'px';
};

carousel_for_history_page.querySelector('.next').onclick = function() {
    // сдвиг вправо
    positions += widths * (couts-3);
    // последнее передвижение вправо может быть не на 3, а на 2 или 1 элемент
    positions = Math.max(positions, -widths * (listsElems.length - couts));
    lists.style.marginLeft = positions + 'px';
};