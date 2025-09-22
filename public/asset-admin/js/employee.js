const dropdownButtons = document.querySelectorAll('.dropdown-button');

dropdownButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();

        const dropwdownMenu = document.querySelector('#dropdown-menu-' + btn.dataset.id);
        dropwdownMenu.classList.toggle('scale-y-0');
        dropwdownMenu.classList.toggle('scale-y-100');
    });
});