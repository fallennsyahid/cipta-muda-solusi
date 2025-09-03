    <x-admin.sidebar></x-admin.sidebar>

    <div class="ml-[20rem] mt-4 w-[calc(100%-18rem-2rem)]">
        <x-admin.navbar></x-admin.navbar>

        <main class="p-6 pt-20">
            <div class="space-y-6">
                {{ $slot }}
            </div>
        </main>
    </div>
