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

document.querySelectorAll('.category').forEach((select, index) => {
    const otherInput = document.querySelectorAll('.other_category')[index];

    if (select.value === 'Other' || select.value === 'Lainnya') {
        otherInput.classList.remove('hidden');
    }

    select.addEventListener('change', function () {
        if (this.value === 'Other' || this.value === 'Lainnya') {
            otherInput.classList.remove('hidden');
        } else {
            otherInput.classList.add('hidden');
            otherInput.value = '';
        }
    });
});

document.querySelectorAll('.char-counter').forEach(group => {
    const textarea = group.querySelector('textarea');
    const counter = group.querySelector('.char-count');

    counter.textContent = textarea.value.length;

    textarea.addEventListener('input', () => {
        counter.textContent = textarea.value.length;
    });
});
