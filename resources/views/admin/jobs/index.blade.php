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
                <h1 class="text-2xl text-heading font-bold">Jobs Management</h1>
                <p class="text-text font-lato">Manage job postings and track applications</p>
            </div>
            <div>
                <button type="button"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-plus"></i>
                    Tambahkan Lowongan Baru
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Lowongan
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-heading flex justify-center items-center">
                        <i class="fas fa-briefcase text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Lowongan Aktif
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
                        Lowongan Non-Aktif
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex justify-center items-center">
                        <i class="fas fa-circle-xmark text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Pelamar
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex justify-center items-center">
                        <i class="fas fa-user-group text-white text-base"></i>
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
                            <h1 class="text-2xl text-heading font-semibold">Senior Frontend Developer</h1>
                            <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Active</span>
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
                    Engineering
                </span>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-10">
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-location-dot mr-2"></i>
                        Jakarta, Indonesia
                    </div>
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-clock mr-2"></i>
                        Magang
                    </div>
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-dollar-sign mr-2"></i>
                        1 Juta
                    </div>
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-user-group mr-2"></i>
                        24 Applicants
                    </div>
                </div>

                <p class="mt-5 text-text font-lato">
                    Bergabung sebagai Frontend Senior Developer untuk membangun aplikasi web modern dengan
                    React/Vue/Angular, optimasi performa, dan mentoring tim.
                </p>

                <div class="flex flex-wrap gap-2 mt-5">
                    <span class="border border-text/25 text-text px-2 py-1 rounded-full text-sm flex items-center">
                        <i class="fas fa-tag mr-2"></i>
                        React JS
                    </span>
                    <span class="border border-text/25 text-text px-2 py-1 rounded-full text-sm flex items-center">
                        <i class="fas fa-tag mr-2"></i>
                        Vue JS
                    </span>
                    <span class="border border-text/25 text-text px-2 py-1 rounded-full text-sm flex items-center">
                        <i class="fas fa-tag mr-2"></i>
                        Svelte JS
                    </span>
                    <span class="border border-text/25 text-text px-2 py-1 rounded-full text-sm flex items-center">
                        <i class="fas fa-tag mr-2"></i>
                        Svelte JS
                    </span>
                    <span class="border border-text/25 text-text px-2 py-1 rounded-full text-sm flex items-center">
                        <i class="fas fa-tag mr-2"></i>
                        Angular JS
                    </span>
                </div>

                <div class="flex justify-between items-center mt-5">
                    <div class="text-sm text-text">
                        <i class="fas fa-calendar mr-1"></i>
                        Posted on 03/09/2025
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button"
                            class="flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                            <i class="fas fa-edit mr-2"></i>
                            Edit Lowongan
                        </button>
                        <button type="button"
                            class="flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                            <i class="fas fa-user-group mr-2"></i>
                            Lihat Pelamar
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </x-admin.layout>

</body>

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>

</html>
