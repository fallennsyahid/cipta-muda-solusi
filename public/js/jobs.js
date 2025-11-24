// CV MODAL
const cvModal = document.querySelector('#cvModal');
const closeModalBtn = document.querySelectorAll('.close-modal');
const uploadCvBtn = document.querySelector('#upload-cv');

uploadCvBtn.addEventListener('click', function (e) {
    e.preventDefault();

    cvModal.classList.toggle('hidden');
    cvModal.classList.toggle('flex');
});

closeModalBtn.forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();

        const modalOpen = btn.closest('.fixed');
        modalOpen.classList.remove('flex');
        modalOpen.classList.add('hidden');
    });
});

// === APPLY MODAL ===
// const openApplyModalBtn = document.querySelectorAll('.open-apply');
// const closeApplyModalBtn = document.querySelectorAll('.close-apply-modal');

// // Buka modal apply
// openApplyModalBtn.forEach(btn => {
//     btn.addEventListener('click', (e) => {
//         e.preventDefault();

//         // Cari ID lowongan
//         const jobId = btn.dataset.id || btn.closest('[id^="modal-detail-"]').id.replace('modal-detail-', '');

//         const applyModalContainer = document.querySelector('#modal-container-' + jobId);
//         const applyModalContent = applyModalContainer.querySelector('.modal-content');

//         // Tutup modal detail dulu (kalau sedang terbuka)
//         const detailModal = document.querySelector('#modal-detail-' + jobId);
//         if (detailModal) {
//             detailModal.classList.add('hidden');
//             detailModal.classList.remove('flex');
//         }

//         // Buka modal apply
//         applyModalContainer.classList.remove('hidden');
//         applyModalContainer.classList.add('flex');

//         // Animasi muncul dari bawah
//         setTimeout(() => {
//             applyModalContent.classList.remove('translate-y-full');
//         }, 100);
//     });
// });

// // Tutup modal apply
// closeApplyModalBtn.forEach(cls => {
//     cls.addEventListener('click', (e) => {
//         e.preventDefault();

//         const modalContainer = cls.closest('[id^="modal-container-"]');
//         const modalContent = modalContainer.querySelector('.modal-content');

//         modalContent.classList.add('translate-y-full');

//         setTimeout(() => {
//             modalContainer.classList.remove('flex');
//             modalContainer.classList.add('hidden');
//         }, 200);
//     });
// });

// APPLICATION DETAIL MODAL
// const openDetailApplication = document.querySelectorAll('.open-detail-application');

// openDetailApplication.forEach(btn => {
//     btn.addEventListener('click', (e) => {
//         e.preventDefault();

//         const modal = document.querySelector('#modal-detail-' + btn.dataset.id);
//         modal.classList.remove('hidden');
//         modal.classList.add('flex');
//     });
// });

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

// const clockEl = document.getElementById("clock");
// let serverTime = new Date(clockEl.dataset.time);

// const updateClock = () => {
//     serverTime.setSeconds(serverTime.getSeconds() + 1);

//     let hours = serverTime.getHours();
//     let minutes = serverTime.getMinutes();
//     let seconds = serverTime.getSeconds();

//     let ampm = hours >= 12 ? "PM" : "AM";
//     hours = hours % 12 || 12;

//     clockEl.innerText =
//         `${hours.toString().padStart(2, '0')}:` +
//         `${minutes.toString().padStart(2, '0')}:` +
//         `${seconds.toString().padStart(2, '0')} ${ampm}`;
// };

// setInterval(updateClock, 1000);
// updateClock();

