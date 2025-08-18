<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cipta Muda Solusi - Login</title>

    {{-- Scripts --}}
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

    <link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>

<body class="bg-gradient-to-br from-[#DEF7F9] to-accent">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex justify-center items-center  login-bg">
        <div class="flex items-center mx-auto my-10">
            <div class="bg-primary hidden lg:flex pt-27 rounded-l-2xl">
                <img src={{ asset('asset-admin/webps/3d-login.webp') }} alt="Login" class="" width="540"
                    height="540">
            </div>
            <div class="bg-bg py-12 px-10 flex flex-col justify-center rounded-r-2xl">
                <h1 class="text-heading text-[2.5rem] font-bold text-shadow text-center">PT. Cipta Muda Solusi</h1>
                <h2 class="mt-9 text-center text-heading font-bold text-4xl text-shadow">Welcome Back</h2>
                <h3 class="text-center font-medium text-2xl mt-2 text-text text-shadow">Have a nice day 😉</h3>

                <form method="POST" action="{{ route('login') }}" class="mt-9">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="mb-3" />
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-text/50"></i>
                            </div>
                            <x-text-input id="email"
                                class="block mt-3 pl-10 pr-3 py-4 text-base text-text rounded-xl w-full" type="email"
                                name="email" :value="old('email')" required autofocus autocomplete="username"
                                placeholder="Masukkan email anda" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="mb-3" />

                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-text/50"></i>
                            </div>
                            <x-text-input id="password"
                                class="block mt-1 pl-10 pr-3 py-4 text-base text-text rounded-xl w-full" type="password"
                                name="password" required autocomplete="current-password"
                                placeholder="Masukkan password anda" />
                            <div id="show-password"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer">
                                <i class="fas fa-eye text-text/50" id="password-icon"></i>
                            </div>
                        </div>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex justify-between mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-primary shadow-sm w-4 h-4" name="remember">
                            <span class="ms-2 text-base text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a class="underline text-base text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="mt-4">
                        <x-primary-button
                            class="bg-primary text-white flex items-center justify-center text-center font-semibold text-2xl w-full py-5 rounded-xl hover:bg-primary/90 hover:ring-2 hover:ring-blue-300 hover:scale-105 active:ring-offset-2 active:ring-blue-400 active:scale-100 transition-all duration-300 ease-in-out">
                            <i class="fas fa-right-to-bracket mr-2"></i>
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script src={{ asset('asset-admin/js/script.js') }}></script>

</html>
