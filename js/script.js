let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

menu.onclick = () => {
    menu.classList.toggle('-fa-time');
    header.classList.toggle('active');
    document.body.classList.toggle('active');
}