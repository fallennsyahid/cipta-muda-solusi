const dropdownBtns = document.querySelectorAll('.dropdown-button');

dropdownBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const content = btn.closest('.bg-white').querySelector('.dropdown-content');
        const icon = btn.querySelector('.dropdown-icon');
        const question = btn.closest('.dropdown-button').querySelector('.text-heading');

        const isOpen = !content.classList.contains('opacity-0');

        if (isOpen) {
            content.classList.remove('opacity-100', 'scale-y-100', 'max-h-[250px]', 'py-6');
            content.classList.add('opacity-0', 'scale-y-0', 'max-h-0');
            icon.classList.remove('rotate-90');
            question.classList.add('line-clamp-1')
        } else {
            content.classList.remove('opacity-0', 'scale-y-0', 'max-h-0');
            content.classList.add('opacity-100', 'scale-y-100', 'max-h-[250px]', 'py-6');
            icon.classList.add('rotate-90');
            question.classList.remove('line-clamp-1');
        }
    });
});

// Jawab Pertanyaan
const answerQuestionBtn = document.querySelectorAll('.answer-question');
const closeModal = document.querySelectorAll('.close-modal');

answerQuestionBtn.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modal = document.querySelector('#answer-question-modal-' + btn.dataset.id);
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

// // Buat Pertanyaan
const modalCreateFaq = document.querySelector('#create-faq-modal');
const openModalCreateFaq = document.querySelector('#open-modal');

openModalCreateFaq.addEventListener('click', function (e) {
    e.preventDefault();

    modalCreateFaq.classList.toggle('hidden');
    modalCreateFaq.classList.toggle('flex');
});

// Edit Jawaban
const openEditAnswerModal = document.querySelectorAll('.edit-answer');

openEditAnswerModal.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const modalEdit = document.querySelector('#edit-answer-modal-' + btn.dataset.id);
        modalEdit.classList.remove('hidden');
        modalEdit.classList.add('flex');
    });
});