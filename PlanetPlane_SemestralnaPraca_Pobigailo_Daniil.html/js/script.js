const menuIcon = document.querySelector('.menu-icon');
const dropdownMenu = document.querySelector('.dropdown-menu');

menuIcon.addEventListener('click', function (event) {
    event.stopPropagation(); 
    dropdownMenu.classList.toggle('show');
});

dropdownMenu.addEventListener('click', function (event) {
    event.stopPropagation();
});

document.addEventListener('click', function () {
    dropdownMenu.classList.remove('show');
});
