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

const openModal = document.querySelectorAll('.open-modal');
const closeModal = document.querySelectorAll('.close-modal');

openModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#call-modal-' + btn.dataset.id);
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