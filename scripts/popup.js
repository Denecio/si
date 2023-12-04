let button = document.querySelector('.popup');
let b = document.querySelector('.dropdown');
let content = document.querySelector('.popup-content');

button.addEventListener('click', function() {
    b.classList.toggle('dropdown-reverse');
    content.classList.toggle('popup-content-disabled');
});