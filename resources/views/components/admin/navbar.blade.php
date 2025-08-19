<div class="px-6 py-3 lg:py-5 bg-accent w-full lg:w-4/5">
    <div class="flex justify-between items-center gap-3 w-full">

        <div class="hidden lg:flex items-center gap-3">
            <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="" class="rounded-lg">
            <div class="flex items-center gap-2">
                <span class="text-text font-bold text-2xl">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                <span class="text-text/60 font-medium text-sm">Was login 5 minutes ago.</span>
            </div>
        </div>

        <div class="flex items-center gap-3 justify-end mt-2 w-full lg:w-auto lg:justify-end">
            <div
                class="hidden lg:flex lg:items-center gap-2 text-sm text-text border border-text/30 py-2 px-3 rounded-sm">
                <p>Today: August 18th 2025</p>
                <i class="fas fa-calendar-days"></i>
            </div>
            <div id="clock" class="font-medium flex lg:items-center text-lg lg:text-xl text-text"></div>
            <button
                class="flex lg:hidden w-10 h-10 rounded-full items-center justify-center cursor-pointer hover:bg-text/30 hover:scale-110 transition-all duration-200 ease-in">
                <i class="fas fa-bars text-text text-2xl"></i>
            </button>
        </div>
    </div>
</div>

<script>
    // Ambil waktu server dari Laravel
    const serverTimeString = "{{ now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s') }}";
    let serverTime = new Date(serverTimeString);

    function updateClock() {
        serverTime.setSeconds(serverTime.getSeconds() + 1); // tambah 1 detik tiap interval

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
