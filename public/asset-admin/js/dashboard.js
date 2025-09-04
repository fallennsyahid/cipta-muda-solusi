document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('main-content');
    const sidebarButtons = document.querySelectorAll('.sidebar-button');
    const closeSidebar2 = document.getElementById('close-sidebar-2');
    const sidebarTexts = document.querySelectorAll('.sidebar-text');

    let isCollapsed = false;

    // Function to toggle sidebar
    const toggleSidebar = () => {
        if (!isCollapsed) {
            // Collapse sidebar
            sidebar.classList.remove('w-72');
            sidebar.classList.add('w-24');
            mainContent.classList.remove('ml-74');
            mainContent.classList.add('ml-28');

            // Hide text elements
            sidebarTexts.forEach(text => {
                text.classList.add('opacity-0', 'scale-0');
            });

            // Hide close button
            closeSidebar2.classList.add('opacity-0', 'scale-0');

            isCollapsed = true;
        } else {
            // Expand sidebar
            sidebar.classList.remove('w-24');
            sidebar.classList.add('w-72');
            mainContent.classList.remove('ml-28');
            mainContent.classList.add('ml-74');

            // Show text elements with delay
            setTimeout(() => {
                sidebarTexts.forEach(text => {
                    text.classList.remove('opacity-0', 'scale-0');
                });

                closeSidebar2.classList.remove('opacity-0', 'scale-0');
            }, 300);

            isCollapsed = false;
        }
    };

    // Add click event to all sidebar buttons
    sidebarButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            toggleSidebar();
        });
    });

    // Mobile responsiveness
    const handleResize = () => {
        if (window.innerWidth < 1024) {
            // Mobile: Hide sidebar by default
            if (!isCollapsed) {
                mainContent.classList.remove('ml-74');
                mainContent.classList.add('ml-0');
            }
        } else {
            // Desktop: Show proper margins
            if (isCollapsed) {
                mainContent.classList.remove('ml-0');
                mainContent.classList.add('ml-28');
            } else {
                mainContent.classList.remove('ml-0');
                mainContent.classList.add('ml-74');
            }
        }
    };

    // Initial setup and resize listener
    handleResize();
    window.addEventListener('resize', handleResize);
});