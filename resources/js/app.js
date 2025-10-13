import './bootstrap';
import { Swiper } from 'swiper/bundle';
import 'swiper/css/bundle';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const Swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    breakpoints: {
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: "swiper-button-next",
        prevEl: "swiper-button-prev",
    },
});
