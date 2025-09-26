// Search Form
const searchButton = document.querySelector('.search-button');
const searchInput = document.querySelector('#input-search');

if (searchButton && searchInput) {
    searchButton.addEventListener('click', function (e) {
        e.preventDefault();

        searchInput.classList.toggle('w-0');
        searchInput.classList.toggle('w-64');

        searchInput.focus();
        e.stopPropagation();
    });
}

// Navbar Fixed
const navbar = document.querySelector('#nav-menu');
const toTop = document.querySelector('#to-top');
const header = document.querySelector('header');
let isVisible = false;

window.addEventListener('scroll', function () {
    const threshold = header.offsetHeight;

    if (window.scrollY > threshold && !isVisible) {
        isVisible = true;
        header.classList.add('navbar-fixed');
        // header.classList.remove('z-10');
        // navbar.classList.add('navbar-fixed');
        toTop.classList.remove('hidden', 'toTop-2');
        toTop.classList.add('flex', 'toTop-1');
    }
    else if (window.scrollY <= threshold && isVisible) {
        isVisible = false;
        header.classList.remove('navbar-fixed');
        // header.classList.remove('z-10');
        // navbar.classList.remove('navbar-fixed');
        toTop.classList.remove('flex', 'toTop-1');
        toTop.classList.add('toTop-2');
    }
});

// Portfolio Overlay
const body = document.querySelector('body');
const portfolioOverlay = document.querySelector('#portfolio-overlay');
const openBtn = document.querySelector('#open-overlay');
const closeBtn = document.querySelector('#close-overlay');

if (openBtn && closeBtn && portfolioOverlay) {
    openBtn.addEventListener('click', function (e) {
        e.preventDefault();

        portfolioOverlay.classList.toggle('translate-x-full');
        portfolioOverlay.classList.toggle('translate-x-0');

        body.classList.add('overflow-hidden');
    });

    closeBtn.addEventListener('click', function (e) {
        e.preventDefault();

        portfolioOverlay.classList.remove('translate-x-0');
        portfolioOverlay.classList.add('translate-x-full');

        body.classList.remove('overflow-hidden');
    });
}

// Hamburger Menu
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
const closeNav = document.querySelectorAll('.close-navbar');

hamburger.addEventListener('click', function () {
    navMenu.classList.toggle('translate-x-full');
    navMenu.classList.toggle('translate-x-0');
});

closeNav.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        navMenu.classList.remove('translate-x-0');
        navMenu.classList.add('translate-x-full');
    });
});

window.addEventListener('click', function (e) {
    if (e.target != hamburger && e.target != navMenu) {
        navMenu.classList.remove('translate-x-0');
        navMenu.classList.add('translate-x-full');
    }
});

const visiMisiCard = document.querySelector('#visi-misi-card');
const mottoBtn = document.querySelector('#see-motto');
const visiMisiBtn = document.querySelector('#see-visi-misi');

mottoBtn.addEventListener('click', function (e) {
    e.preventDefault();

    visiMisiCard.classList.add('-rotate-90', 'translate-x-2');
});

visiMisiBtn.addEventListener('click', function (e) {
    e.preventDefault();

    visiMisiCard.classList.remove('-rotate-90', 'translate-x-2');
})

// Watch
const clockEl = document.getElementById("clock");
let serverTime = new Date(clockEl.dataset.time);

const updateClock = () => {
    serverTime.setSeconds(serverTime.getSeconds() + 1);

    let hours = serverTime.getHours();
    let minutes = serverTime.getMinutes();
    let seconds = serverTime.getSeconds();

    clockEl.innerText =
        `${hours.toString().padStart(2, '0')}:` +
        `${minutes.toString().padStart(2, '0')}:` +
        `${seconds.toString().padStart(2, '0')}`;
};

setInterval(updateClock, 1000);
updateClock();

// Partner Modal 
const openPartnerModal = document.querySelector('#open-partner-modal');
const partnerModal = document.querySelector('#partner-modal');
const closePartnerModal = document.querySelectorAll('.close-partner-modal');

openPartnerModal.addEventListener("click", function (e) {
    e.preventDefault();

    partnerModal.classList.remove('hidden');
    partnerModal.classList.add('flex', 'animate-fade-in');

    partnerModal.classList.remove('animate-fade-out')
});

closePartnerModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        partnerModal.classList.remove('animate-fade-in');
        partnerModal.classList.add('animate-fade-out')

        partnerModal.addEventListener('animationend', () => {
            if (partnerModal.classList.contains('animate-fade-out')) {
                partnerModal.classList.remove('flex', 'animate-fade-out');
                partnerModal.classList.add('hidden');
            }
        }, { once: true });
    });
});

const messageCompany = document.querySelector('#company-message');
const charCount = document.querySelector('#charCount');

messageCompany.addEventListener('input', function () {
    charCount.textContent = `${messageCompany.value.length} / 400 Karakter`
});

const selectCompanyType = document.querySelector('#company-type');
const otherCompanyType = document.querySelector('#other-company-type');

selectCompanyType.addEventListener('change', function () {
    if (selectCompanyType.value === 'other') {
        otherCompanyType.classList.remove('hidden');
        otherCompanyType.required = true;
        otherCompanyType.focus();
    } else {
        otherCompanyType.classList.add('hidden');
        otherCompanyType.required = false;
        otherCompanyType.value = "";
    }
});


// Dots
// const container = document.querySelector('.dots-container');
// const section = document.getElementById('teams');
// const sectionWidth = section.offsetWidth;
// const sectionHeight = section.offsetHeight;
// const primary = '#1e40af';
// const secondary = '#3b82f6';
// const accent = ' #dbeafe';

// const colors = [primary, secondary, accent];

// for (let i = 0; i < 20; i++) {
//     const dot = document.createElement('div');
//     const size = Math.floor(Math.random() * (55 - 30 + 1)) + 30;
//     const posX = Math.random() * sectionWidth;
//     const posY = Math.random() * sectionHeight;
//     const delay = Math.random() * 5;
//     const color = colors[Math.floor(Math.random() * colors.length)];

//     dot.classList.add('dot');
//     dot.style.width = `${size}px`;
//     dot.style.height = `${size}px`;
//     dot.style.left = `${posX}px`;
//     dot.style.top = `${posY}px`;
//     dot.style.animationDelay = `${delay}s`;
//     dot.style.backgroundColor = color;

//     container.appendChild(dot);
// }

