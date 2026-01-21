const profileDropdown = document.getElementById('profile-dropdown');
const profileDetails = document.getElementById('profile-details');

profileDropdown.addEventListener('click', (e) => {
    e.stopPropagation();
    profileDetails.classList.toggle('scale-y-0');
    profileDetails.classList.toggle('scale-y-100');
});

window.addEventListener('click', (e) => {
    if (!profileDropdown.contains(e.target) && !profileDetails.contains(e.target)) {
        profileDetails.classList.remove('scale-y-100')
        profileDetails.classList.add('scale-y-0')
    }
});

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

document.querySelectorAll('.char-counter').forEach(group => {
    const textarea = group.querySelector('textarea');
    const counter = group.querySelector('.char-count');

    counter.textContent = textarea.value.length;

    textarea.addEventListener('input', () => {
        counter.textContent = textarea.value.length;
    });
});

document.querySelectorAll('.partner_type').forEach((select, index) => {
    const otherInput = document.querySelectorAll('.partner_other_type')[index];

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

// cek saat user ganti select
partnerTypeSelect.addEventListener('change', () => {
    if (partnerTypeSelect.value === 'Lainnya') {
        partnerOtherInput.classList.remove('hidden');
    } else {
        partnerOtherInput.classList.add('hidden');
        partnerOtherInput.value = '';
    }
});

