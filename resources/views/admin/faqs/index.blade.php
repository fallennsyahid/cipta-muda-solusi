<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cipta Muda Solusi - Faqs</title>

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
                <h1 class="text-2xl text-heading font-bold">FAQ Management</h1>
                <p class="text-text font-lato">Manage frequently asked questions and help content</p>
            </div>
            <div>
                <button type="button"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-plus"></i>
                    Tambahkan FAQ Baru
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total FAQ
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-question-circle text-white text-base"></i>
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
                        Belum Dijawab
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-gray-600 flex justify-center items-center">
                        <i class="fas fa-hourglass-half text-white text-base"></i>
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
                        <span class="py-1 px-3 bg-secondary/25 rounded-sm text-text">
                            #1
                        </span>
                        <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Published</span>
                        <span class="bg-indigo-200 px-2 py-1 rounded-full text-indigo-700">Sudah Dijawab</span>
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

                <div class="cursor-pointer">
                    <div class="flex items-center gap-3 mt-3">
                        <i class="fas fa-chevron-right text-text text-sm"></i>
                        <h1 class="text-heading font-semibold text-xl">Teknologi apa yang digunakan oleh Cipta Muda
                            Solusi?
                        </h1>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                <div class="flex justify-between">
                    <div class="flex items-center gap-3">
                        <span class="py-1 px-3 bg-secondary/25 rounded-sm text-text">
                            #2
                        </span>
                        <span class="bg-amber-200 px-2 py-1 rounded-full text-amber-700">Pending</span>
                        <span class="bg-red-200 px-2 py-1 rounded-full text-red-700">Belum Dijawab</span>
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

                <div class="cursor-pointer">
                    <div class="flex items-center gap-3 mt-3">
                        <i class="fas fa-chevron-right text-text text-sm"></i>
                        <h1 class="text-heading font-semibold text-xl">Teknologi apa yang digunakan oleh Cipta Muda
                            Solusi?
                        </h1>
                    </div>

                    <div class="bg-gray-100 p-4 font-lato rounded-lg mt-2 mb-4">
                        <p class="text-text font-lato">
                            -
                        </p>
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="flex space-x-3">
                        <span class="flex items-center text-sm text-text">
                            <i class="far fa-calendar mr-2"></i>
                            Created: 04/09/2025
                        </span>
                        <span class="flex items-center text-sm text-text">
                            <i class="far fa-edit mr-2"></i>
                            Updated: -
                        </span>
                    </div>
                    <div>
                        <button type="button"
                            class="flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                            <i class="fas fa-reply mr-2"></i>
                            Jawab
                        </button>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                <div class="flex justify-between">
                    <div class="flex items-center gap-3">
                        <span class="py-1 px-3 bg-secondary/25 rounded-sm text-text">
                            #3
                        </span>
                        <span class="bg-amber-200 px-2 py-1 rounded-full text-amber-700">Pending</span>
                        <span class="bg-indigo-200 px-2 py-1 rounded-full text-indigo-700">Sudah Dijawab</span>
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

                <div class="cursor-pointer">
                    <div class="flex items-center gap-3 mt-3">
                        <i class="fas fa-chevron-down text-text text-sm"></i>
                        <h1 class="text-heading font-semibold text-xl">Teknologi apa yang digunakan oleh Cipta Muda
                            Solusi?
                        </h1>
                    </div>

                    <div class="bg-gray-100 p-4 font-lato rounded-lg mt-2 mb-4">
                        <p class="text-text font-lato">
                            Kami menggunakan Laravel untuk backend, React untuk frontend, serta Tailwind CSS untuk
                            styling. Selain itu juga terintegrasi dengan Firebase & Midtrans untuk pembayaran.
                        </p>
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="flex space-x-3">
                        <span class="flex items-center text-sm text-text">
                            <i class="far fa-calendar mr-2"></i>
                            Created: 04/09/2025
                        </span>
                        <span class="flex items-center text-sm text-text">
                            <i class="far fa-edit mr-2"></i>
                            Updated: 04/09/2025
                        </span>
                    </div>
                    <div>
                        <button type="button"
                            class="flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                            <i class="fas fa-pen-to-square mr-2"></i>
                            Edit Jawaban
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </x-admin.layout>

</body>

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>

</html>
