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

const formsTerima = document.querySelectorAll('.form-terima');

formsTerima.forEach(form => {
    const btnTerima = form.querySelector('.btn-terima');
    const positionField = form.querySelector('.position-field');
    const btnKirim = form.querySelector('.btn-kirim');

    btnTerima.addEventListener('click', (e) => {
        e.preventDefault();

        positionField.classList.remove('hidden');
        btnKirim.classList.remove('hidden');
        btnKirim.classList.add('flex');
        btnTerima.classList.add('hidden');
        btnTerima.classList.remove('flex');
    });
});