const header = document.querySelector('header');
window.addEventListener('scroll', () => {
    header.classList.toggle('sticky', window.scrollY > 0); 
})


const menuIcon = document.querySelector('.hamburger-menu');
const navBar = document.querySelector('.navbar');

menuIcon.addEventListener('click', () => {
    navBar.classList.toggle('change');
})