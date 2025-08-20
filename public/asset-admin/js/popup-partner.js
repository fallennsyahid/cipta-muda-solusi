const addPartner = document.querySelector('#add-partner');
const popupModal = document.querySelector('#popup-modal');
const closeModal = document.querySelectorAll('.close-modal');
const openDetail = document.querySelectorAll('.open-detail');
const openEdit = document.querySelectorAll('.open-edit');
const closeModal2 = document.querySelectorAll('.close-modal-2');

addPartner.addEventListener('click', function (e) {
    e.preventDefault();
    popupModal.classList.toggle('hidden');
    popupModal.classList.toggle('flex');
});

closeModal.forEach((btn) => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        popupModal.classList.remove('flex');
        popupModal.classList.add('hidden');
    });
});

openDetail.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        const modal = document.querySelector('#detail-modal-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

openEdit.forEach((btn) => {
    btn.addEventListener('click', () => {
        const modal = document.querySelector('#edit-modal-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

closeModal2.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        const modalOpen = btn.closest('.fixed');
        modalOpen.classList.add('hidden');
        modalOpen.classList.remove('flex');
    });
});

const imageInput = document.querySelector('#partner_image');
const previewContainer = document.querySelector('#photo-preview');
const previewImg = document.querySelector('#preview-img');
const removeButton = document.querySelector('#remove-photo');

imageInput.addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImg.src = e.target.result;
            previewImg.classList.remove('hidden');
            previewContainer.classList.remove('hidden');
            previewContainer.classList.add('flex');
        }
        reader.readAsDataURL(file);
    } else {
        previewImg.src = "";
        previewImg.classList.add('hidden');
    }
});

removeButton.addEventListener('click', (e) => {
    e.preventDefault();
    previewImg.src = "";
    imageInput.value = "";
    previewContainer.classList.add('hidden');
    previewContainer.classList.remove('flex');
});