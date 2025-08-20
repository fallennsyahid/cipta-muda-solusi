<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cipta Muda Solusi - Partner</title>

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
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-heading">Daftar Partner ({{ $partners->count() }})</h1>
                    <a href="#" id="add-partner"
                        class="text-lg bg-primary flex items-center rounded-xl font-semibold text-white px-6 py-4 shadow-lg hover:bg-primary/90 hover:shadow-xl transition-all duration-200 ease-in-out">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Partner
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($partners as $partner)
                        <div
                            class="border rounded-lg shadow-sm p-5 bg-white hover:shadow-md hover:-translate-y-2 transition-all duration-200 ease-in-out">

                            <h2 class="text-2xl text-center font-bold text-primary mb-2">{{ $partner->title }}</h2>

                            <!-- Job Photo -->
                            @if ($partner->partner_image)
                                <img src="{{ asset('storage/' . $partner->partner_image) }}" alt=""
                                    class="w-full rounded-md mb-3">
                            @else
                                <div class="w-full h-40 bg-gray-200 flex items-center justify-center rounded-md mb-3">
                                    <i class="fas fa-image text-gray-400 text-3xl"></i>
                                </div>
                            @endif

                            <!-- Action -->
                            <div class="flex justify-end border-t pt-3 gap-3">
                                <a href="#" data-id="{{ $partner->id }}"
                                    class="open-detail text-sm font-medium px-2 py-2 bg-amber-100 text-white hover:bg-amber-200 rounded transition-all duration-200 ease-in-out">
                                    <i class="fas fa-eye text-amber-400"></i>
                                </a>
                                <a href="#" data-id="{{ $partner->id }}"
                                    class="open-edit text-sm font-medium px-2 py-2 bg-blue-100 text-white hover:bg-blue-200 rounded transition-all duration-200 ease-in-out">
                                    <i class="fas fa-edit text-blue-400"></i>
                                </a>
                                <form action="{{ route('partner.destroy', $partner->id) }}" method="POST"
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
                    @endforeach
                </div>
            </div>

            {{-- Tambah Data Start --}}
            <div id="popup-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
                <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
                <div
                    class="relative bg-bg rounded-lg flex flex-col items-center justify-center shadow-xl max-w-lg w-full my-4">

                    <!-- Header -->
                    <div class="flex justify-center items-center p-6">
                        <div class="flex flex-col items-center space-y-3">
                            <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="Cipta Muda Solusi Logo"
                                class="w-16">
                            <h1 class="text-3xl text-[#1E40AF] font-bold">Cipta Muda Solusi</h1>
                        </div>
                    </div>

                    <h2 class="text-xl text-primary font-bold">Tambah Partner</h2>

                    <!-- Form -->
                    <div class="p-6 w-full">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-col justify-center mb-5">

                                <!-- Title -->
                                <div class="mb-5">
                                    <label for="title" class="block text-text text-lg font-medium mb-2">
                                        Nama Partner
                                    </label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-tag text-text text-lg"></i>
                                        </div>
                                        <input type="text" id="title" name="title"
                                            placeholder="Cipta Muda Solusi"
                                            class="w-full pl-10 pr-3 py-3 border border-text text-black rounded-lg font-medium focus:outline-none">
                                    </div>
                                </div>

                                <!-- Upload Photo -->
                                <label for="partner_image"
                                    class="flex items-center justify-center w-full text-white font-semibold text-lg bg-primary/90 py-3 rounded-lg shadow-lg cursor-pointer hover:shadow-2xl hover:bg-primary transition-all duration-200 ease-in-out">
                                    <i class="fas fa-image mr-2"></i>
                                    Upload Photo
                                </label>
                                <input type="file" class="hidden" id="partner_image" name="partner_image"
                                    accept="image/*">

                                <!-- Preview -->
                                <div id="photo-preview"
                                    class="hidden mt-3 gap-4 bg-white rounded-lg shadow p-4 border border-primary/20">
                                    <div class="flex flex-col items-center">
                                        <strong class="pb-2 text-primary font-semibold text-sm"
                                            id="preview-text">Preview:</strong>
                                        <img src="" id="preview-img" alt="Preview"
                                            class="hidden w-32 h-32 object-cover rounded-lg border-2 border-primary shadow-md transition-all duration-200">
                                    </div>
                                    <button type="button" id="remove-photo"
                                        class="cursor-pointer ml-auto bg-red-500 hover:bg-red-600 text-white rounded-full w-8 h-8 items-center justify-center shadow transition-all duration-200">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="border-t border-text pt-4 grid grid-cols-2 gap-6">
                                <a href="#"
                                    class="close-modal px-5 py-3 bg-red-600 text-white font-medium text-lg rounded-lg flex items-center justify-center shadow-lg hover:shadow-2xl hover:bg-red-700 transition-all duration-200 ease-in-out">
                                    <i class="fas fa-x mr-2"></i>
                                    Batal
                                </a>
                                <button type="submit"
                                    class="px-5 py-3 bg-green-500 text-white font-medium text-lg rounded-lg flex items-center justify-center shadow-lg hover:shadow-2xl hover:bg-green-600 transition-all duration-200 ease-in-out">
                                    <i class="fas fa-save mr-2"></i>
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Tambah Data End --}}

            {{-- Detail Modal Start --}}
            @foreach ($partners as $partner)
                <div id="detail-modal-{{ $partner->id }}"
                    class="fixed inset-0 z-50 hidden items-center justify-center p-4">
                    <div class="close-modal-2 absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
                    <div
                        class="relative bg-white rounded-xl shadow-2xl max-w-lg w-full p-8 flex flex-col items-center">
                        <div class="flex flex-col items-center mb-3">
                            <img src="{{ asset('storage/' . $partner->partner_image) }}" alt="{{ $partner->title }}"
                                class="aspect-video object-cover mb-3">
                            <h1 class="text-center text-primary font-bold text-2xl">{{ $partner->title }}</h1>
                        </div>
                        <div class="w-full border-t pt-6 text-right">
                            <button
                                class="close-modal-2 bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-lg font-semibold shadow transition-all duration-200">
                                <i class="fas fa-x mr-2"></i>
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- Detail Modal End --}}

            <div id="edit-modal-{{ $partner->id }}"
                class="fixed inset-0 z-50 hidden items-center justify-center p-4">
                <!-- Overlay -->
                <div
                    class="close-modal-2 absolute inset-0 bg-black/40 backdrop-blur-sm transition-opacity duration-300">
                </div>

                <!-- Modal Card -->
                <div
                    class="relative bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 flex flex-col items-center animate-scaleIn">
                    <h1 class="text-2xl font-bold mb-6 text-gray-800">✏️ Edit Data Partner</h1>

                    <form action="{{ route('partner.update', $partner->id) }}" method="POST"
                        enctype="multipart/form-data" class="w-full space-y-4">
                        @csrf
                        @method('PUT')

                        <!-- Input Judul -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Judul</label>
                            <input type="text" name="title" value="{{ $partner->title }}"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none">
                        </div>

                        <!-- Input File -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Upload Gambar</label>
                            <input type="file" name="partner_image"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg cursor-pointer shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none">
                        </div>

                        <!-- Preview Gambar -->
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/' . $partner->partner_image) }}" alt="{{ $partner->title }}"
                                class="w-40 h-40 object-cover rounded-xl border-4 border-gray-100 shadow-md">
                        </div>

                        <!-- Tombol -->
                        <div class="flex justify-end gap-3 pt-4">
                            <button type="button"
                                class="close-modal-2 bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg shadow-md transition duration-200">
                                Batal
                            </button>
                            <button type="submit"
                                class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-5 py-2 rounded-lg shadow-md transition duration-200">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Animasi -->
            <style>
                @keyframes scaleIn {
                    from {
                        opacity: 0;
                        transform: scale(0.9) translateY(10px);
                    }

                    to {
                        opacity: 1;
                        transform: scale(1) translateY(0);
                    }
                }

                .animate-scaleIn {
                    animation: scaleIn 0.3s ease-out;
                }
            </style>


            {{-- Edit Data Start --}}
            @foreach ($partners as $partner)
                <div id="edit-modal-{{ $partner->id }}"
                    class="fixed inset-0 z-50 hidden items-center justify-center p-4">
                    <div class="close-modal-2 absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
                    <div
                        class="relative bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 flex flex-col items-center animate-scaleIn">
                        <h1 class="text-2xl font-bold mb-6 text-gray-800">✏️ Edit Data Partner</h1>

                        <form action="{{ route('partner.update', $partner->id) }}" method="POST"
                            enctype="multipart/form-data" class="w-full space-y-4">
                            @csrf
                            @method('PUT')

                            <!-- Input Judul -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Judul</label>
                                <input type="text" name="title" value="{{ $partner->title }}"
                                    class="w-full border border-gray-300 px-4 py-2 rounded-lg shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>

                            <!-- Input File -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Upload Gambar</label>
                                <input type="file" name="partner_image"
                                    class="w-full border border-gray-300 px-4 py-2 rounded-lg cursor-pointer shadow-sm focus:ring-2 focus:ring-green-400 focus:outline-none">
                            </div>

                            <!-- Preview Gambar -->
                            <div class="flex justify-center">
                                <img src="{{ asset('storage/' . $partner->partner_image) }}"
                                    alt="{{ $partner->title }}"
                                    class="w-40 h-40 object-cover rounded-xl border-4 border-gray-100 shadow-md">
                            </div>

                            <!-- Tombol -->
                            <div class="flex justify-end gap-3 pt-4">
                                <button type="button"
                                    class="close-modal-2 bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg shadow-md transition duration-200">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-5 py-2 rounded-lg shadow-md transition duration-200">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
            {{-- Edit Data End --}}

        </article>
    </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
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

<script src="{{ asset('asset-admin/js/popup-partner.js') }}"></script>

</html>
