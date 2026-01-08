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

const modalCreateJob = document.querySelector('#create-new-job');
const openModalBtn = document.querySelector('#open-modal');
const closeModalBtn = document.querySelectorAll('.close-modal');

openModalBtn.addEventListener('click', (e) => {
    e.preventDefault();

    modalCreateJob.classList.toggle('hidden');
    modalCreateJob.classList.toggle('flex');
});

closeModalBtn.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        modalCreateJob.classList.remove('flex');
        modalCreateJob.classList.add('hidden');
    });
});

// Character Count
document.querySelectorAll('.char-counter').forEach(group => {
    const textarea = group.querySelector('textarea');
    const counter = group.querySelector('.char-count');

    counter.textContent = textarea.value.length;

    textarea.addEventListener('input', () => {
        counter.textContent = textarea.value.length;
    });
});

// Modal Detail
const openEdit = document.querySelectorAll('.open-edit-modal');
const closeEditModal = document.querySelectorAll('.close-modal-2');

openEdit.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#edit-modal-' + btn.dataset.id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });
});

closeEditModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modalOpen = btn.closest('.fixed');
        modalOpen.classList.remove('flex');
        modalOpen.classList.add('hidden');
    });
});

// Contract Duration Input
// const jobTypeSelects = document.querySelectorAll('.job_type');
// const contractInputs = document.querySelectorAll('.contract_duration');

// jobTypeSelects.forEach((jobTypeSelect, index) => {
//     const contractInput = contractInputs[index];
//     if (!contractInput) return;

//     const toggleContactInput = () => {
//         const isContract = jobTypeSelect.value === 'contract';
//         contractInput.style.display = isContract ? 'block' : 'none';
//         contractInput.required = isContract;
//         if (!isContract) contractInput.value = '';
//     };

//     toggleContactInput();

//     jobTypeSelect.addEventListener('change', toggleContactInput);
// });

const jobTypeSelects = document.querySelectorAll('select.job_type');

jobTypeSelects.forEach(select => {
    const wrapper = select.closest('.group') || document;
    const contractInput = wrapper.querySelector('input.contract_duration');

    if (!contractInput) return;

    // Simpan nilai awal (misal dari edit form)
    if (contractInput.dataset.initial === undefined) {
        contractInput.dataset.initial = contractInput.value ?? '';
    }

    const toggleContractInput = () => {
        const isContract = select.value === 'contract';

        // Tampilkan/sembunyikan input durasi
        contractInput.style.display = isContract ? 'block' : 'none';
        contractInput.required = isContract;

        // Kembalikan nilai awal kalau sebelumnya kosong
        if (isContract && !contractInput.value && contractInput.dataset.initial) {
            contractInput.value = contractInput.dataset.initial;
        }
    };

    // Jalankan saat halaman pertama kali dimuat (untuk edit)
    toggleContractInput();

    // Jalankan setiap kali select berubah
    select.addEventListener('change', toggleContractInput);
});
