const openModalUpdateStatus = document.querySelectorAll('.update-status-btn');
const closeModal = document.querySelectorAll('.close-modal');

openModalUpdateStatus.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#update-status-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

closeModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modalOpen = btn.closest('.fixed');
        modalOpen.classList.remove('flex');
        modalOpen.classList.add('hidden');
    });
});

const openModalCall = document.querySelectorAll('.call-partner');

openModalCall.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#call-modal-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

