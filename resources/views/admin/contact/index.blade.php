<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cipta Muda Solusi - Contact</title>

    {{-- CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="antialiased bg-[#eaeef6]">
    <header>
        <div class="flex flex-row w-full">
            <div class="flex justify-between items-center w-1/3 lg:w-1/5 px-6 py-3 lg:py-5">
                <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="" class="w-24 lg:w-30">
                <button type="button" aria-label="Hamburger Menu" id="close-sidebar"
                    class="hidden lg:flex rounded-full w-10 h-10 items-center justify-center cursor-pointer hover:bg-text/30 hover:scale-110 transition-all duration-200 ease-in">
                    <i class="fas fa-bars text-text text-2xl mt-2 lg:mt-0"></i>
                </button>
            </div>

            <x-admin.navbar></x-admin.navbar>
        </div>

        <x-admin.navbar2></x-admin.navbar2>
    </header>

    <main class="flex">
        <x-admin.sidebar></x-admin.sidebar>

        <article class="flex-1 m-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="mb-6 flex justify-between items-center">
                    <h1 class="font-bold text-heading text-2xl">Daftar Data Konsultasi</h1>
                    <span class="text-sm text-gray-500">Total: {{ $contacts->count() }}</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($contacts as $contact)
                        <div
                            class="group relative bg-gradient-to-br from-primary/10 to-blue-50 p-5 rounded-2xl border border-primary/20 shadow-md hover:shadow-xl transition-all duration-300">
                            <div class="flex items-center gap-3 mb-4">
                                <div
                                    class="w-12 h-12 flex items-center justify-center bg-primary text-white rounded-full shadow-md group-hover:scale-110 transition-transform">
                                    <i class="fas fa-user"></i>
                                </div>
                                <h2 class="text-lg font-bold text-gray-800">{{ $contact->full_name }}</h2>
                            </div>

                            <p class="flex items-center gap-2 text-base text-gray-600 mb-2">
                                <i class="fas fa-envelope text-primary"></i> {{ $contact->email }}
                            </p>
                            <p class="flex items-center gap-2 text-base text-gray-600 mb-2">
                                <i class="fas fa-phone text-green-500"></i> {{ $contact->phone_number }}
                            </p>
                            <p class="flex items-start gap-2 text-base text-gray-700">
                                <i class="fas fa-comment text-blue-500 mt-1"></i>
                                <span class="truncate">{{ $contact->message }}</span>
                            </p>
                            <div class="flex justify-between items-center border-t border-text mt-4 pt-3">
                                <span
                                    class="text-base font-semibold text-text">{{ $contact->created_at->diffForHumans() }}</span>
                                <div class="flex items-center gap-3">
                                    <a href="#" data-id="{{ $contact->id }}"
                                        class="open-detail text-sm font-medium px-2 py-2 bg-amber-100 text-white hover:bg-amber-200 rounded transition-all duration-200 ease-in-out">
                                        <i class="fas fa-eye text-amber-400"></i>
                                    </a>
                                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST"
                                        class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-sm font-medium px-2 py-2 bg-red-100 text-white cursor-pointer hover:bg-red-200 rounded transition-all duration-200 ease-in-out">
                                            <i class="fas fa-trash text-red-400"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Detail Popup Start --}}
            @foreach ($contacts as $contact)
                <div id="detail-modal-{{ $contact->id }}"
                    class="fixed z-50 inset-0 hidden items-center justify-center p-4">
                    <div class="close-modal-2 absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
                    <div
                        class="relative bg-bg rounded-lg shadow-xl flex flex-col items-center justify-center max-w-lg w-full">
                        <div class="p-6">
                            <div class="mb-6 text-center">
                                <div
                                    class="w-16 h-16 bg-primary rounded-full mx-auto flex justify-center items-center mb-3 shadow-lg">
                                    <i class="fas fa-user text-2xl text-white"></i>
                                </div>
                                <h1 class="text-text text-2xl font-bold mb-1.5">{{ $contact->full_name }}</h1>
                                <div class="w-20 h-1 bg-primary mx-auto rounded-full"></div>
                            </div>

                            <div class="space-y-5">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                    <div
                                        class="bg-slate-200 p-5 rounded-lg shadow-md border border-gray-300 transition-all duration-200 ease-in-out hover:bg-slate-200/65">
                                        <div class="flex items-center mb-2">
                                            <i class="fas fa-envelope text-primary mr-2"></i>
                                            <h1 class="text-sm font-medium text-text">Email</h1>
                                        </div>
                                        <p class="text-lg text-text ml-6 break-words">{{ $contact->email }}</p>
                                    </div>
                                    <div
                                        class="bg-slate-200 p-5 rounded-lg shadow-md border border-gray-300 transition-all duration-200 ease-in-out hover:bg-slate-200/65">
                                        <div class="flex items-center mb-2">
                                            <i class="fas fa-phone text-primary mr-2"></i>
                                            <h1 class="text-sm font-medium text-text">Phone</h1>
                                        </div>
                                        <p class="text-lg text-text ml-6">{{ $contact->phone_number }}</p>
                                    </div>
                                </div>
                                <div
                                    class="bg-slate-200 p-5 rounded-lg shadow-md border border-gray-300 transition-all duration-200 ease-in-out hover:bg-slate-200/65">
                                    <div class="flex items-center mb-2">
                                        <i class="fas fa-comment-dots text-primary mr-2"></i>
                                        <h1 class="text-sm font-medium text-text">Pesan</h1>
                                    </div>
                                    <p class="text-lg text-text ml-6">{{ $contact->message }}</p>
                                </div>
                                <div class="flex justify-end">
                                    <a href="#"
                                        class="close-modal-2 px-5 py-3 bg-gray-700 text-white rounded-lg text-lg font-medium hover:bg-gray-700/90 transition-all duration-200 ease-in-out">
                                        <i class="fas fa-x"></i>
                                        Close
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- Detail Popup End --}}
        </article>
    </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openDetail = document.querySelectorAll('.open-detail');
        const closeModal2 = document.querySelectorAll('.close-modal-2');

        openDetail.forEach((btn) => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const modal = document.querySelector('#detail-modal-' + btn.dataset.id);
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });

        closeModal2.forEach((btn) => {
            btn.addEventListener('click', () => {
                const modalOpen = btn.closest('.fixed');
                modalOpen.classList.add('hidden');
                modalOpen.classList.remove('flex');
            });
        });

        const deleteForms = document.querySelectorAll('.delete-form');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Yakin ingin menghapus',
                    text: 'Data yang sudah dihapus tidak dapat dipulihkan!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#e3342f',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });

        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500,
            });
        @endif
    });
</script>

{{-- <script src="{{ asset('asset-admin/js/popup.js') }}"></script> --}}

</html>
