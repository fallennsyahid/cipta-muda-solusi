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
const closeModal = document.querySelectorAll('.close-modal');
const modal = document.querySelector('#create-new-category');

openModal.addEventListener('click', function (e) {
    e.preventDefault();

    modal.classList.toggle('hidden');
    modal.classList.toggle('flex');
});

closeModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        modal.classList.remove('flex');
        modal.classList.add('hidden');

        const modalEditOpen = btn.closest('.fixed');
        modalEditOpen.classList.remove('flex');
        modalEditOpen.classList.add('hidden');
    });
});

const editCategories = document.querySelectorAll('.edit-category');

editCategories.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modalEdit = document.querySelector('#edit-category-' + btn.dataset.id);
        modalEdit.classList.remove('hidden');
        modalEdit.classList.add('flex');
    });
});