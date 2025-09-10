const openCreateBtn = document.querySelector('#open-modal');
const modalCreate = document.querySelector('#create-new-portfolio');
const closeModalBtn = document.querySelectorAll('.close-modal');

openCreateBtn.addEventListener('click', (e) => {
    e.preventDefault();

    modalCreate.classList.toggle('hidden');
    modalCreate.classList.toggle('flex');
});

closeModalBtn.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        modalCreate.classList.remove('flex');
        modalCreate.classList.add('hidden');
    });
});