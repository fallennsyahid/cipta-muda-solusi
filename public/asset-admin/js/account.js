const openModal = document.querySelector('#open-modal');
const closeModal = document.querySelectorAll('.close-modal');
const modal = document.querySelector('#create-new-account');

openModal.addEventListener('click', function (e) {
    e.preventDefault();

    modal.classList.toggle('hidden');
    modal.classList.toggle('flex');
});

closeModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        modal.classList.remove('flex');
        modal.classList.add('hidden');
    });
});

const dropwdownButtons = document.querySelectorAll('.dropdown-button');

dropwdownButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const dropwdownMenu = document.querySelector('#dropdown-menu-' + btn.dataset.id);
        dropwdownMenu.classList.toggle('scale-y-0');
        dropwdownMenu.classList.toggle('scale-y-100');
    });
});
// const dropwdownMenu = document.querySelector('#dropdown-menu');