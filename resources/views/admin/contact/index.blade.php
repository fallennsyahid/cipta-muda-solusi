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

<body class="min-h-screen bg-gradient-to-br from-section via-white to-accent">
    <x-admin.layout>
        <div class="flex flex-wrap items-center justify-between">
            <div class="space-y-2">
                <h1 class="text-2xl text-heading font-bold">
                    {{ ucwords(str_replace(['.', 'index'], [' ', ''], Route::currentRouteName())) }} Management
                </h1>
                <p class="text-text font-lato">
                    Manage contact form submissions and customer inquiries
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Submissions
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-message text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $contacts->total() }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Pesan Baru
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-secondary flex justify-center items-center">
                        <i class="fas fa-circle-exclamation text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $pesanBaru }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Belum Dibalas
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-amber-600 flex justify-center items-center">
                        <i class="fas fa-clock text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalBelumDibalas }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Sudah Dibalas
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-circle-check text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalSudahDibalas }}
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            @foreach ($contacts as $contact)
                <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <div>
                                <img src="{{ Avatar::create($contact->full_name)->toBase64() }}"
                                    alt="{{ $contact->full_name }}" class="rounded-full">
                            </div>
                            <div class="space-y-3">
                                <h1 class="font-bold text-heading text-2xl">{{ $contact->full_name }}</h1>
                                @if ($contact->status === $belumDibalas)
                                    <span class="bg-red-200 px-2 py-1 rounded-full text-red-700">
                                        Belum Dibalas
                                    </span>
                                @else
                                    <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">
                                        Sudah Dibalas
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="relative z-50 flex items-center gap-2">
                            <button type="button"
                                class="h-9 w-9 rounded-full flex items-center justify-center cursor-pointer hover:bg-text/20">
                                <i class="fas fa-ellipsis"></i>
                            </button>
                            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST"
                                class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cursor-pointer">
                                    <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 mt-10 mb-5">
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-envelope mr-2"></i>
                            {{ $contact->email }}
                        </div>
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-phone mr-2"></i>
                            {{ $contact->phone_number }}
                        </div>
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-calendar-days mr-2"></i>
                            {{-- 4 September 2025 pukul 12.42 --}}
                            {{ $contact->created_at->format('d/m/Y') }} pukul
                            {{ $contact->created_at->format('H:i') }}
                        </div>
                    </div>

                    <div class="bg-gray-100 p-4 font-lato rounded-lg mt-2 mb-4">
                        <p class="text-text font-lato">
                            {{ $contact->message }}
                        </p>
                    </div>

                    <div class="flex justify-between">
                        <span class="flex items-center text-sm text-text">
                            <i class="fas fa-message mr-2"></i>
                            Website Contact Form
                        </span>
                        <div class="flex items-center space-x-3">
                            @if ($contact->status === $belumDibalas)
                                <form action="{{ route('contact.update', $contact->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"
                                        class="bg-teal-500 px-4 py-2 text-white text-lg rounded-lg cursor-pointer hover:bg-teal-600">
                                        <i class="fas fa-pen mr-2"></i>
                                        Update Status
                                    </button>
                                </form>
                            @else
                                <button type="button" disabled
                                    class="bg-teal-500 px-4 py-2 text-white text-lg rounded-lg opacity-50 cursor-not-allowed">
                                    <i class="fas fa-pen mr-2"></i>
                                    Update Status
                                </button>
                            @endif
                            <a href="#"
                                class="bg-orange-500 px-4 py-2 text-white text-lg rounded-lg hover:bg-orange-600">
                                <i class="fas fa-phone-volume mr-2"></i>
                                Hubungi Ulang
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="mt-4">
                {{ $contacts->links() }}
            </div>
        </div>

    </x-admin.layout>
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

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>

</html>
