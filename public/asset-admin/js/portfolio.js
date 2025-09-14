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

        const modalOpen = btn.closest('.fixed');
        modalOpen.classList.remove('flex');
        modalOpen.classList.add('hidden');
    });
});

const openDetailModal = document.querySelectorAll('.open-detail-portfolio');

openDetailModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#detail-portfolio-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

const openEditModal = document.querySelectorAll('.open-edit-portfolio');

openEditModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modalEdit = document.querySelector('#edit-portfolio-' + btn.dataset.id);
        modalEdit.classList.remove('hidden');
        modalEdit.classList.add('flex');
    });
});