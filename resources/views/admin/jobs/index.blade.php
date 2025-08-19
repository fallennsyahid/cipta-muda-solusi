<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cipta Muda Solusi - Jobs</title>

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

        <nav class="bg-[#DBEAFE] px-6 py-5 flex flex-col lg:flex-row justify-between items-start gap-3 w-full">
            <div class="flex justify-start items-center gap-2">
                <h1 class="text-heading font-bold text-2xl">Dashboard</h1>
                <a href="" class="font-medium text-sm text-text">Home</a>
            </div>
            <div class="hidden lg:flex flex-col lg:flex-row items-center w-full lg:w-auto">
                <input type="search" name="search" id="search" placeholder="Searching..."
                    class="bg-white w-full lg:w-75 px-3 py-2.5 text-sm rounded-l-sm placeholder:text-black/50 focus:outline-none">
                <button type="button"
                    class="text-white bg-primary px-3 py-2.5 text-sm rounded-r-sm cursor-pointer w-full lg:w-auto mt-2 lg:mt-0">
                    <i class="fas fa-magnifying-glass"></i>
                </button>
            </div>
        </nav>
    </header>

    <main class="flex">
        <aside
            class="bg-white m-6 w-1/3 lg:w-1/5 rounded-lg shadow scale-x-100 origin-center transition-all duration-200 ease-linear">
            <ul class="flex flex-col gap-6 p-6">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center gap-3 text-white rounded-sm text-xl p-3 bg-primary hover:bg-primary/90 transition-all duration-200 ease-in-out">
                        <i class="fas fa-desktop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('jobs.index') }}"
                        class="inline-flex relative items-center gap-3 w-full text-text rounded-sm text-xl p-3 hover:text-white transition-all duration-200 ease-in-out overflow-hidden  group">

                        <span
                            class="absolute inset-0 bg-primary scale-x-0 origin-center  transition-transform duration-200 ease-out group-hover:scale-x-100">
                        </span>

                        <i class="fas fa-briefcase relative z-10"></i>
                        <span class="relative z-10">Jobs</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-3 text-white rounded-sm text-xl p-3 bg-primary">
                        <i class="fas fa-desktop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="flex items-center gap-3 text-white rounded-sm text-xl p-3 bg-red-500">
                            <i class="fas fa-right-from-bracket"></i>
                            <span>Logout</span>
                        </a>
                    </form>
                </li>
            </ul>
        </aside>

        <article class="flex-1 m-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-heading">Daftar Lowongan Kerja</h1>
                    <a href="#" id="add-job"
                        class="text-lg bg-primary flex items-center rounded-xl font-semibold text-white px-6 py-4 shadow-lg hover:bg-primary/90 hover:shadow-xl transition-all duration-200 ease-in-out">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Lowongan Kerja
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($jobs as $job)
                        <div
                            class="border rounded-lg shadow-sm p-5 bg-bg hover:shadow-md hover:-translate-y-2 transition-all duration-200 ease-in-out">

                            <h2 class="text-4xl text-center font-bold text-primary mb-2">{{ $job->title }}</h2>

                            <div class="flex items-center justify-between text-sm text-gray-600 mb-3">
                                <span class="px-2 py-1 rounded bg-primary/10 text-primary font-medium capitalize">
                                    {{ $job->type->value }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <i class="fas fa-location-dot"></i>
                                    {{ $job->location }}
                                </span>
                            </div>

                            <!-- Job Photo -->
                            @if ($job->photo)
                                <img src="{{ asset('storage/' . $job->photo) }}" alt="{{ $job->title }}"
                                    class="w-full rounded-md mb-3">
                            @else
                                <div class="w-full h-40 bg-gray-200 flex items-center justify-center rounded-md mb-3">
                                    <i class="fas fa-image text-gray-400 text-3xl"></i>
                                </div>
                            @endif

                            <!-- Action -->
                            <div class="flex justify-end border-t pt-3 gap-3">
                                <a href="#" data-id="{{ $job->id }}"
                                    class="open-detail text-sm font-medium px-2 py-2 bg-amber-100 text-white hover:bg-amber-200 rounded transition-all duration-200 ease-in-out">
                                    <i class="fas fa-eye text-amber-400"></i>
                                </a>
                                <a href="#" data-id="{{ $job->id }}"
                                    class="open-edit text-sm font-medium px-2 py-2 bg-blue-100 text-white hover:bg-blue-200 rounded transition-all duration-200 ease-in-out">
                                    <i class="fas fa-edit text-blue-400"></i>
                                </a>
                                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST"
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
                {{ $jobs->links() }}
            </div>

            {{-- Tambah Data Start --}}
            <div id="popup-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4">
                <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
                <div
                    class="relative bg-bg rounded-lg flex flex-col items-center justify-center shadow-xl max-w-lg w-full">
                    <div class="flex justify-center items-center p-6">
                        <div class="flex flex-col items-center space-y-3">
                            <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="Cipta Muda Solusi Logo"
                                class="w-15">
                            <h1 class="text-3xl text-primary font-bold">Cipta Muda Solusi</h1>
                        </div>
                    </div>

                    <div class="p-6">
                        <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                <div class="mb-5">
                                    <label for="title"
                                        class="block text-text text-lg font-medium mb-2">Title</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-tag text-text text-lg"></i>
                                        </div>
                                        <input type="text" id="title" name="title"
                                            placeholder="Fullstack Dev"
                                            class="w-full pl-10 pr-3 py-3 border border-text text-black rounded-lg font-medium focus:outline-none">
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="location"
                                        class="block text-text text-lg font-medium mb-2">Location</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-location-dot text-text text-lg"></i>
                                        </div>
                                        <input type="text" id="location" name="location" placeholder="Texas"
                                            class="w-full pl-10 pr-3 py-3 border border-text text-black rounded-lg font-medium focus:outline-none">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label for="type" class="block text-text text-lg font-medium mb-2">Tipe
                                    Pekerjaan</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-briefcase text-text"></i>
                                    </div>
                                    <select name="type" id="type"
                                        class="w-full pl-10 pr-3 py-3 border border-text rounded-lg focus:outline-none">
                                        <option value="-">Pilih Tipe Pekerjaan</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->value }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-5">
                                <label for="photo"
                                    class="flex items-center justify-center w-full text-white font-semibold text-lg bg-primary py-3 rounded-lg cursor-pointer">
                                    <i class="fas fa-image mr-2"></i>
                                    Upload Photo
                                </label>
                                <input type="file" class="hidden" id="photo" name="photo"
                                    accept="image/*">
                                <div id="photo-preview" class="mt-3">
                                    <img src="" id="preview-img" alt="Preview"
                                        class="hidden w-40 h-40 object-cover rounded-lg border border-text/30">
                                </div>
                            </div>

                            <div class="border-t border-text pt-4 grid grid-cols-2 gap-6">
                                <a href="#"
                                    class="close-modal bg-red-600 text-white font-medium text-lg py-3 flex items-center justify-center rounded-lg">
                                    <i class="fas fa-x mr-2"></i>
                                    Batal
                                </a>
                                <button type="submit"
                                    class="bg-green-500 text-white font-medium text-lg py-3 flex items-center justify-center rounded-lg">
                                    <i class="fas fa-save mr-2"></i>
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Tambah Data End --}}

            {{-- Detail Data Start --}}
            @foreach ($jobs as $job)
                <div id="detail-modal-{{ $job->id }}"
                    class="fixed inset-0 z-50 hidden items-center justify-center p-4">
                    <div class="close-modal-2 absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
                    <div
                        class="relative bg-white rounded-xl shadow-2xl max-w-lg w-full p-8 flex flex-col items-center">
                        <div class="flex flex-col items-center mb-6">
                            <img src="{{ asset('storage/' . $job->photo) }}" alt="{{ $job->title }}"
                                class="aspect-video object-cover mb-3">
                            <h2 class="text-2xl font-bold text-primary mb-1">{{ $job->title }}</h2>
                            <span
                                class="px-3 py-1 rounded-full bg-primary/10 text-primary font-semibold capitalize text-sm">
                                {{ $job->type->value ?? $job->type }}
                            </span>
                        </div>
                        <div class="w-full flex justify-between space-y-3 mb-3">
                            <div class="flex items-center gap-2 text-lg">
                                <i class="fas fa-location-dot text-primary"></i>
                                <span class="font-medium text-gray-700">{{ $job->location }}</span>
                            </div>
                            <div class="flex items-center gap-2 text-lg">
                                <i class="fas fa-briefcase text-primary"></i>
                                <span class="font-medium text-gray-700">{{ $job->type->name ?? $job->type }}</span>
                            </div>
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
            {{-- Detail Data End --}}

            {{-- Edit Data Start --}}
            @foreach ($jobs as $job)
                <div id="edit-modal-{{ $job->id }}"
                    class="fixed inset-0 z-50 hidden items-center justify-center p-4">
                    <div class="close-modal-2 absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
                    <div
                        class="relative bg-white rounded-xl shadow-2xl max-w-md w-full p-8 flex flex-col items-center">
                        <h1 class="text-xl font-bold mb-4">Edit Data</h1>

                        <form action="{{ route('jobs.update', $job->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text" name="title" value="{{ $job->title }}"
                                class="w-full border px-3 py-2 rounded mb-3">

                            <input type="text" name="location" value="{{ $job->location }}"
                                class="w-full border px-3 py-2 rounded mb-3">

                            <input type="text" name="type" value="{{ $job->type }}"
                                class="w-full border px-3 py-2 rounded mb-3">

                            <input type="file" name="photo" class="w-full mb-3">

                            <img src="{{ asset('storage/' . $job->photo) }}" alt="" width="200">

                            <div class="flex justify-end gap-3">
                                <button type="button"
                                    class="close-modal-2 bg-gray-500 text-white px-4 py-2 rounded">Batal</button>
                                <button type="submit"
                                    class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
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

<x-admin.sweetalert></x-admin.sweetalert>

<script src="{{ asset('asset-admin/js/popup.js') }}"></script>

</html>
