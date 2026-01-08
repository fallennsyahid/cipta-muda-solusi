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

const modalCreate = document.querySelector('#create-new-blog');
const openModal = document.querySelector('#open-modal');
const closeModal = document.querySelectorAll('.close-modal');

// 🟢 Buka modal create
if (openModal) {
    openModal.addEventListener('click', function (e) {
        e.preventDefault();
        modalCreate.classList.toggle('hidden');
        modalCreate.classList.add('flex');
    });
}

// 🔴 Tutup modal
closeModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modalOpen = btn.closest('.fixed');
        if (modalOpen) {
            modalOpen.classList.remove('flex');
            modalOpen.classList.add('hidden');
        }

        // Tutup modal create juga
        if (modalCreate) {
            modalCreate.classList.remove('flex');
            modalCreate.classList.add('hidden');
        }
    });
});

// 🟣 Event delegation untuk modal detail & edit
document.addEventListener('click', function (e) {
    const detailBtn = e.target.closest('.open-modal-detail');
    const editBtn = e.target.closest('.open-modal-edit');

    if (detailBtn) {
        e.preventDefault();
        const slug = detailBtn.dataset.id;
        const modal = document.querySelector('#detail-blog-' + slug);
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }

    if (editBtn) {
        e.preventDefault();
        const slug = editBtn.dataset.id;
        const modal = document.querySelector('#edit-blog-' + slug);
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    }
});

const charCounterGroup = document.querySelectorAll('.char-counter');

charCounterGroup.forEach(group => {
    const input = group.querySelector('input[type="hidden"]');
    const counter = group.querySelector('.char-count');

    counter.textContent = input.value.length;

    input.addEventListener('input', () => {
        counter.textContent = input.value.length;
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