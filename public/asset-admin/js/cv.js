const openDetailApplicant = document.querySelectorAll('.open-detail-applicant');
const closeModal = document.querySelectorAll('.close-modal');

openDetailApplicant.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#detail-cv-' + btn.dataset.id);
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

const openUpdateStatus = document.querySelectorAll('.open-update-status');

openUpdateStatus.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#update-status-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

const formsTerima = document.querySelectorAll('.form-terima');

formsTerima.forEach(form => {
    const btnTerima = form.querySelector('.btn-terima');
    const noteField = form.querySelector('.note-field');
    const btnKirim = form.querySelector('.btn-kirim');

    btnTerima.addEventListener('click', (e) => {
        e.preventDefault();

        noteField.classList.remove('hidden');
        btnKirim.classList.remove('hidden');
        btnKirim.classList.add('flex');
        btnTerima.classList.add('hidden');
        btnTerima.classList.remove('flex');
    });

});

const openCallApplicant = document.querySelectorAll('.open-call-applicant');

openCallApplicant.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#call-modal-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});