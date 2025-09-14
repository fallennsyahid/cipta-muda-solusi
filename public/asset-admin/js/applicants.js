const openEditStatus = document.querySelectorAll('.open-update-status');
const closeModal = document.querySelectorAll('.close-modal');

openEditStatus.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#update-status-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

closeModal.forEach(cls => {
    cls.addEventListener('click', (e) => {
        e.preventDefault();

        const modalOpen = cls.closest('.fixed');
        modalOpen.classList.remove('flex');
        modalOpen.classList.add('hidden');
    });
});

const openCallModal = document.querySelectorAll('.call-applicant');

openCallModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#call-modal-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

const openCoverLetter = document.querySelectorAll('.open-cover-letter');

openCoverLetter.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#cover-letter-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});