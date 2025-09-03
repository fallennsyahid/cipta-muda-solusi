const sidebar = document.querySelector('#sidebar');
const sidebarButtons = document.querySelectorAll('.sidebar-button');
const closeSidebar2 = document.querySelector('#close-sidebar-2')

sidebarButtons.forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();

        sidebar.classList.toggle('w-72');
        sidebar.classList.toggle('w-24');

        if (sidebar.classList.contains('w-72')) {
            setTimeout(() => {
                closeSidebar2.classList.remove('hidden');
                closeSidebar2.classList.add('block');
            }, 300);
        } else {
            setTimeout(() => {
                closeSidebar2.classList.add('hidden')
                closeSidebar2.classList.remove('block');
            }, 300);
        }
    });
});

// Dropdown Jobs
const toggle = document.getElementById("dropdown-toggle");
const menu = toggle.nextElementSibling;
const chevron = toggle.querySelector(".chevron");

toggle.addEventListener("click", function (e) {
    e.preventDefault();
    menu.classList.toggle("hidden");
    chevron.classList.toggle("rotate-180");
});

// Tutup dropdown kalau klik di luar
document.addEventListener("click", function (e) {
    if (!toggle.parentElement.contains(e.target)) {
        menu.classList.add("hidden");
        chevron.classList.remove("rotate-180");
    }
});
