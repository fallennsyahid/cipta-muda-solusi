<div id="sidebar-overlay" class="fixed inset-0 bg-black/30 backdrop-blur-sm hidden z-40 lg:hidden"></div>
<div id="sidebar"
    class="fixed top-28 lg:top-24 left-0 lg:left-4 bottom-4 z-50 w-72 bg-white/80 shadow-lg rounded-xl transition-all duration-700 ease-in-out flex flex-col -translate-x-full lg:translate-x-0">

    <div class="flex items-center justify-between py-3 px-6 bg-text/25 rounded-t-xl relative">
        <a href="#"
            class="sidebar-button inline-flex justify-center items-center bg-primary text-white font-bold text-base h-12 w-16 rounded-xl">
            CMS
        </a>
        <div class="" id="close-sidebar-2">
            <button type="button"
                class="sidebar-button w-10 h-10 text-darkChoco hover:bg-white/70 flex justify-center items-center rounded-full cursor-pointer group">
                <i class="fas fa-angles-left text-xl"></i>
            </button>
        </div>
    </div>

    <div class="flex-1 flex flex-col justify-between">
        <nav class="p-6 space-y-3 overflow-y-auto custom-scrollbar">
            <a href="{{ route('dashboard.index') }}" title="Dashboard"
                class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group relative overflow-hidden {{ request()->routeIs('dashboard.index') ? 'bg-gradient-to-r from-primary to-secondary text-white shadow-lg scale-105' : 'text-text hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-md' }}">
                <i
                    class="fas fa-table-cells-large {{ request()->routeIs('dashboard.index') ? 'text-white transition-all duration-300' : 'text-text transition-all duration-300 group-hover:scale-110' }}"></i>
                <span class="font-medium pl-2">
                    Dashboard
                </span>
            </a>

            <a href="" title="Blog"
                class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group relative overflow-hidden {{ request()->routeIs('blogs.index') ? 'bg-gradient-to-r from-primary to-secondary text-white shadow-lg scale-105' : 'text-text hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-md' }}">
                <i
                    class="fas fa-newspaper {{ request()->routeIs('blogs.index') ? 'text-white transition-all duration-300' : 'text-text transition-all duration-300 group-hover:scale-110' }}"></i>
                <span class="font-medium pl-2">
                    Blog
                </span>
            </a>
        </nav>

        <div class="p-6">
            <form action="" method="POST" id="logout-form">
                @csrf
                <a href="javascript:void(0)" id="logout-btn"
                    class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group relative overflow-hidden bg-red-600 text-white hover:bg-red-600/80 shadow-lg hover:scale-105">
                    <i class="fas fa-arrow-right-from-bracket transition-all duration-300"></i>
                    <span class="font-medium pl-2">
                        Logout
                    </span>
                </a>
            </form>
        </div>
    </div>

</div>
