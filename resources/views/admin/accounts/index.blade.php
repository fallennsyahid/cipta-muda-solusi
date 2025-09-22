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

    {{-- Tiny --}}
    <script src="https://cdn.tiny.cloud/1/ne2ngogb6ctihvg1psfcx2556ehuqcmgw33s33ig8a5c53ki/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-section via-white to-accent">
    <x-admin.layout>
        <div class="flex flex-wrap items-center justify-between">
            <div class="space-y-2">
                <h1 class="text-2xl text-heading font-bold">Account Management</h1>
                <p class="text-text font-lato">Manage user accounts and system access rights</p>
            </div>
            <div>
                <button type="button" id="open-modal"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-plus"></i>
                    Tambahkan Akun Baru
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Admins
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-users text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalAdminsBlog }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Active Admins
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-user-check text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalActive }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Inactive Admins
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex justify-center items-center">
                        <i class="fas fa-user-slash text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalNonActive }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        New Admins
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-gray-600 flex justify-center items-center">
                        <i class="fas fa-user-plus text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $newAdmins }}
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($accounts as $account)
                <div
                    class="bg-white border-0 rounded-xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-4 geometric-shape">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <img src="{{ $account->image ? Storage::url($account->image) : Avatar::create($account->name)->toBase64() }}"
                                alt="{{ $account->name }}" class="w-16 h-16 rounded-full border border-text/25">
                            <div class="flex flex-col">
                                <h1 class="text-lg font-semibold text-text">{{ $account->name }}</h1>
                                @if ($account->status === 'Active')
                                    <span
                                        class="bg-green-200 py-1 px-3 rounded-full text-green-700 text-center text-sm w-fit">Aktif</span>
                                @else
                                    <span
                                        class="bg-red-200 py-1 px-3 rounded-full text-red-700 text-center text-sm w-fit">Non-Aktif</span>
                                @endif
                            </div>
                        </div>
                        <div class="relative">
                            <button type="button" data-id="{{ $account->id }}"
                                class="dropdown-button flex items-center justify-center h-8 w-8 rounded-full cursor-pointer hover:bg-gray-200 relative z-10">
                                <i class="fas fa-ellipsis-vertical text-darkChoco"></i>
                            </button>

                            <div id="dropdown-menu-{{ $account->id }}"
                                class="absolute right-0 p-1 bg-white rounded-lg border border-text/25 min-w-16 shadow-md space-y-3 scale-y-0 origin-top transition-all duration-300 ease-in-out overflow-hidden">
                                @if ($account->status === 'Active')
                                    <form action="{{ route('account.toggleStatus', $account->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="flex items-center gap-2 text-sm w-full px-3 py-1 font-medium text-darkChoco hover:bg-primary hover:text-white rounded-md cursor-pointer">
                                            <i class="fas fa-user-xmark"></i>
                                            Nonaktifkan
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('account.toggleStatus', $account->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="flex items-center gap-2 text-sm w-full px-3 py-1 font-medium text-darkChoco hover:bg-primary hover:text-white rounded-md cursor-pointer">
                                            <i class="fas fa-user-check"></i>
                                            Aktifkan
                                        </button>
                                    </form>
                                @endif
                                <form action="{{ route('account.destroy', $account->id) }}" method="POST"
                                    class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="flex items-center gap-2 text-sm w-full px-3 py-1 font-medium text-red-700 hover:bg-primary hover:text-white rounded-md cursor-pointer">
                                        <i class="fas fa-trash"></i>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col my-4 space-y-2">
                        <span class="flex items-center text-text text-sm">
                            <i class="fas fa-envelope mr-2"></i>
                            {{ $account->email }}
                        </span>
                        <span class="flex items-center text-text text-sm">
                            <i class="fas fa-phone mr-2"></i>
                            {{ $account->phone }}
                        </span>
                    </div>

                    <div class="border-t border-text/25 pt-2">
                        <span class="text-sm text-text">
                            Login Terakhir:
                            {{ $account->last_login_at ? $account->last_login_at->timezone('Asia/Jakarta')->format('d M Y, H:i') . ' WIB' : 'Belum Pernah Login' }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </x-admin.layout>

    {{-- Create Modal Start --}}
    <div id="create-new-account" class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
        <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <div class="bg-white max-w-2xl w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
            <div
                class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div
                        class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-newspaper text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-white mb-2">Tambah Blog Baru</h1>
                    <p class="text-white/90 text-base font-lato">Mari ciptakan sebuah berita terkini</p>
                </div>

                <button
                    class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                <form action="{{ route('account.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-6">
                        <div class="group">
                            <label for="name"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-tag"></i>
                                Nama Akun <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Syahrul">
                        </div>

                        <div class="group">
                            <label for="email"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-envelope"></i>
                                Email <span class="text-red-400">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="syahrul@gmail.com">
                        </div>

                        <div class="group">
                            <label for="phone"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-phone"></i>
                                Nomor Telepon <span class="text-red-400">*</span>
                            </label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="+62 123456">
                        </div>

                        <div class="group">
                            <label for="password"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-key"></i>
                                Password <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="password" name="password" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Password">
                        </div>

                        <div class="group">
                            <label for="password_confirmation"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-check-double"></i>
                                Konfirmasi Password <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="password_confirmation" name="password_confirmation" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Ulangi password">
                        </div>


                        <div class="group">
                            <label for="password"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-toggle-on"></i>
                                Status Akun <span class="text-red-400">*</span>
                            </label>
                            <select name="status" id="status"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                <option value="-">Pilih Status</option>
                                @foreach ($status as $stats)
                                    <option value="{{ $stats->value }}">{{ $stats->value }}</option>
                                @endforeach
                            </select>
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
    {{-- Create Modal End --}}

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
<script src="{{ asset('asset-admin/js/account.js') }}"></script>

</html>
