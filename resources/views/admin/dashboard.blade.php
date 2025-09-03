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

    <x-admin.sidebar></x-admin.sidebar>

    <div class="ml-[20rem] mt-4 w-[calc(100%-18rem-2rem)]">
        <x-admin.navbar></x-admin.navbar>

        <main class="p-6 pt-20">
            <div class="space-y-6">
                <div class="bg-gradient-to-r from-primary to-secondary rounded-2xl p-8 text-white geometric-shape">
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-3xl text-white font-bold mb-2">
                                Welcome back, {{ Auth::check() ? Auth::user()->name : 'Admin' }}
                            </h1>
                            <p class="font-lato text-lg">Here's what's happening with your company profile today.</p>
                        </div>
                        <div class="hidden md:block relative z-10 float-animation">
                            <div class="w-24 h-24 bg-white rounded-full flex justify-center items-center">
                                <i class="fa-solid fa-rocket text-darkChoco text-5xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                        <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                            <h1 class="text-sm font-medium text-text">
                                Total Jobs
                            </h1>
                            <div class="w-8 h-8 rounded-lg bg-heading flex justify-center items-center">
                                <i class="fas fa-briefcase text-white text-base"></i>
                            </div>
                        </div>
                        <div class="text-2xl text-primary flex flex-col mt-1 font-bold">
                            24
                            <p class="text-xs text-green-600 font-lato flex mt-1">
                                <i class="fas fa-arrow-trend-up text-xs mr-1"></i>
                                12% from last month
                            </p>
                        </div>
                    </div>
                    <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                        <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                            <h1 class="text-sm font-medium text-text">
                                Active Partners
                            </h1>
                            <div class="w-8 h-8 rounded-lg bg-secondary flex justify-center items-center">
                                <i class="fas fa-user-group text-white text-base"></i>
                            </div>
                        </div>
                        <div class="text-2xl text-primary flex flex-col mt-1 font-bold">
                            18
                            <p class="text-xs text-green-600 font-lato flex mt-1">
                                <i class="fas fa-arrow-trend-up text-xs mr-1"></i>
                                8% from last month
                            </p>
                        </div>
                    </div>
                    <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                        <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                            <h1 class="text-sm font-medium text-text">
                                Blog Posts
                            </h1>
                            <div class="w-8 h-8 rounded-lg bg-green-500 flex justify-center items-center">
                                <i class="fas fa-newspaper text-white text-base"></i>
                            </div>
                        </div>
                        <div class="text-2xl text-primary flex flex-col mt-1 font-bold">
                            14
                            <p class="text-xs text-green-600 font-lato flex mt-1">
                                <i class="fas fa-arrow-trend-up text-xs mr-1"></i>
                                4% from last month
                            </p>
                        </div>
                    </div>
                    <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                        <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                            <h1 class="text-sm font-medium text-text">
                                FAQ
                            </h1>
                            <div class="w-8 h-8 rounded-lg bg-indigo-500 flex justify-center items-center">
                                <i class="fas fa-question-circle text-white text-base"></i>
                            </div>
                        </div>
                        <div class="text-2xl text-primary flex flex-col mt-1 font-bold">
                            21
                            <p class="text-xs text-green-600 font-lato flex mt-1">
                                <i class="fas fa-arrow-trend-up text-xs mr-1"></i>
                                5% from last month
                            </p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 h-96">
                    <div class="bg-white rounded-xl p-4 shadow-lg geometric-shape">
                        <div class="font-medium text-heading text-xl flex items-center gap-2 mb-5">
                            <i class="fas fa-calendar"></i>
                            Quick Actions
                        </div>
                        <div class="space-y-3">
                            <a href=""
                                class="px-4 py-3 border-2 border-heading rounded-lg flex items-center text-heading font-medium hover:bg-secondary/25">
                                <i class="fas fa-briefcase mr-3"></i>
                                Buat Lowongan Kerja Baru
                            </a>
                            <a href=""
                                class="px-4 py-3 border-2 border-heading rounded-lg flex items-center text-heading font-medium hover:bg-secondary/25">
                                <i class="fas fa-user-group mr-3"></i>
                                Tambah Partner Baru
                            </a>
                            <a href=""
                                class="px-4 py-3 border-2 border-heading rounded-lg flex items-center text-heading font-medium hover:bg-secondary/25">
                                <i class="fas fa-newspaper mr-3"></i>
                                Buat Postingan Blog Baru
                            </a>
                            <a href=""
                                class="px-4 py-3 border-2 border-heading rounded-lg flex items-center text-heading font-medium hover:bg-secondary/25">
                                <i class="fas fa-question-circle mr-3"></i>
                                Update FAQ
                            </a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-lg geometric-shape">
                        <div>
                            <i></i>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>

</html>
