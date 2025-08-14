const searchButton = document.querySelectorAll('.search-button');
const searchBox = document.querySelector('#search-box');
const searchForm = document.querySelector('.search-form');

searchButton.forEach((btn) => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();

        searchForm.classList.toggle('scale-x-100');
        searchForm.classList.toggle('scale-x-0');

        if (searchForm.classList.contains('scale-x-100')) {
            searchBox.focus();
        }
    });
});