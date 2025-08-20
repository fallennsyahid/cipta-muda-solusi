<aside
    class="bg-white m-6 w-1/3 lg:w-1/5 rounded-lg shadow scale-x-100 origin-center transition-all duration-200 ease-linear">
    <ul class="flex flex-col gap-6 p-6">
        <li>
            <a href="{{ route('dashboard') }}"
                class="flex items-center gap-3 rounded-sm text-xl p-3 {{ request()->routeIs('dashboard') ? 'bg-primary text-white' : 'text-text hover:bg-primary hover:text-white' }} transition-all duration-200 ease-in-out">
                <i class="fas fa-desktop"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('jobs.index') }}"
                class="flex items-center gap-3 rounded-sm text-xl p-3 {{ request()->routeIs('jobs.index') ? 'bg-primary text-white' : 'text-text hover:bg-primary hover:text-white' }} transition-all duration-200 ease-in-out">
                <i class="fas fa-briefcase"></i>
                <span>Jobs</span>
            </a>
        </li>
        <li>
            <a href="{{ route('contact.index') }}"
                class="flex items-center gap-3 rounded-sm text-xl p-3 {{ request()->routeIs('contact.index') ? 'bg-primary text-white' : 'text-text hover:bg-primary hover:text-white' }} transition-all duration-200 ease-in-out">
                <i class="fas fa-comment-dots"></i>
                <span>Contact</span>
            </a>
        </li>
        <li>
            <a href="{{ route('partner.index') }}"
                class="flex items-center gap-3 rounded-sm text-xl p-3 {{ request()->routeIs('partner.index') ? 'bg-primary text-white' : 'text-text hover:bg-primary hover:text-white' }} transition-all duration-200 ease-in-out">
                <i class="fas fa-handshake"></i>
                <span>Partner</span>
            </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                    class="flex items-center gap-3 text-white rounded-sm text-xl p-3 bg-red-500">
                    <i class="fas fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </form>
        </li>
    </ul>
</aside>
