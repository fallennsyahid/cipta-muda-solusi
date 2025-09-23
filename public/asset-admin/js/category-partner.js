const openModal = document.querySelector('#open-modal');
const closeModal = document.querySelectorAll('.close-modal');
const modal = document.querySelector('#create-new-category');

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

        const modalEditOpen = btn.closest('.fixed');
        modalEditOpen.classList.remove('flex');
        modalEditOpen.classList.add('hidden');
    });
});

const editCategories = document.querySelectorAll('.edit-category');

editCategories.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modalEdit = document.querySelector('#edit-category-' + btn.dataset.id);
        modalEdit.classList.remove('hidden');
        modalEdit.classList.add('flex');
    });
});