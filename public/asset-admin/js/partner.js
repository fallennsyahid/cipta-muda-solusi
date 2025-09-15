const openModal = document.querySelector('#open-modal');
const openModalEdit = document.querySelectorAll('.open-edit-modal');
const openContactPartner = document.querySelectorAll('.contact-partner');
const modalCreate = document.querySelector('#create-new-partner');
const closeModal = document.querySelectorAll('.close-modal');

openModal.addEventListener('click', (e) => {
    e.preventDefault();

    modalCreate.classList.toggle('hidden');
    modalCreate.classList.toggle('flex');
});

openModalEdit.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#edit-partner-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

openContactPartner.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#call-partner-modal-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
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

const partnerTypeSelect = document.getElementById('partner_type');
const partnerOtherInput = document.getElementById('partner_other_type');

// cek saat halaman load
if (partnerTypeSelect.value === 'Lainnya') {
    partnerOtherInput.classList.remove('hidden');
} else {
    partnerOtherInput.classList.add('hidden');
    partnerOtherInput.value = '';
}

// cek saat user ganti select
partnerTypeSelect.addEventListener('change', () => {
    if (partnerTypeSelect.value === 'Lainnya') {
        partnerOtherInput.classList.remove('hidden');
    } else {
        partnerOtherInput.classList.add('hidden');
        partnerOtherInput.value = '';
    }
});