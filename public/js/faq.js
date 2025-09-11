// Faq Answer
const dropdownBtns = document.querySelectorAll('.dropdown-button');

dropdownBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const content = btn.closest('.bg-white').querySelector('.dropdown-content');
        const icon = btn.querySelector('.dropdown-icon');

        const isOpen = !content.classList.contains('opacity-0');

        if (isOpen) {
            content.classList.remove('opacity-100', 'scale-y-100', 'max-h-[250px]', 'py-6');
            content.classList.add('opacity-0', 'scale-y-0', 'max-h-0');
            icon.classList.remove('-rotate-180');
        } else {
            content.classList.remove('opacity-0', 'scale-y-0', 'max-h-0');
            content.classList.add('opacity-100', 'scale-y-100', 'max-h-[250px]', 'py-6');
            icon.classList.add('-rotate-180');
        }
    });
});


// Question Form
const openModalBtn = document.querySelector('#add-question');
const formModal = document.querySelector('#form-modal');
const closeBtn = document.querySelectorAll('.close-modal');
const submitBtn = document.querySelector('#submit-button');

openModalBtn.addEventListener("click", function (e) {
    e.preventDefault();

    formModal.classList.toggle('hidden');
    formModal.classList.toggle('flex');
});

closeBtn.forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();

        formModal.classList.remove('flex');
        formModal.classList.add('hidden');
    });
});

// Character Count
const textarea = document.querySelector('#question_input');
const charCount = document.querySelector('#char-count');

textarea.addEventListener('input', () => {
    charCount.textContent = textarea.value.length;
});

// Validate Form
const sendBtn = document.querySelector('#submit-button');
const questionField = document.querySelector('#question_input');

function validateForm() {
    const isFilled = questionField.value.trim() !== '' && questionField.value !== "-";
    sendBtn.disabled = !isFilled;
}

questionField.addEventListener('input', validateForm);
questionField.addEventListener('change', validateForm);

validateForm();



