<header class="bg-white shadow-1 border-b border-white/20 mx-4 rounded-2xl fixed top-4 left-0 right-0 z-99">
    <div class="flex items-center justify-between py-2 px-6">
        <div class="flex items-center space-x-4">
            <button class="sidebar-button block lg:hidden hover:bg-white/60 rounded-xl">
                <i class="fas fa-bars"></i>
            </button>
            <div>
                <h2
                    class="text-xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent uppercase">
                    {{ ucwords(str_replace(['.', 'index'], [' ', ''], Route::currentRouteName())) }}
                </h2>
                <p class="text-sm text-text font-lato">Manage your company profile content</p>
            </div>
        </div>

        <div class="flex items-center space-x-4">
            <div class="relative hidden md:block">
                <div class="flex items-center gap-2 border-2 border-text/15 p-2 text-text rounded-lg">
                    <i class="fas fa-calendar-days"></i>
                    <span id="today-date"></span>
                    <span id="clock"></span>
                </div>
            </div>

            <div class="relative">
                <div class="p-2 rounded-lg hover:bg-text/25 cursor-pointer" id="profile-dropdown">
                    <div class="flex items-center gap-2">
                        <img src="{{ Auth::user()->profile_picture ? Storage::url(Auth::user()->profile_picture) : Avatar::create(Auth::user()->name)->toBase64() }}"
                            alt="{{ Auth::user()->name }}" class="rounded-full w-10 h-10">
                        <div class="flex flex-col">
                            <span
                                class="text-base font-bold text-darkChoco">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                            <span class="text-sm font-medium text-text">
                                @if (Auth::check() && Auth::user()->last_login_at)
                                    <span id="last-login" class="text-text font-medium text-sm"
                                        data-timestamp="{{ Auth::user()->last_login_at->timestamp }}"></span>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>

                <div id="profile-details"
                    class="absolute top-16 right-0 min-w-72 bg-white rounded-lg border border-text/35 shadow-lg scale-y-0 origin-top transition-all duration-300 ease-in-out overflow-hidden">
                    <div class="flex items-center p-3 gap-4">
                        <div class="relative group w-14 h-14">
                            <img src="{{ Auth::user()->profile_picture ? Storage::url(Auth::user()->profile_picture) : Avatar::create(Auth::user()->name)->toBase64() }}"
                                alt="{{ Auth::user()->name }}" class="rounded-full w-14 h-14 object-cover">

                            <div class="absolute inset-0 bg-black/50 flex items-center justify-center rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer"
                                onclick="document.getElementById('profileInput').click()">
                                <i class="fas fa-camera text-white text-lg"></i>
                            </div>

                            <form id="profileForm" action="{{ route('profile.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="file" name="profile_picture" id="profileInput"
                                    accept="image/png,image/jpeg,image/webp" class="hidden"
                                    onchange="document.getElementById('profileForm').submit()">
                            </form>
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-base text-darkChoco font-bold">{{ Auth::user()->name }}</h1>
                            <h2 class="text-sm font-medium text-text">{{ Auth::user()->email }}</h2>
                        </div>
                    </div>

                    <div class="border-t border-text/25">
                        <form action="{{ route('logout') }}" method="post" class="logout-form">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-3 hover:bg-text/25 rounded-b-lg flex items-center gap-3 text-red-600 font-medium cursor-pointer">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    function timeAgo(timestamp) {
        const now = new Date().getTime() / 1000;
        const diff = now - timestamp;

        if (diff < 60) return 'just now';
        if (diff < 3600) return Math.floor(diff / 60) + ' minutes ago';
        if (diff < 86400) return Math.floor(diff / 3600) + ' hours ago';
        return Math.floor(diff / 86400) + ' days ago';
    }

    function updateLastLogin() {
        const el = document.getElementById('last-login');
        if (!el) return;

        const timestamp = parseInt(el.dataset.timestamp);
        el.textContent = 'Was login ' + timeAgo(timestamp);
    }

    updateLastLogin();
    setInterval(updateLastLogin, 60000);
</script>

<script>
    const serverTimeString = "{{ now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s') }}";
    let serverTime = new Date(serverTimeString);

    function updateClock() {
        serverTime.setSeconds(serverTime.getSeconds() + 1);

        let hours = serverTime.getHours();
        let minutes = serverTime.getMinutes();
        let seconds = serverTime.getSeconds();

        document.getElementById("clock").innerText =
            `${hours.toString().padStart(2, '0')}:` +
            `${minutes.toString().padStart(2, '0')}:` +
            `${seconds.toString().padStart(2, '0')}`;
    }

    setInterval(updateClock, 1000);
    updateClock();
</script>

<script>
    function updateDate() {
        const now = new Date();

        // nama hari & bulan pakai locale Indonesia
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        const formatted = new Intl.DateTimeFormat('id-ID', options).format(now);

        document.getElementById("today-date").innerText = `Hari ini: ${formatted}`;
    }

    updateDate();
</script>
