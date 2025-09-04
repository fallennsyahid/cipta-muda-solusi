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
                <h1 class="text-2xl text-heading font-bold">Blogs Management</h1>
                <p class="text-text font-lato">Create and manage blog posts and articles</p>
            </div>
            <div>
                <button type="button"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-plus"></i>
                    Tambahkan Blog Baru
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Blog
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-newspaper text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Published
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-check-circle text-white text-base"></i>
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
                        Total Kategori Blog
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-gray-600 flex justify-center items-center">
                        <i class="fas fa-layer-group text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                <div class="flex justify-between items-start">
                    <div class="flex items-center gap-3">
                        <div class="aspect-video w-25 h-20 overflow-hidden rounded-lg">
                            <img src="https://placehold.co/100x80.png" alt="" class="rounded-lg">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <div class="flex items-center space-x-3 flex-wrap">
                                <h1 class="text-base text-heading font-semibold">
                                    Panduan Memilih Framework Web Development yang Tepat
                                </h1>
                                <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Published</span>
                                <span class="bg-primary px-2 py-1 rounded-full text-white">Development</span>
                            </div>
                            <div>
                                <p class="text-base text-text">
                                    React, Vue, atau Angular? Panduan lengkap memilih framework yang sesuai dengan
                                    kebutuhan proyek Anda.
                                </p>
                            </div>
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

                <div class="mt-5 flex justify-between">
                    <div class="flex items-center gap-3">
                        <span class="flex items-center text-sm text-text">
                            <i class="fas fa-user mr-2"></i>
                            Abraham Lincoln
                        </span>
                        <span class="flex items-center text-sm text-text">
                            <i class="fas fa-calendar mr-2"></i>
                            04/09/2025
                        </span>
                        <span class="flex items-center text-sm text-text">
                            <i class="fas fa-clock mr-2"></i>
                            8 menit lalu
                        </span>
                    </div>
                    <button type="button"
                        class="flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                        <i class="fas fa-edit mr-2"></i>
                        Edit Lowongan
                    </button>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                <div class="flex justify-between items-start">
                    <div class="flex items-center gap-3">
                        <div class="aspect-video w-25 h-20 overflow-hidden rounded-lg">
                            <img src="https://placehold.co/100x80.png" alt="" class="rounded-lg">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <div class="flex items-center space-x-3 flex-wrap">
                                <h1 class="text-base text-heading font-semibold">
                                    Panduan Memilih Framework Web Development yang Tepat
                                </h1>
                                <span class="bg-amber-200 px-2 py-1 rounded-full text-amber-700">Pending</span>
                                <span class="bg-secondary px-2 py-1 rounded-full text-white">Mobile Development</span>
                            </div>
                            <div>
                                <p class="text-base text-text">
                                    React, Vue, atau Angular? Panduan lengkap memilih framework yang sesuai dengan
                                    kebutuhan proyek Anda.
                                </p>
                            </div>
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

                <div class="mt-5 flex justify-between">
                    <div class="flex items-center gap-3">
                        <span class="flex items-center text-sm text-text">
                            <i class="fas fa-user mr-2"></i>
                            Abraham Lincoln
                        </span>
                        <span class="flex items-center text-sm text-text">
                            <i class="fas fa-calendar mr-2"></i>
                            04/09/2025
                        </span>
                        <span class="flex items-center text-sm text-text">
                            <i class="fas fa-clock mr-2"></i>
                            8 menit lalu
                        </span>
                    </div>
                    <button type="button"
                        class="flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                        <i class="fas fa-edit mr-2"></i>
                        Edit Lowongan
                    </button>
                </div>
            </div>
        </div>


    </x-admin.layout>

</body>


<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>

</html>
