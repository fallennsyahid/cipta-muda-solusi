const openModal = document.querySelector('#open-modal');
const openModalDetail = document.querySelectorAll('.open-modal-detail');
const openModalEdit = document.querySelectorAll('.open-modal-edit');
const modalCreate = document.querySelector('#create-new-blog');
const closeModal = document.querySelectorAll('.close-modal');

openModal.addEventListener('click', function (e) {
    e.preventDefault();

    modalCreate.classList.toggle('hidden');
    modalCreate.classList.add('flex');
});

closeModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        modalCreate.classList.remove('flex');
        modalCreate.classList.add('hidden');

        const modalOpen = btn.closest('.fixed');
        modalOpen.classList.remove('flex');
        modalOpen.classList.add('hidden');
    });
});

openModalDetail.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#detail-blog-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

openModalEdit.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#edit-blog-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});