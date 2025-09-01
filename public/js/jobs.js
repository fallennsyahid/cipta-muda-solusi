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

        cvModal.classList.remove('flex');
        cvModal.classList.add('hidden');
    });
});

const applyModalContainer = document.querySelector('#modal-container');
const applyModalContent = document.querySelector('#modal-content');
const openApplyModalBtn = document.querySelectorAll('.open-apply');
const closeApplyModalBtn = document.querySelectorAll('.close-apply-modal');

openApplyModalBtn.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        applyModalContainer.classList.toggle('hidden');
        applyModalContainer.classList.toggle('flex');

        setTimeout(() => {
            applyModalContent.classList.remove('translate-y-full');
        }, 100);
    });
});

closeApplyModalBtn.forEach(cls => {
    cls.addEventListener('click', (e) => {
        e.preventDefault();

        applyModalContent.classList.add('translate-y-full');

        setTimeout(() => {
            applyModalContainer.classList.remove('flex');
            applyModalContainer.classList.add('hidden');
        }, 100);
    });
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

