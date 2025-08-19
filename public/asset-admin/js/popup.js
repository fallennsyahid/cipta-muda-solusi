const addJob = document.querySelector('#add-job')
const popupModal = document.querySelector('#popup-modal');
const openDetail = document.querySelectorAll('.open-detail');
const openEdit = document.querySelectorAll('.open-edit');
const closeModal = document.querySelectorAll('.close-modal');
const closeModal2 = document.querySelectorAll('.close-modal-2');

// Tambah Data Baru
addJob.addEventListener('click', function (e) {
    e.preventDefault();
    popupModal.classList.toggle('hidden');
    popupModal.classList.toggle('flex');
});

closeModal.forEach((close) => {
    close.addEventListener('click', function (e) {
        e.preventDefault();
        popupModal.classList.remove('flex');
        popupModal.classList.add('hidden');
    });
});

const photoInput = document.querySelector('#photo');
const previewImg = document.querySelector('#preview-img');

photoInput.addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImg.src = e.target.result;
            previewImg.classList.remove('hidden');
        }
        reader.readAsDataURL(file);
    } else {
        previewImg.src = "";
        previewImg.classList.add('hidden')
    }
});

openDetail.forEach((btn) => {
    btn.addEventListener('click', () => {
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
    btn.addEventListener('click', () => {
        const modalOpen = btn.closest('.fixed');
        modalOpen.classList.add('hidden');
        modalOpen.classList.remove('flex');
    })
})