// Search Form
const searchButton = document.querySelectorAll('.search-button');
const searchBox = document.querySelector('#search-box');
const searchForm = document.querySelector('.search-form');

searchButton.forEach((btn) => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();

        searchForm.classList.toggle('scale-x-100');
        searchForm.classList.toggle('scale-x-0');

        if (searchForm.classList.contains('scale-x-100')) {
            searchBox.focus();
        }
    });
});

// Navbar Fixed
const header = document.querySelector('header');
const toTop = document.querySelector('#to-top');
let isVisible = false;

toTop.addEventListener('animationend', (e) => {
    if (e.animationName === 'cta2') {
        toTop.classList.add('hidden');
    }
});

window.addEventListener('scroll', function () {
    const fixedNav = header.offsetTop;

    if (window.scrollY > fixedNav && !isVisible) {
        isVisible = true;
        header.classList.add('navbar-fixed');
        toTop.classList.remove('hidden', 'toTop-2');
        toTop.classList.add('flex', 'toTop-1');
    }
    else if (window.scrollY <= fixedNav && isVisible) {
        isVisible = false;
        header.classList.remove('navbar-fixed');
        toTop.classList.remove('flex', 'toTop-1');
        toTop.classList.add('toTop-2');
    }
});

// Hamburger Menu
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

window.addEventListener('click', function (e) {
    if (e.target != hamburger && e.target != navMenu) {
        hamburger.classList.remove('hamburger-active');
        navMenu.classList.add('hidden');
    }
});

// Dots
const container = document.querySelector('.dots-container');
const section = document.getElementById('teams');
const sectionWidth = section.offsetWidth;
const sectionHeight = section.offsetHeight;
const primary = '#1e40af';
const secondary = '#3b82f6';
const accent = ' #dbeafe';

const colors = [primary, secondary, accent];

for (let i = 0; i < 20; i++) {
    const dot = document.createElement('div');
    const size = Math.floor(Math.random() * (55 - 30 + 1)) + 30;
    const posX = Math.random() * sectionWidth;
    const posY = Math.random() * sectionHeight;
    const delay = Math.random() * 5;
    const color = colors[Math.floor(Math.random() * colors.length)];

    dot.classList.add('dot');
    dot.style.width = `${size}px`;
    dot.style.height = `${size}px`;
    dot.style.left = `${posX}px`;
    dot.style.top = `${posY}px`;
    dot.style.animationDelay = `${delay}s`;
    dot.style.backgroundColor = color;

    container.appendChild(dot);
}
