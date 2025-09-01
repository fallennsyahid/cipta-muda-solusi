<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Layout</title>
    <script src="https://cdn.jsdelivr.net/npm/lucide/dist/lucide.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .scale-102 {
            transform: scale(1.02);
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-100 via-white to-blue-300">

    <!-- Sidebar -->
    <div id="sidebar"
        class="fixed top-4 left-4 bottom-4 z-50 w-64 bg-white/80 backdrop-blur-xl shadow-2xl rounded-2xl border border-white/20 transform -translate-x-full scale-95 transition-all duration-500 ease-out lg:translate-x-0 lg:scale-100">
        <div class="flex flex-col h-full rounded-2xl overflow-hidden">

            <!-- Header -->
            <div
                class="flex items-center justify-between h-16 px-6 bg-gradient-to-r from-blue-500 to-purple-500 relative">
                <div class="absolute inset-0 bg-black/10 rounded-t-2xl"></div>
                <div class="flex items-center space-x-3 relative z-10">
                    <div
                        class="w-10 h-10 bg-white/90 backdrop-blur-sm rounded-xl flex items-center justify-center shadow-lg hover:scale-110 transition-transform duration-300">
                        <span class="text-blue-500 font-bold text-sm">CMS</span>
                    </div>
                    <div>
                        <h1 class="text-white font-bold text-base drop-shadow-sm">Cipta Muda</h1>
                        <p class="text-blue-100 text-xs">Solusi</p>
                    </div>
                </div>
                <button id="closeSidebar" class="lg:hidden text-white hover:bg-white/20 rounded-xl relative z-10">
                    <i data-lucide="x" class="h-5 w-5"></i>
                </button>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-4 py-6 space-y-3 overflow-y-auto">
                <a href="/"
                    class="flex items-center space-x-3 px-4 py-3 rounded-xl bg-gradient-to-r from-blue-500 to-purple-500 text-white shadow-lg scale-105">
                    <i data-lucide="layout-dashboard" class="h-5 w-5"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="/jobs"
                    class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-sm">
                    <i data-lucide="briefcase" class="h-5 w-5"></i>
                    <span class="font-medium">Jobs</span>
                </a>
                <a href="/partners"
                    class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-sm">
                    <i data-lucide="users" class="h-5 w-5"></i>
                    <span class="font-medium">Partners</span>
                </a>
                <a href="/faq"
                    class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-sm">
                    <i data-lucide="help-circle" class="h-5 w-5"></i>
                    <span class="font-medium">FAQ</span>
                </a>
                <a href="/blog"
                    class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-sm">
                    <i data-lucide="file-text" class="h-5 w-5"></i>
                    <span class="font-medium">Blog</span>
                </a>
                <a href="/settings"
                    class="flex items-center space-x-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-sm">
                    <i data-lucide="settings" class="h-5 w-5"></i>
                    <span class="font-medium">Settings</span>
                </a>
            </nav>

            <!-- User Panel -->
            <div class="p-4 border-t border-white/20 backdrop-blur-sm">
                <div
                    class="flex items-center space-x-3 p-4 rounded-xl bg-gradient-to-r from-white/40 to-white/20 backdrop-blur-sm border border-white/30 hover:shadow-lg transition-all duration-300">
                    <div class="h-12 w-12 rounded-full overflow-hidden ring-2 ring-white/30">
                        <img src="/admin-avatar.png" alt="Admin" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-gray-800 truncate">Admin User</p>
                        <p class="text-xs text-gray-500 opacity-80">admin@ciptamuda.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="lg:ml-72">
        <!-- Header -->
        <header
            class="bg-white/70 backdrop-blur-xl shadow-sm border-b border-white/20 sticky top-0 z-40 mx-4 mt-4 rounded-2xl">
            <div class="flex items-center justify-between h-16 px-6">
                <div class="flex items-center space-x-4">
                    <button id="openSidebar" class="lg:hidden hover:bg-white/60 rounded-xl">
                        <i data-lucide="menu" class="h-5 w-5"></i>
                    </button>
                    <div>
                        <h2
                            class="text-xl font-bold bg-gradient-to-r from-blue-500 to-purple-500 bg-clip-text text-transparent">
                            Dashboard</h2>
                        <p class="text-sm text-gray-600">Manage your company profile content</p>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="relative hidden md:block">
                        <i data-lucide="search"
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400"></i>
                        <input type="text" placeholder="Search..."
                            class="pl-10 pr-4 py-2 w-64 bg-white/60 backdrop-blur-sm border border-white/30 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm hover:shadow-md transition-all duration-300">
                    </div>

                    <button class="relative hover:bg-white/60 rounded-xl p-2">
                        <i data-lucide="bell" class="h-5 w-5 text-gray-700"></i>
                        <span
                            class="absolute -top-1 -right-1 h-5 w-5 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs rounded-full flex items-center justify-center shadow-lg animate-pulse">3</span>
                    </button>

                    <!-- User Dropdown -->
                    <div class="relative">
                        <button id="userMenuBtn" class="flex items-center space-x-2 hover:bg-white/60 rounded-xl p-1">
                            <div class="h-8 w-8 rounded-full overflow-hidden">
                                <img src="/admin-avatar.png" alt="User" class="w-full h-full object-cover">
                            </div>
                            <i data-lucide="chevron-down" class="h-4 w-4 text-gray-700"></i>
                        </button>
                        <div id="userDropdown"
                            class="absolute right-0 mt-2 w-56 bg-white rounded-xl shadow-lg border border-gray-200 hidden z-50">
                            <div class="px-4 py-2 font-semibold">My Account</div>
                            <hr class="border-gray-200">
                            <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"><i
                                    data-lucide="user" class="h-4 w-4 mr-2"></i>Profile</a>
                            <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"><i
                                    data-lucide="settings" class="h-4 w-4 mr-2"></i>Settings</a>
                            <hr class="border-gray-200">
                            <a href="#" class="flex items-center px-4 py-2 hover:bg-red-100 text-red-600"><i
                                    data-lucide="log-out" class="h-4 w-4 mr-2"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="p-6 pt-4">
            <h1 class="text-2xl font-bold">Welcome to Admin Panel</h1>
            <p class="mt-2 text-gray-600">This is your main content area.</p>
        </main>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black/20 backdrop-blur-sm z-40 hidden lg:hidden"></div>

    <script>
        lucide.createIcons();

        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const openBtn = document.getElementById('openSidebar');
        const closeBtn = document.getElementById('closeSidebar');

        openBtn.addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full', 'scale-95');
            sidebar.classList.add('translate-x-0', 'scale-100');
            overlay.classList.remove('hidden');
        });

        closeBtn.addEventListener('click', () => {
            sidebar.classList.remove('translate-x-0', 'scale-100');
            sidebar.classList.add('-translate-x-full', 'scale-95');
            overlay.classList.add('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.remove('translate-x-0', 'scale-100');
            sidebar.classList.add('-translate-x-full', 'scale-95');
            overlay.classList.add('hidden');
        });

        // User dropdown
        const userBtn = document.getElementById('userMenuBtn');
        const userDropdown = document.getElementById('userDropdown');

        userBtn.addEventListener('click', () => {
            userDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!userBtn.contains(e.target) && !userDropdown.contains(e.target)) {
                userDropdown.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
