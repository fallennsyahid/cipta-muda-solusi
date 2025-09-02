<div id="sidebar"
    class="fixed top-4 left-4 bottom-4 z-50 w-72 bg-white/80 backdrop-blur-xl shadow-1 rounded-xl transition-all duration-700 ease-in-out">
    {{-- Header Sidebar --}}
    <div class="flex items-center justify-between py-3 px-6 bg-text/25 rounded-t-xl relative">
        <a href="#"
            class="sidebar-button inline-flex justify-center items-center bg-white text-darkChoco font-bold text-base h-12 w-16 rounded-xl">
            CMS
        </a>
        <div class="" id="close-sidebar-2">
            <button type="button"
                class="sidebar-button w-10 h-10 text-darkChoco hover:bg-white/70 flex justify-center items-center rounded-full cursor-pointer group">
                <i class="fas fa-angles-left text-xl"></i>
            </button>
        </div>
    </div>

    <nav class="flex-1 p-6 space-y-3 overflow-y-auto">
        <a href="{{ route('dashboard') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group relative overflow-hidden {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-primary to-secondary text-white shadow-lg scale-105' : 'text-text hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-md' }}">
            <i
                class="fas fa-table-cells-large {{ request()->routeIs('dashboard') ? 'text-white transition-all duration-300' : 'transition-all duration-300 text-text group-hover:scale-110' }}"></i>
            <span class="font-medium text-white pl-2">
                Dashboard
            </span>
        </a>
        <a href="{{ route('jobs.index') }}"
            class="flex items-center justify-between space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group relative overflow-hidden {{ request()->routeIs('jobs.index') ? 'bg-gradient-to-r from-primary to-secondary text-white shadow-lg scale-105' : 'text-text hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-md' }}">
            <span class="flex items-center gap-5">
                <i
                    class="fas fa-briefcase {{ request()->routeIs('jobs.index') ? 'text-white transition-all duration-300' : 'transition-all duration-300 text-text group-hover:scale-110' }}"></i>
                <span class="font-medium">
                    Jobs
                </span>
            </span>
            <span>
                <i class="fas fa-chevron-down"></i>
            </span>
        </a>
        <a href=""
            class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group relative overflow-hidden text-text hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-md">
            <i class="fas fa-question-circle transition-all duration-300 text-text group-hover:scale-110"></i>
            <span class="font-medium pl-2">
                Faq
            </span>
        </a>
        <a href="{{ route('partner.index') }}"
            class="flex items-center justify-between space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group relative overflow-hidden {{ request()->routeIs('partner.index') ? 'bg-gradient-to-r from-primary to-secondary text-white shadow-lg scale-105' : 'text-text hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-md' }}">
            <span class="flex items-center gap-5">
                <i class="fas fa-handshake transition-all duration-300 text-text group-hover:scale-110"></i>
                <span class="font-medium">
                    Partner
                </span>
            </span>
            <span>
                <i class="fas fa-chevron-down"></i>
            </span>
        </a>
        <a href=""
            class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group relative overflow-hidden text-text hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-md">
            <i class="fas fa-newspaper transition-all duration-300 text-text group-hover:scale-110"></i>
            <span class="font-medium pl-2">
                Blog
            </span>
        </a>
        <a href="{{ route('contact.index') }}"
            class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group relative overflow-hidden {{ request()->routeIs('contact.index') ? 'bg-gradient-to-r from-primary to-secondary text-white shadow-lg scale-105' : 'text-text hover:bg-white/60 hover:shadow-md hover:scale-102 backdrop-blur-md' }}">
            <i
                class="fas fa-comment-dots relative z-10 transition-all duration-300 text-text group-hover:scale-110"></i>
            <span class="font-medium pl-2">
                Contact
            </span>
        </a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-300 group relative overflow-hidden bg-red-600 text-white hover:bg-red-600/80 shadow-lg hover:scale-105">
                <i class="fas fa-arrow-right-from-bracket relative z-10 transition-all duration-300"></i>
                <span class="font-medium relative z-10 pl-2">
                    Logout
                </span>
            </a>
        </form>
    </nav>
</div>
