particlesJS.load('header_home', '/wp-content/themes/LeaSoft/js/particles_for_black_background.json', function () {
});

particlesJS.load('our_story', '/wp-content/themes/LeaSoft/js/particles_for_black_background.json', function () {
});

particlesJS.load('header_history', '/wp-content/themes/LeaSoft/js/particles_for_black_background.json', function () {
});

particlesJS.load('particle_left_about_find_job', '/wp-content/themes/LeaSoft/js/particles_for_black_background.json', function () {
});

particlesJS.load('particle_right_about_find_job', '/wp-content/themes/LeaSoft/js/particles_for_black_background.json', function () {
});

particlesJS.load('particle_left_about_our_service', '/wp-content/themes/LeaSoft/js/particles_for_white_background.json', function () {
});

particlesJS.load('particle_right_about_our_service', '/wp-content/themes/LeaSoft/js/particles_for_white_background.json', function () {
});

particlesJS.load('particle_right_write_us_white', '/wp-content/themes/LeaSoft/js/particles_for_white_background.json', function () {
});

particlesJS.load('particle_left_write_us_white', '/wp-content/themes/LeaSoft/js/particles_for_white_background.json', function () {
});

particlesJS.load('list_vacancies_block', '/wp-content/themes/LeaSoft/js/particles_for_white_background.json', function () {
});

particlesJS.load('vacancy_block', '/wp-content/themes/LeaSoft/js/particles_for_white_background.json', function () {
});
particlesJS.load('our_mission_and_vision_particles_left', '/wp-content/themes/LeaSoft/js/particles_for_white_background.json', function () {
});
particlesJS.load('our_mission_and_vision_particles_right', '/wp-content/themes/LeaSoft/js/particles_for_white_background.json', function () {
});

particlesJS.load('problem_and_solution_particles_left', '/wp-content/themes/LeaSoft/js/particles_for_black_background.json', function () {
});

particlesJS.load('problem_and_solution_particles_right', '/wp-content/themes/LeaSoft/js/particles_for_black_background.json', function () {
});

particlesJS.load('start_compani_particles', '/wp-content/themes/LeaSoft/js/particles_for_white_background.json', function () {
});

particlesJS.load('write_us_black_particles_right', '/wp-content/themes/LeaSoft/js/particles_for_black_background.json', function () {
});

particlesJS.load('write_us_black_particles_left', '/wp-content/themes/LeaSoft/js/particles_for_black_background.json', function () {
});

//
function showMe(box) {
    let vis = (box.checked) ? "block" : "none";
    document.getElementById('show').style.display = vis;
}
//
let width = 165; // ширина картинки
let count = 4; // видимое количество изображений

let list = carousel_for_home_page.querySelector('ul');
let listElem = carousel_for_home_page.querySelectorAll('li');

let position = 0; // положение ленты прокрутки

document.getElementById('carousel_for_home_page').onwheel = function (event){
    let line = event.deltaX;
    position = position + 10.0 * line;
    position = Math.max(position, -width * (listElem.length - count));
    position = Math.min(position, +	width / (listElem.length - count));
    list.style.marginLeft = position + 'px';
}
carousel_for_home_page.querySelector('.prev').onclick = function() {
    // сдвиг влево
    position += width * (count-3);
    // последнее передвижение влево может быть не на 3, а на 2 или 1 элемент
    position = Math.min(position, 0)
    list.style.marginLeft = position + 'px';
};

carousel_for_home_page.querySelector('.next').onclick = function() {
    // сдвиг вправо
    position -= width * (count-3);
    // последнее передвижение вправо может быть не на 3, а на 2 или 1 элемент
    position = Math.max(position, -width * (listElem.length - count));
    list.style.marginLeft = position + 'px';
};
//
