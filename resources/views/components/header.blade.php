<header class="absolute top-0 left-0 w-full flex items-center z-99999">
    <div class="container max-w-full relative">
        <div class="flex items-center justify-between">
            <a href="{{ route('index') }}" class="pl-4 lg:pl-10 py-6 flex flex-col  items-center">
                <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="Logo Cipta Muda Solusi" class="h-14 w-auto"
                    width="675" height="200">
                <span class="font-bold text-base text-heading">PT. Cipta Muda Solusi</span>
            </a>

            {{ $slot }}

            <div id="clock" data-time="{{ now()->timezone('Asia/Jakarta')->format('Y-m-d\TH:i:s') }}"
                class="hidden lg:block mr-10 text-darkChoco font-bold text-2xl"></div>
        </div>
    </div>
</header>
