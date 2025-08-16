<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cipta Muda Solusi - Lowongan Kerja</title>

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

<body>
    <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container max-w-full relative">
            <div class="flex items-center justify-between">
                <div class="px-4 py-6">
                    <div class="flex items-center mr-2">
                        <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="Logo Cipta Muda Solusi"
                            class="w-21 lg:w-37.5" width="675" height="200">
                        <div class="flex flex-col items-start">
                            <h1 class="text-primary font-semibold text-base lg:text-2xl">PT. Cipta Muda Solusi</h1>
                            <span class="text-text text-xs lg:text-base">Young, Brave, Innovative, Strong</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end px-4">
                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block
                    lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex lg:items-center lg:justify-center" id="#nav-active">
                            <li class="group">
                                <a href="/jobs"
                                    class="search-button text-2xl text-black w-12.5 h-12.5 bg-gray-300 rounded-full mx-5 flex items-center justify-center transition-all duration-200 ease-in-out group-hover:scale-110"
                                    aria-label="Buka Pencarian">
                                    <i class="fas fa-magnifying-glass"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="lg:hidden absolute right-4">
                        <a href="/jobs"
                            class="search-button text-2xl text-black w-12.5 h-12.5 bg-gray-300 rounded-full mx-5 flex items-center justify-center transition-all duration-200 ease-in-out group-hover:scale-110"
                            aria-label="Buka Pencarian">
                            <i class="fas fa-magnifying-glass"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Search Form Start --}}
            <div
                class="search-form absolute top-full right-0 mt-6 mx-4 sm:mx-8 p-3 sm:p-5 bg-white rounded-lg w-full max-w-xs sm:max-w-md md:max-w-lg lg:max-w-160 flex items-center scale-x-0 origin-center duration-300 z-50">
                <input type="search" id="search-box" placeholder="Cari disini..."
                    class="w-full text-base sm:text-xl md:text-2xl text-text p-3 sm:p-4 bg-section rounded-md focus:border-0 focus:outline-none">
                <label for="search-box"
                    class="cursor-pointer mr-3 sm:mr-6 absolute inset-y-0 right-2 flex items-center">
                    <i class="fas fa-magnifying-glass text-xl sm:text-lg text-text"></i>
                </label>
            </div>
            {{-- Search Form End --}}

        </div>
    </header>
    <section id="hero" class="bg-bg relative overflow-hidden">
        <img src="{{ asset('landing/webp/handshake.webp') }}" alt="Handshake" class="w-full opacity-40">

        <div class="absolute inset-0 bg-gradient-to-b from-bg/70 via-bg/50 to-bg/70"></div>

        <div
            class="absolute top-10 left-10 w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 bg-primary rounded-full animate-bounce opacity-70">
        </div>
        <div
            class="absolute bottom-10 right-10 w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 bg-secondary rounded-full animate-ping opacity-50">
        </div>
        <div
            class="absolute top-1/2 right-1/4 w-6 h-6 sm:w-7 sm:h-8 md:w-8 md:h-8 bg-accent rounded-full animate-spin-slow opacity-40">
        </div>

        <div
            class="absolute top-2/3 lg:top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center w-full max-w-[90%] sm:max-w-[75%] lg:max-w-[65%] px-4">
            <h1 class="text-heading font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl">Selamat Datang</h1>
            <p class="text-xl sm:text-2xl md:text-2xl lg:text-3xl text-heading mt-6 sm:mt-7 md:mt-8 lg:mt-9">
                Temukan peluang karier terbaik yang sesuai dengan passion dan
                keahlianmu. Jelajahi berbagai posisi yang tersedia dan temukan tempat di mana kemampuanmu dihargai
                dan berkembang.
            </p>
            <p class="text-xl sm:text-2xl md:text-2xl lg:text-3xl text-heading mt-6 sm:mt-7 md:mt-8 lg:mt-9">
                Mulai perjalanan profesionalmu hari ini dan bergabung dengan tim yang mendukung pertumbuhan,
                kreativitas, dan inovasi. Karier impianmu hanya sejauh satu klik.
            </p>

            <a href="#jobs"
                class="mt-8 sm:mt-10 md:mt-12 inline-block bg-primary text-white font-semibold py-3 sm:py-3 md:py-4 px-6 sm:px-6 md:px-8 rounded-lg text-lg sm:text-xl md:text-2xl hover:bg-primary/80 transition">
                Lihat Lowongan
            </a>
        </div>
    </section>

    <section id="jobs">
        <div class="container max-w-full">
            <div class="flex justify-between m-6">
                <h1 class="font-semibold text-4xl text-text">Lowongan Pekerjaan</h1>
                <form action="" class="flex gap-4 items-center">
                    <span class="font-medium text-text text-xl">Filter By:</span>
                    <select name="filter" id="filter"
                        class="border border-secondary p-4 rounded-md text-lg text-text">
                        <option value="-">Pilih Perusahaan</option>
                        <option value="1">Cipta Muda Solusi</option>
                        <option value="2">Samudra Biru Indonesia</option>
                    </select>
                    <button type="submit"
                        class="px-8 py-4 bg-primary text-lg text-white font-semibold rounded-md hover:bg-primary/80 cursor-pointer">Cari</button>
                </form>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 m-6">
                <div class="bg-bg w-full rounded-lg shadow-4">
                    <div class="flex flex-col">
                        <img src="https://placehold.co/308x203.png" alt="" class="rounded-t-lg">
                        <div class="flex flex-col m-6">
                            <h1 class="text-center text-heading text-2xl font-medium">Fullstack Developer</h1>
                            <h2 class="text-center mt-1 text-lg text-text font-medium">Full Time</h2>
                            <p class="text-primary text-xl text-center mt-1 font-medium">Jakarta</p>
                            <a href="/"
                                class="w-full bg-secondary mt-3 py-3 font-semibold text-white text-xl text-center rounded-md">
                                Lamar Posisi
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-bg w-full rounded-lg shadow-4">
                    <div class="flex flex-col">
                        <img src="https://placehold.co/308x203.png" alt="" class="rounded-t-lg">
                        <div class="flex flex-col m-6">
                            <h1 class="text-center text-heading text-2xl font-medium">Fullstack Developer</h1>
                            <h2 class="text-center mt-1 text-lg text-text font-medium">Full Time</h2>
                            <p class="text-primary text-xl text-center mt-1 font-medium">Jakarta</p>
                            <a href="/"
                                class="w-full bg-secondary mt-3 py-3 font-semibold text-white text-xl text-center rounded-md">
                                Lamar Posisi
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-bg w-full rounded-lg shadow-4">
                    <div class="flex flex-col">
                        <img src="https://placehold.co/308x203.png" alt="" class="rounded-t-lg">
                        <div class="flex flex-col m-6">
                            <h1 class="text-center text-heading text-2xl font-medium">Fullstack Developer</h1>
                            <h2 class="text-center mt-1 text-lg text-text font-medium">Full Time</h2>
                            <p class="text-primary text-xl text-center mt-1 font-medium">Jakarta</p>
                            <a href="/"
                                class="w-full bg-secondary mt-3 py-3 font-semibold text-white text-xl text-center rounded-md">
                                Lamar Posisi
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-bg w-full rounded-lg shadow-4">
                    <div class="flex flex-col">
                        <img src="https://placehold.co/308x203.png" alt="" class="rounded-t-lg">
                        <div class="flex flex-col m-6">
                            <h1 class="text-center text-heading text-2xl font-medium">Fullstack Developer</h1>
                            <h2 class="text-center mt-1 text-lg text-text font-medium">Full Time</h2>
                            <p class="text-primary text-xl text-center mt-1 font-medium">Jakarta</p>
                            <a href="/"
                                class="w-full bg-secondary mt-3 py-3 font-semibold text-white text-xl text-center rounded-md">
                                Lamar Posisi
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-bg w-full rounded-lg shadow-4">
                    <div class="flex flex-col">
                        <img src="https://placehold.co/308x203.png" alt="" class="rounded-t-lg">
                        <div class="flex flex-col m-6">
                            <h1 class="text-center text-heading text-2xl font-medium">Fullstack Developer</h1>
                            <h2 class="text-center mt-1 text-lg text-text font-medium">Full Time</h2>
                            <p class="text-primary text-xl text-center mt-1 font-medium">Jakarta</p>
                            <a href="/"
                                class="w-full bg-secondary mt-3 py-3 font-semibold text-white text-xl text-center rounded-md">
                                Lamar Posisi
                            </a>
                        </div>
                    </div>
                </div>
                <div class="bg-bg w-full rounded-lg shadow-4">
                    <div class="flex flex-col">
                        <img src="https://placehold.co/308x203.png" alt="" class="rounded-t-lg">
                        <div class="flex flex-col m-6">
                            <h1 class="text-center text-heading text-2xl font-medium">Fullstack Developer</h1>
                            <h2 class="text-center mt-1 text-lg text-text font-medium">Full Time</h2>
                            <p class="text-primary text-xl text-center mt-1 font-medium">Jakarta</p>
                            <a href="/"
                                class="w-full bg-secondary mt-3 py-3 font-semibold text-white text-xl text-center rounded-md">
                                Lamar Posisi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container max-w-full">
            <div class="bg-bg p-6 text-center text-text font-medium">
                <p>Copyright &copy; {{ date('Y') }} PT. Cipta Muda Solusi. All Right Reserved.</p>
            </div>
        </div>
    </footer>

</body>

<script src={{ asset('js/script.js') }}></script>

</html>
