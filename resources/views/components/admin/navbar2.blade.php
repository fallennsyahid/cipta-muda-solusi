<header class="bg-white/70 backdrop-blur-xl shadow-1 border-b border-white/20 mx-4 rounded-2xl">
    <div class="flex items-center justify-between py-2 px-6">
        <div class="flex items-center space-x-4">
            <button class="block lg:hidden hover:bg-white/60 rounded-xl">
                <i class="fas fa-bars"></i>
            </button>
            <div>
                <h2 class="text-xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">
                    {{ ucwords(str_replace(['.', 'index'], [' ', ''], Route::currentRouteName())) }}
                </h2>
                <p class="text-sm text-text font-lato">Manage your company profile content</p>
            </div>
        </div>

        <div class="flex items-center space-x-4">
            <div class="relative hidden md:block">
                <div class="flex items-center gap-2 border-2 border-text/15 p-2 text-text rounded-lg">
                    <i class="fas fa-calendar-days"></i>
                    <span>September 23th 2025</span>
                    <span>10.10.10 AM</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="{{ Auth::user()->name }}"
                    class="rounded-full w-10 h-10">
                <div class="flex flex-col">
                    <span
                        class="text-base font-bold text-darkChoco">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                    <span class="text-sm font-medium text-text">Was login 5 minutes ago.</span>
                </div>
            </div>
        </div>
    </div>
</header>
