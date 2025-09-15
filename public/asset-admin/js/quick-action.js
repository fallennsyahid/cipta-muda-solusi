// Modal Create Job
const openModalCreateJob = document.querySelector('#open-modal-create-job');
const modalCreateNewJob = document.querySelector('#create-new-job');
const closeModal = document.querySelectorAll('.close-modal');

openModalCreateJob.addEventListener('click', function (e) {
    e.preventDefault();

    modalCreateNewJob.classList.toggle('hidden');
    modalCreateNewJob.classList.add('flex');
});

closeModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modalOpen = btn.closest('.fixed');
        modalOpen.classList.remove('flex');
        modalOpen.classList.add('hidden');
    });
});

// Modal Add New Partner
const openModalAddPartner = document.querySelector('#open-add-partner');
const modalAddNewPartner = document.querySelector('#add-new-partner');

openModalAddPartner.addEventListener('click', function (e) {
    e.preventDefault();

    modalAddNewPartner.classList.toggle('hidden');
    modalAddNewPartner.classList.toggle('flex');
});