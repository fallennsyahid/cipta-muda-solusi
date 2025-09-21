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
                <h1 class="text-2xl text-heading font-bold">Employee Management</h1>
                <p class="text-text font-lato">Manage employee data and personnel information</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Employees
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-users text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    23
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Active Employees
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-user-check text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    23
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Inactive/Resigned Employees
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex justify-center items-center">
                        <i class="fas fa-user-slash text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    0
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        New Hires
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-gray-600 flex justify-center items-center">
                        <i class="fas fa-user-plus text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    3
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="bg-white border-0 rounded-xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-4 geometric-shape">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('landing/tim_cook.jpeg') }}" alt=""
                            class="w-16 h-16 rounded-full border border-text/25">
                        <div class="flex flex-col">
                            <h1 class="text-lg font-semibold text-text">Tim Cook</h1>
                            <span class="bg-green-200 py-1 px-3 rounded-full text-green-700 text-center text-sm w-fit">
                                Aktif
                            </span>
                        </div>
                    </div>
                    <div>
                        <button
                            class="flex items-center justify-center h-8 w-8 rounded-full cursor-pointer hover:bg-gray-200 relative z-10">
                            <i class="fas fa-ellipsis-vertical text-darkChoco"></i>
                        </button>
                    </div>
                </div>

                <div class="flex flex-col mt-4 space-y-2">
                    <span
                        class="bg-blue-200 py-1 px-3 rounded-full text-blue-700 border-blue-300 text-center text-sm w-fit">
                        CTO
                    </span>
                    <span class="flex items-center text-text text-sm">
                        <i class="fas fa-envelope mr-2"></i>
                        anjay@gmail.com
                    </span>
                    <span class="flex items-center text-text text-sm">
                        <i class="fas fa-phone mr-2"></i>
                        09234567
                    </span>
                    <span class="flex items-center text-text text-sm">
                        <i class="fas fa-money-bill mr-2"></i>
                        Rp. 12.000.000
                    </span>
                    <span class="flex items-center text-text text-sm">
                        <i class="fas fa-calendar-days mr-2"></i>
                        Bergabung pada: 01/02/2023
                    </span>
                </div>
            </div>
            <div
                class="bg-white border-0 rounded-xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-4 geometric-shape">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('landing/tim_cook.jpeg') }}" alt=""
                            class="w-16 h-16 rounded-full border border-text/25">
                        <div class="flex flex-col">
                            <h1 class="text-lg font-semibold text-text">Tim Cook</h1>
                            <span class="bg-red-200 py-1 px-3 rounded-full text-red-700 text-center text-sm w-fit">
                                Non-Aktif
                            </span>
                        </div>
                    </div>
                    <div>
                        <button
                            class="flex items-center justify-center h-8 w-8 rounded-full cursor-pointer hover:bg-gray-200 relative z-10">
                            <i class="fas fa-ellipsis-vertical text-darkChoco"></i>
                        </button>
                    </div>
                </div>

                <div class="flex flex-col mt-4 space-y-2">
                    <span
                        class="bg-blue-200 py-1 px-3 rounded-full text-blue-700 border-blue-300 text-center text-sm w-fit">
                        HR Management
                    </span>
                    <span class="flex items-center text-text text-sm">
                        <i class="fas fa-envelope mr-2"></i>
                        anjay@gmail.com
                    </span>
                    <span class="flex items-center text-text text-sm">
                        <i class="fas fa-phone mr-2"></i>
                        09234567
                    </span>
                    <span class="flex items-center text-text text-sm">
                        <i class="fas fa-money-bill mr-2"></i>
                        Rp. 12.000.000
                    </span>
                    <span class="flex items-center text-text text-sm">
                        <i class="fas fa-calendar-days mr-2"></i>
                        Bergabung pada: 01/02/2023
                    </span>
                </div>
            </div>
        </div>

    </x-admin.layout>

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

</html>
