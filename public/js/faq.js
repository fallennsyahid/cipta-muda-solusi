// Faq Answer
const dropdownBtn = document.querySelector('#dropdown-button');
const dropdownContent = document.querySelector('#dropdown-content');
const dropdownIcon = document.querySelector('#dropdown-icon');

dropdownBtn.addEventListener('click', () => {
    if (dropdownContent.classList.contains('opacity-0')) {
        dropdownContent.classList.remove('opacity-0', 'scale-y-0', 'max-h-0');
        dropdownContent.classList.add('opacity-100', 'scale-y-100', 'max-h-[500px]', 'py-6');
        dropdownIcon.classList.add('-rotate-180');
    } else {
        dropdownContent.classList.remove('opacity-100', 'scale-y-100', 'max-h-[500px]', 'py-6');
        dropdownContent.classList.add('opacity-0', 'scale-y-0', 'max-h-0');
        dropdownIcon.classList.remove('-rotate-180');
    }
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

// Search Input
const searchButton = document.querySelector('.search-button');
const searchInput = document.querySelector('#input-search');

searchButton.addEventListener('click', function (e) {
    e.preventDefault();

    searchInput.classList.toggle('w-0');
    searchInput.classList.toggle('w-64');

    searchInput.focus();
    e.stopPropagation();
});

// Validate Form
const sendBtn = document.querySelector('#submit-button');
const requiredFields = [
    document.getElementById('email-input'),
    document.getElementById('question-input'),
];

function validateForm() {
    let allFilled = requiredFields.every(field => field.value.trim() !== '' && field.value !== "-");
    sendBtn.disabled = !allFilled;
}

requiredFields.forEach(field => {
    field.addEventListener('input', validateForm);
    field.addEventListener('change', validateForm);
});

validateForm(); // cek awal


