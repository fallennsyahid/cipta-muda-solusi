<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cipta Muda Solusi - Blogs</title>

    {{-- CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
                <h1 class="text-2xl text-heading font-bold">Category Partner Management</h1>
                <p class="text-text font-lato">Manage the content category partner here.</p>
            </div>
            <div>
                <button type="button" id="open-modal"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-plus"></i>
                    Tambahkan Category Baru
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($categories as $category)
                <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                    <div class="flex justify-between items-start">
                        <div class="flex flex-col">
                            <h1 class="text-heading font-bold text-xl">{{ $category->name }}</h1>
                            <span class="text-darkChoco text-base font-medium">/{{ $category->slug }}</span>
                        </div>
                        <span
                            class="{{ $category->status === 1 ? 'bg-green-200 text-green-700' : 'bg-red-200 text-red-700' }} px-2 py-1 rounded-full ">
                            {{ $category->status === 1 ? 'Aktif' : 'Non-Aktif' }}
                        </span>
                    </div>

                    <span
                        class="my-4 flex items-center gap-2 text-sm text-text border border-text/25 rounded-full px-3 py-1 w-fit">
                        <i class="fas fa-folder"></i>
                        Total Partner: {{ $category->partners->count() }}
                    </span>

                    <div class="border-t border-text/25 pt-4">
                        <div class="flex items-center space-x-3">
                            <form action="{{ route('category-partner.toggleStatus', $category->id) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <button type="submit"
                                    class="flex items-center gap-2 text-white bg-green-400 px-3 py-1 rounded-lg cursor-pointer hover:bg-green-500">
                                    <i class="fas fa-rotate"></i>
                                    Status
                                </button>
                            </form>
                            <button type="button" data-id="{{ $category->id }}"
                                class="edit-category flex items-center gap-2 text-white bg-amber-400 px-3 py-1 rounded-lg cursor-pointer hover:bg-amber-500">
                                <i class="fas fa-edit"></i>
                                Edit
                            </button>
                            <form action="{{ route('category-partner.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="flex items-center gap-2 text-white bg-red-400 px-3 py-1 rounded-lg cursor-pointer hover:bg-red-500">
                                    <i class="fas fa-trash"></i>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </x-admin.layout>

    <div id="create-new-category"
        class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
        <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <div class="bg-white max-w-2xl w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
            <div
                class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div
                        class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-pen text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-white mb-2">Tambah Kategori Baru</h1>
                    <p class="text-white/90 text-base font-lato">Buat kategori baru untuk mitra.</p>
                </div>

                <button
                    class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                <form action="{{ route('category-partner.store') }}" method="POST">
                    @csrf
                    <div class="space-y-6">
                        <div class="group">
                            <label for="name"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-list"></i>
                                Nama Kategori <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Teknologi">
                        </div>

                        <div class="flex items-center gap-3">
                            <button type="button"
                                class="close-modal flex-1 px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 cursor-pointer">
                                <i class="fas fa-times mr-2"></i>
                                Batal
                            </button>
                            <button type="submit"
                                class="relative z-50 px-4 flex-1 py-2 rounded-lg bg-primary text-white hover:bg-primary/90 cursor-pointer">
                                <i class="fas fa-save mr-2"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($categories as $category)
        <div id="edit-category-{{ $category->id }}"
            class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
            <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

            <div
                class="bg-white max-w-2xl w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
                <div
                    class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                            <i class="fas fa-edit text-3xl"></i>
                        </div>
                        <h1 class="text-2xl font-bold text-white mb-2">Edit Nama Kategori</h1>
                        <p class="text-white/90 text-base font-lato">Perbaiki nama kategori untuk mitra.</p>
                    </div>

                    <button
                        class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                    <form action="{{ route('category-partner.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div class="group">
                                <label for="edit_name"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-list"></i>
                                    Nama Kategori <span class="text-red-400">*</span>
                                </label>
                                <input type="text" id="edit_name" name="edit_name" required
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    placeholder="Teknologi" value="{{ $category->name }}">
                            </div>

                            <div class="flex items-center gap-3">
                                <button type="button"
                                    class="close-modal flex-1 px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 cursor-pointer">
                                    <i class="fas fa-times mr-2"></i>
                                    Batal
                                </button>
                                <button type="submit"
                                    class="relative z-50 px-4 flex-1 py-2 rounded-lg bg-primary text-white hover:bg-primary/90 cursor-pointer">
                                    <i class="fas fa-save mr-2"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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
</script>

<script src="{{ asset('asset-admin/js/sidebar.js') }}"></script>
<script src="{{ asset('asset-admin/js/category-partner.js') }}"></script>

</html>
