const openModal = document.querySelector('#open-modal');
const modalCreate = document.querySelector('#create-new-partner');
const closeModal = document.querySelectorAll('.close-modal');

openModal.addEventListener('click', (e) => {
    e.preventDefault();

    modalCreate.classList.toggle('hidden');
    modalCreate.classList.toggle('flex');
});

closeModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        modalCreate.classList.remove('flex');
        modalCreate.classList.add('hidden');
    });
});