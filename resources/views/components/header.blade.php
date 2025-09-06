<header class="absolute top-0 left-0 w-full flex items-center">
    <div class="container max-w-full relative">
        <div class="flex items-center justify-between">
            <div class="pl-10 py-6">
                <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="Logo Cipta Muda Solusi" class="h-14 w-auto"
                    width="675" height="200">
            </div>

            {{ $slot }}

            <div id="clock" data-time="{{ now()->timezone('Asia/Jakarta')->format('Y-m-d\TH:i:s') }}"
                class="mr-10 text-darkChoco font-bold text-2xl"></div>
        </div>
    </div>
</header>
