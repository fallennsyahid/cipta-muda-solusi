document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');
    const sidebarButtons = document.querySelectorAll('.sidebar-button');
    const closeSidebar2 = document.getElementById('close-sidebar-2');
    const sidebarTexts = document.querySelectorAll('.sidebar-text');
    const sidebarOverlay = document.getElementById('sidebar-overlay');

    let isCollapsed = false;
    let isMobileOpen = false;

    const toggleSidebar = () => {
        if (window.innerWidth < 1024) {
            // === MOBILE MODE: overlay ===
            sidebar.classList.remove('w-24', 'w-72');
            sidebar.classList.add('w-72');

            if (!isMobileOpen) {
                sidebar.classList.remove('-translate-x-full');
                sidebar.classList.add('translate-x-0');

                sidebarOverlay.classList.remove('hidden'); // tampilkan overlay
                sidebarOverlay.classList.add('block');

                isMobileOpen = true;
            } else {
                sidebar.classList.remove('translate-x-0');
                sidebar.classList.add('-translate-x-full');

                sidebarOverlay.classList.add('hidden'); // sembunyikan overlay
                sidebarOverlay.classList.remove('block');

                isMobileOpen = false;
            }
            return;
        }

        // === DESKTOP MODE: collapse ===
        if (!isCollapsed) {
            sidebar.classList.remove('w-72');
            sidebar.classList.add('w-24');
            mainContent.classList.remove('ml-74');
            mainContent.classList.add('ml-28');

            sidebarTexts.forEach(text => {
                text.classList.add('opacity-0', 'scale-0');
            });

            closeSidebar2.classList.add('opacity-0', 'scale-0');
            isCollapsed = true;
        } else {
            sidebar.classList.remove('w-24');
            sidebar.classList.add('w-72');
            mainContent.classList.remove('ml-28');
            mainContent.classList.add('ml-74');

            setTimeout(() => {
                sidebarTexts.forEach(text => {
                    text.classList.remove('opacity-0', 'scale-0');
                });

                closeSidebar2.classList.remove('opacity-0', 'scale-0');
            }, 300);

            isCollapsed = false;
        }
    };

    sidebarButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            toggleSidebar();
        });
    });

    // Klik overlay untuk nutup sidebar
    sidebarOverlay.addEventListener('click', () => {
        if (window.innerWidth < 1024 && isMobileOpen) {
            toggleSidebar();
        }
    });

    const handleResize = () => {
        if (window.innerWidth < 1024) {
            sidebar.classList.add('-translate-x-full');
            sidebar.classList.remove('translate-x-0');
            mainContent.classList.remove('ml-28', 'ml-74');
            mainContent.classList.add('ml-0');
            sidebarOverlay.classList.add('hidden'); // pastikan overlay ketutup
            isMobileOpen = false;
        } else {
            sidebar.classList.remove('-translate-x-full', 'translate-x-0');
            sidebar.classList.add('w-72');
            mainContent.classList.remove('ml-0');
            mainContent.classList.add(isCollapsed ? 'ml-28' : 'ml-74');
            sidebarOverlay.classList.add('hidden'); // desktop ga pakai overlay
        }
    };

    handleResize();
    window.addEventListener('resize', handleResize);
});
