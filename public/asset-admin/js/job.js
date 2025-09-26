const modalCreateJob = document.querySelector('#create-new-job');
const openModalBtn = document.querySelector('#open-modal');
const closeModalBtn = document.querySelectorAll('.close-modal');

openModalBtn.addEventListener('click', (e) => {
    e.preventDefault();

    modalCreateJob.classList.toggle('hidden');
    modalCreateJob.classList.toggle('flex');
});

closeModalBtn.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        modalCreateJob.classList.remove('flex');
        modalCreateJob.classList.add('hidden');
    });
});

// Character Count
document.querySelectorAll('.char-counter').forEach(group => {
    const textarea = group.querySelector('textarea');
    const counter = group.querySelector('.char-count');

    counter.textContent = textarea.value.length;

    textarea.addEventListener('input', () => {
        counter.textContent = textarea.value.length;
    });
});

// Modal Detail
const openEdit = document.querySelectorAll('.open-edit-modal');
const closeEditModal = document.querySelectorAll('.close-modal-2');

openEdit.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#edit-modal-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

closeEditModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modalOpen = btn.closest('.fixed');
        modalOpen.classList.remove('flex');
        modalOpen.classList.add('hidden');
    });
});