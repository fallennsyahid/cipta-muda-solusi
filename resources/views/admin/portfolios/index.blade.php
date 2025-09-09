<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cipta Muda Solusi - Partner</title>

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
                <h1 class="text-2xl text-heading font-bold">Portfolio Management</h1>
                <p class="text-text font-lato">Showcase your company's best work and manage project portfolios</p>
            </div>
            <div>
                <button type="button"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-plus"></i>
                    Tambahkan Portfolio Baru
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Portfolio
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-layer-group text-white text-base"></i>
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
                        Non-Published
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
                        Total Category
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex justify-center items-center">
                        <i class="fas fa-star text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
                class="bg-white border-0 rounded-xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                <div class="aspect-video overflow-hidden rounded-t-xl relative">
                    <img src="{{ asset('landing/webp/portfolios/portfolio_1.webp') }}" alt=""
                        class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-300">

                    <div class="absolute top-3 left-3">
                        <span class="bg-green-600 px-3 py-1 text-white font-medium text-sm rounded-full">
                            Published
                        </span>
                    </div>
                </div>

                <div class="p-4 space-y-4">
                    <div class="flex flex-col gap-2">
                        <span class="flex items-center text-sm text-secondary font-medium">
                            <i class="fas fa-gears text-text mr-2"></i>
                            Web Based Development
                        </span>
                        <h1 class="text-lg text-heading font-bold">Web Based Development</h1>
                        <span
                            class="inline-flex w-fit items-center text-white bg-primary/75 px-3 py-1 rounded-full text-xs">
                            <i class="fas fa-layer-group mr-2"></i>
                            Web Development
                        </span>
                    </div>

                    <p class="text-darkChoco text-justify line-clamp-2">
                        Instalasi dan konfigurasi switch Catalyst 2960X dan Mikrotik RB 1100 AH pada server Angkasa
                        Pura 1 – Kemayoran , Jakarta Pusat.
                    </p>

                    <div class="flex items-center gap-2 flex-wrap">
                        <span
                            class="text-xs text-darkChoco border border-text/25 p-1 rounded-lg flex items-center justify-center text-center">
                            Bootstrap
                        </span>
                        <span
                            class="text-xs text-darkChoco border border-text/25 p-1 rounded-lg flex items-center justify-center text-center">
                            jQuery
                        </span>
                        <span
                            class="text-xs text-darkChoco border border-text/25 p-1 rounded-lg flex items-center justify-center text-center">
                            PHP
                        </span>
                    </div>

                    <span class="flex items-center text-sm text-text">
                        <i class="fas fa-calendar mr-2"></i>
                        April 2020
                    </span>

                    <div class="grid grid-cols-3 gap-3">
                        <a href="#"
                            class="flex justify-center items-center bg-teal-500 text-white py-1 rounded-lg hover:bg-teal-600">
                            <i class="fas fa-arrow-up-right-from-square mr-2"></i>
                            Visit
                        </a>
                        <a href="#"
                            class="flex justify-center items-center bg-blue-500 text-white py-1 rounded-lg hover:bg-blue-600">
                            <i class="fas fa-pen-to-square mr-2"></i>
                            Edit
                        </a>
                        <a href="#"
                            class="flex justify-center items-center bg-gray-500 text-white py-1 rounded-lg hover:bg-gray-600">
                            <i class="fas fa-eye mr-2"></i>
                            Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </x-admin.layout>

</body>

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>

</html>
