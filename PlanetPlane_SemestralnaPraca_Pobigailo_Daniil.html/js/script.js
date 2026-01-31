const menuIcon = document.querySelector('.menu-icon');
const dropdownMenu = document.querySelector('.dropdown-menu');

// открытие / закрытие меню по клику
menuIcon.addEventListener('click', function (event) {
    event.stopPropagation(); // ⛔ не даём клику уйти в document
    dropdownMenu.classList.toggle('show');
});

// клики внутри меню не закрывают его
dropdownMenu.addEventListener('click', function (event) {
    event.stopPropagation();
});

// закрытие меню при клике вне его
document.addEventListener('click', function () {
    dropdownMenu.classList.remove('show');
});
