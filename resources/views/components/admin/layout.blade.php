    <x-admin.sidebar></x-admin.sidebar>

    <div class="ml-[20rem] mt-4 w-[calc(100%-18rem-2rem)]">
        <x-admin.navbar></x-admin.navbar>

        <main class="p-6 pt-20">
            <div class="space-y-6">
                {{ $slot }}
            </div>
        </main>
    </div>

    {{-- Logout Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const logoutForm = document.querySelector('#logout-form');
        const logoutBtn = document.querySelector('#logout-btn');

        logoutBtn.addEventListener('click', (e) => {
            e.preventDefault();

            Swal.fire({
                title: 'Yakin ingin logout?',
                text: 'Sesi Anda akan berakhir!',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Logout',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    logoutForm.submit();
                }
            })
        });
    </script>
