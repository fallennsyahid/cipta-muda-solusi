<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cipta Muda Solusi - Jobs</title>

    {{-- CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

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

<body class="antialiased bg-[#eaeef6]">
    <header>
        <div class="flex flex-row w-full">
            <div class="flex justify-between items-center w-1/3 lg:w-1/5 px-6 py-3 lg:py-5">
                <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="" class="w-24 lg:w-30">
                <button type="button" aria-label="Hamburger Menu" id="close-sidebar"
                    class="hidden lg:flex rounded-full w-10 h-10 items-center justify-center cursor-pointer hover:bg-text/30 hover:scale-110 transition-all duration-200 ease-in">
                    <i class="fas fa-bars text-text text-2xl mt-2 lg:mt-0"></i>
                </button>
            </div>

            <div class="px-6 py-3 lg:py-5 bg-accent w-full lg:w-4/5">
                <div class="flex justify-between items-center gap-3 w-full">

                    <div class="hidden lg:flex items-center gap-3">
                        <img src="https://placehold.co/50x50.png" alt="" class="rounded-lg">
                        <div class="flex items-center gap-2">
                            <span class="text-text font-bold text-2xl">Jhon Doe</span>
                            <span class="text-text/60 font-medium text-sm">Was login 5 minutes ago.</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 justify-end mt-2 w-full lg:w-auto lg:justify-end">
                        <div
                            class="hidden lg:flex lg:items-center gap-2 text-sm text-text border border-text/30 py-2 px-3 rounded-sm">
                            <p>Today: August 18th 2025</p>
                            <i class="fas fa-calendar-days"></i>
                        </div>
                        <div class="font-medium flex lg:items-center text-lg lg:text-xl text-text">
                            11.00.00 AM
                        </div>
                        <button
                            class="flex lg:hidden w-10 h-10 rounded-full items-center justify-center cursor-pointer hover:bg-text/30 hover:scale-110 transition-all duration-200 ease-in">
                            <i class="fas fa-bars text-text text-2xl"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <nav class="bg-[#DBEAFE] px-6 py-5 flex flex-col lg:flex-row justify-between items-start gap-3 w-full">
            <div class="flex justify-start items-center gap-2">
                <h1 class="text-heading font-bold text-2xl">Dashboard</h1>
                <a href="" class="font-medium text-sm text-text">Home</a>
            </div>
            <div class="hidden lg:flex flex-col lg:flex-row items-center w-full lg:w-auto">
                <input type="search" name="search" id="search" placeholder="Searching..."
                    class="bg-white w-full lg:w-75 px-3 py-2.5 text-sm rounded-l-sm placeholder:text-black/50 focus:outline-none">
                <button type="button"
                    class="text-white bg-primary px-3 py-2.5 text-sm rounded-r-sm cursor-pointer w-full lg:w-auto mt-2 lg:mt-0">
                    <i class="fas fa-magnifying-glass"></i>
                </button>
            </div>
        </nav>
    </header>

    <main class="flex">
        <aside
            class="bg-white m-6 w-1/3 lg:w-1/5 rounded-lg shadow scale-x-100 origin-center transition-all duration-200 ease-linear">
            <ul class="flex flex-col gap-6 p-6">
                <li>
                    <a href="#"
                        class="flex items-center gap-3 text-white rounded-sm text-xl p-3 bg-primary hover:bg-primary/90 transition-all duration-200 ease-in-out">
                        <i class="fas fa-desktop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('jobs.index') }}"
                        class="inline-flex relative items-center gap-3 w-full text-text rounded-sm text-xl p-3 hover:text-white transition-all duration-200 ease-in-out overflow-hidden  group">

                        <span
                            class="absolute inset-0 bg-primary scale-x-0 origin-center  transition-transform duration-200 ease-out group-hover:scale-x-100">
                        </span>

                        <i class="fas fa-briefcase relative z-10"></i>
                        <span class="relative z-10">Jobs</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center gap-3 text-white rounded-sm text-xl p-3 bg-primary">
                        <i class="fas fa-desktop"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="flex items-center gap-3 text-white rounded-sm text-xl p-3 bg-red-500">
                            <i class="fas fa-right-from-bracket"></i>
                            <span>Logout</span>
                        </a>
                    </form>
                </li>
            </ul>
        </aside>

        <article class="flex-1 m-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold text-heading">Daftar Lowongan Kerja</h1>
                    <a href="#"
                        class="text-lg bg-primary flex items-center rounded-xl font-semibold text-white px-6 py-4 shadow-lg hover:bg-primary/90 hover:shadow-xl transition-all duration-200 ease-in-out">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Lowongan Kerja
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($jobs as $job)
                        <div
                            class="border rounded-lg shadow-sm p-5 bg-bg hover:shadow-md hover:-translate-y-2 transition-all duration-200 ease-in-out">

                            <h2 class="text-4xl text-center font-bold text-primary mb-2">{{ $job->title }}</h2>

                            <div class="flex items-center justify-between text-sm text-gray-600 mb-3">
                                <span class="px-2 py-1 rounded bg-primary/10 text-primary font-medium capitalize">
                                    {{ $job->type->value }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <i class="fas fa-location-dot"></i>
                                    {{ $job->location }}
                                </span>
                            </div>

                            <!-- Job Photo -->
                            @if ($job->photo)
                                <img src="{{ asset('storage/' . $job->photo) }}" alt="{{ $job->title }}"
                                    class="w-full  rounded-md mb-3">
                            @else
                                <div class="w-full h-40 bg-gray-200 flex items-center justify-center rounded-md mb-3">
                                    <i class="fas fa-image text-gray-400 text-3xl"></i>
                                </div>
                            @endif

                            <!-- Action -->
                            <div class="flex justify-end">
                                <a href="{{ route('jobs.show', $job->id) }}"
                                    class="text-sm font-medium px-3 py-2 bg-primary text-white rounded hover:bg-primary/90 transition">
                                    View Details
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </article>
    </main>
</body>

</html>
