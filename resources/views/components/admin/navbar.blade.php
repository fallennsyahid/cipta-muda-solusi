<header
    class="bg-white/70 backdrop-blur-xl shadow-1 border-b border-white/20 mr-4 rounded-2xl fixed top-4 left-0 right-0 z-50 ml-[21rem]">
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
                    <span id="today-date"></span>
                    <span id="clock"></span>
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


<script>
    // Ambil waktu server dari Laravel
    const serverTimeString = "{{ now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s') }}";
    let serverTime = new Date(serverTimeString);

    function updateClock() {
        serverTime.setSeconds(serverTime.getSeconds() + 1);

        let hours = serverTime.getHours();
        let minutes = serverTime.getMinutes();
        let seconds = serverTime.getSeconds();

        let ampm = hours >= 12 ? "PM" : "AM";
        hours = hours % 12 || 12;

        document.getElementById("clock").innerText =
            `${hours.toString().padStart(2, '0')}:` +
            `${minutes.toString().padStart(2, '0')}:` +
            `${seconds.toString().padStart(2, '0')} ${ampm}`;
    }

    setInterval(updateClock, 1000);
    updateClock();
</script>

<script>
    function updateDate() {
        const now = new Date();

        const options = {
            month: 'long'
        }; // nama bulan panjang (August)
        const month = new Intl.DateTimeFormat('en-US', options).format(now);
        const day = now.getDate();
        const year = now.getFullYear();

        function getDaySuffix(d) {
            if (d > 3 && d < 21) return 'th';
            switch (d % 10) {
                case 1:
                    return "st";
                case 2:
                    return "nd";
                case 3:
                    return "rd";
                default:
                    return "th";
            }
        }

        const suffix = getDaySuffix(day);

        document.getElementById("today-date").innerText =
            `Today: ${month} ${day}${suffix} ${year}`;
    }

    updateDate();
</script>
