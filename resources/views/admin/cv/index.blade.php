<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cipta Muda Solusi - Dashboard</title>

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
                <h1 class="text-2xl text-heading font-bold">CV Management</h1>
                <p class="text-text font-lato">Manage job applications and candidate CVs</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Pelamar
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-file text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Pending
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-amber-600 flex justify-center items-center">
                        <i class="fas fa-clock text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Diterima
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-circle-check text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Ditolak
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex justify-center items-center">
                        <i class="fas fa-circle-xmark text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                <div class="flex justify-between">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-3">
                            <h1 class="text-2xl text-heading font-semibold">Cristiano Ronaldo</h1>
                            <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Diterima</span>
                        </div>
                    </div>
                    <div class="relative z-50 flex items-center gap-2">
                        <button type="button"
                            class="h-9 w-9 rounded-full flex items-center justify-center cursor-pointer hover:bg-text/20">
                            <i class="fas fa-ellipsis"></i>
                        </button>
                        <button class="cursor-pointer">
                            <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                        </button>
                    </div>
                </div>

                <span class="block mt-2 text-text font-medium text-lg">
                    23-09-2008 (17 Tahun)
                </span>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10">
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-envelope mr-2"></i>
                        pengguna@gmail.com
                    </div>
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-phone mr-2"></i>
                        +62 123-4567-890
                    </div>
                    <a href="" target="_blank"
                        class="flex items-center text-secondary text-base hover:underline">
                        <i class="fas fa-file text-text mr-2"></i>
                        Lampiran
                    </a>
                </div>

                <p class="mt-5 text-text font-lato text-justify line-clamp-2">
                    Selama lebih dari tiga tahun bekerja sebagai Software Developer di sebuah perusahaan teknologi, saya
                    bertanggung jawab penuh terhadap pengembangan aplikasi berbasis web dan mobile yang digunakan oleh
                    lebih dari 20.000 pengguna aktif setiap bulannya. Tugas saya meliputi merancang arsitektur sistem,
                    mengoptimalkan database agar mampu menangani transaksi dalam jumlah besar, serta mengimplementasikan
                    API yang aman dan efisien. Selain itu, saya terbiasa berkolaborasi dengan tim lintas divisi seperti
                    UI/UX designer, QA engineer, dan project manager untuk memastikan setiap proyek berjalan sesuai
                    jadwal. Saya juga pernah memimpin sebuah sub-tim kecil yang fokus pada refactoring kode lama agar
                    lebih modern, scalable, dan mudah dipelihara. Pencapaian terbesar saya adalah berhasil menurunkan
                    waktu loading aplikasi hingga 40% dan meningkatkan kepuasan pengguna berdasarkan survei internal
                    perusahaan. Dari pengalaman tersebut, saya mengasah kemampuan problem solving, komunikasi tim, serta
                    adaptasi terhadap teknologi baru yang terus berkembang.
                </p>

                <div class="flex justify-between items-center mt-5">
                    <div class="text-sm text-text">
                        <i class="fas fa-calendar mr-1"></i>
                        Melamar pada 03/09/2025
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button"
                            class="flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                            <i class="fas fa-download mr-2"></i>
                            Unduh CV
                        </button>
                        <button type="button"
                            class="flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                            <i class="fas fa-pen-to-square mr-2"></i>
                            Update Status
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                <div class="flex justify-between">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-3">
                            <h1 class="text-2xl text-heading font-semibold">Toni Icikiwir</h1>
                            <span class="bg-amber-200 px-2 py-1 rounded-full text-amber-700">Pending</span>
                        </div>
                    </div>
                    <div class="relative z-50 flex items-center gap-2">
                        <button type="button"
                            class="h-9 w-9 rounded-full flex items-center justify-center cursor-pointer hover:bg-text/20">
                            <i class="fas fa-ellipsis"></i>
                        </button>
                        <button class="cursor-pointer">
                            <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                        </button>
                    </div>
                </div>

                <span class="block mt-2 text-text font-medium text-lg">
                    23-09-2008 (17 Tahun)
                </span>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10">
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-envelope mr-2"></i>
                        pengguna@gmail.com
                    </div>
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-phone mr-2"></i>
                        +62 123-4567-890
                    </div>
                    <a href="" target="_blank"
                        class="flex items-center text-secondary text-base hover:underline">
                        <i class="fas fa-file text-text mr-2"></i>
                        Lampiran
                    </a>
                </div>

                <p class="mt-5 text-text font-lato">
                    Pernah menjadi bagian dari sebuah bagian yang akhirnya menjadi sebuah bagian yang menjadi bagian
                    dari bagian lain.
                </p>

                <div class="flex justify-between items-center mt-5">
                    <div class="text-sm text-text">
                        <i class="fas fa-calendar mr-1"></i>
                        Melamar pada 03/09/2025
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button"
                            class="flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                            <i class="fas fa-download mr-2"></i>
                            Unduh CV
                        </button>
                        <button type="button"
                            class="flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                            <i class="fas fa-pen-to-square mr-2"></i>
                            Update Status
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                <div class="flex justify-between">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-3">
                            <h1 class="text-2xl text-heading font-semibold">Amar Zoni</h1>
                            <span class="bg-red-200 px-2 py-1 rounded-full text-red-700">Ditolak</span>
                        </div>
                    </div>
                    <div class="relative z-50 flex items-center gap-2">
                        <button type="button"
                            class="h-9 w-9 rounded-full flex items-center justify-center cursor-pointer hover:bg-text/20">
                            <i class="fas fa-ellipsis"></i>
                        </button>
                        <button class="cursor-pointer">
                            <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                        </button>
                    </div>
                </div>

                <span class="block mt-2 text-text font-medium text-lg">
                    23-09-2000 (25 Tahun)
                </span>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10">
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-envelope mr-2"></i>
                        pengguna@gmail.com
                    </div>
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-phone mr-2"></i>
                        +62 123-4567-890
                    </div>
                    <a href="" target="_blank"
                        class="flex items-center text-secondary text-base hover:underline">
                        <i class="fas fa-file text-text mr-2"></i>
                        Lampiran
                    </a>
                </div>

                <p class="mt-5 text-text font-lato">
                    Pernah menjadi bagian dari sebuah bagian yang akhirnya menjadi sebuah bagian yang menjadi bagian
                    dari bagian lain.
                </p>

                <div class="flex justify-between items-center mt-5">
                    <div class="text-sm text-text">
                        <i class="fas fa-calendar mr-1"></i>
                        Melamar pada 03/09/2025
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button"
                            class="flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                            <i class="fas fa-download mr-2"></i>
                            Unduh CV
                        </button>
                        <button type="button"
                            class="flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                            <i class="fas fa-pen-to-square mr-2"></i>
                            Update Status
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </x-admin.layout>

</body>

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>

</html>
