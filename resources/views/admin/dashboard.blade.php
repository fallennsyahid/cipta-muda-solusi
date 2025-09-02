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

    <div class="ml-[20rem] fixed top-4 right-4 z-40 w-[calc(100%-19rem-2rem)]">
        <x-admin.navbar></x-admin.navbar>

        <main class="p-6">
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
            </div>
        </main>
    </div>



</body>

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>

</html>
