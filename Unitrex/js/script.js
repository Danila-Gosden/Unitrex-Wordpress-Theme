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
let width = 165; // ???????????? ????????????????
let count = 4; // ?????????????? ???????????????????? ??????????????????????

let list = carousel_for_home_page.querySelector('ul');
let listElem = carousel_for_home_page.querySelectorAll('li');

let position = 0; // ?????????????????? ?????????? ??????????????????

document.getElementById('carousel_for_home_page').onwheel = function (event){
    let line = event.deltaX;
    position = position + 10.0 * line;
    position = Math.max(position, -width * (listElem.length - count));
    position = Math.min(position, +	width / (listElem.length - count));
    list.style.marginLeft = position + 'px';
}
carousel_for_home_page.querySelector('.prev').onclick = function() {
    // ?????????? ??????????
    position += width * (count-3);
    // ?????????????????? ???????????????????????? ?????????? ?????????? ???????? ???? ???? 3, ?? ???? 2 ?????? 1 ??????????????
    position = Math.min(position, 0)
    list.style.marginLeft = position + 'px';
};

carousel_for_home_page.querySelector('.next').onclick = function() {
    // ?????????? ????????????
    position -= width * (count-3);
    // ?????????????????? ???????????????????????? ???????????? ?????????? ???????? ???? ???? 3, ?? ???? 2 ?????? 1 ??????????????
    position = Math.max(position, -width * (listElem.length - count));
    list.style.marginLeft = position + 'px';
};
//
