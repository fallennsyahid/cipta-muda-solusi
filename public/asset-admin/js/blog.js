const openModal = document.querySelector('#open-modal');
const openModalDetail = document.querySelectorAll('.open-modal-detail');
const openModalEdit = document.querySelectorAll('.open-modal-edit');
const modalCreate = document.querySelector('#create-new-blog');
const closeModal = document.querySelectorAll('.close-modal');

openModal.addEventListener('click', function (e) {
    e.preventDefault();

    modalCreate.classList.toggle('hidden');
    modalCreate.classList.add('flex');
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

openModalDetail.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#detail-blog-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

openModalEdit.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#edit-blog-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

const charCounterGroup = document.querySelectorAll('.char-counter');

charCounterGroup.forEach(group => {
    const textarea = group.querySelector('textarea');
    const counter = group.querySelector('.char-count');

    counter.textContent = textarea.value.length;

    textarea.addEventListener('input', () => {
        counter.textContent = textarea.value.length;
    });
});

const btnNotif = document.querySelector('#open-notif');
const notifDropdown = document.getElementById("notifDropdown");

btnNotif.addEventListener("click", () => {
    notifDropdown.classList.toggle("hidden");
});

// Optional: klik di luar, dropdown ketutup
document.addEventListener("click", (e) => {
    if (!btnNotif.contains(e.target) && !notifDropdown.contains(e.target)) {
        notifDropdown.classList.add("hidden");
    }
});