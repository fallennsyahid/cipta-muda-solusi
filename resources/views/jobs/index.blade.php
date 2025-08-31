<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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
    {{-- Header Start --}}
    <header class="absolute top-0 left-0 w-full flex items-center">
        <div class="container max-w-full relative">
            <div class="flex items-center justify-between">
                <div class="pl-10 py-6">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="Logo Cipta Muda Solusi"
                            class="h-14 w-auto relative z-50" width="675" height="200">
                    </a>
                </div>

                {{-- <div class="flex items-center justify-center px-4 py-6">
                    <button id="hamburger" name="hamburger" type="button" aria-label="Hamburger Menu"
                        class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="navbar-effect shadow-2 px-6 py-4 rounded-full">
                        <ul class="flex items-center justify-center gap-8" id="#nav-active">
                            <li class="group">
                                <a href="#" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Beranda
                                </a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Tentang
                                </a>
                            </li>
                            <li class="group">
                                <a href="#service" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Layanan
                                </a>
                            </li>
                            <li class="group">
                                <a href="#portfolio" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Portfolio
                                </a>
                            </li>
                            <li class="group">
                                <a href="#team" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Team
                                </a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Contact
                                </a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Faq
                                </a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Blog
                                </a>
                            </li>
                            <li class="group">
                                <i class="fas fa-sun text-darkChoco text-2xl"></i>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
                <div class="relative mr-10 group ">
                    <div class="absolute z-1 inset-y-0 right-0 flex items-center">
                        <button type="button" id="search-button"
                            class="search-button text-2xl text-darkChoco w-14 h-14 bg-black/10 rounded-full flex items-center justify-center transition-all duration-200 ease-in-out cursor-pointer hover:bg-black/20"
                            aria-label="Buka Pencarian">
                            <i class="fas fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <input type="search" name="input-search" id="input-search" placeholder="Cari sesuatu..." autofocus
                        class="bg-white text-darkChoco pr-10 pl-4 py-4 rounded-full focus:outline-none shadow-3 w-0 group-hover:w-64 origin-right transition-all duration-500 ease-in-out">
                </div>
            </div>
        </div>
    </header>
    {{-- Header Start --}}

    <section id="hero" class="relative h-screen bg-accent/50 flex items-center justify-center text-center">
        <div class="absolute left-10 top-20 w-32 h-32 bg-primary/20 rounded-full blur-md"></div>
        <div class="absolute right-10 bottom-20 w-40 h-40 bg-primary/20 rounded-full blur-md"></div>
        <div
            class="absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 w-60 h-60 bg-primary/20 rounded-full blur-md">
        </div>

        <div class="container max-w-full">
            <h1
                class="font-bold text-3xl lg:text-6xl mx-auto mb-6 text-center leading-snug bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text max-w-4xl">
                Bergabung Menjadi Bagian dari Tim Kami
            </h1>
            <p class="font-semibold text-xl text-text max-w-6xl mx-auto">
                Wujudkan karir impian Anda bersama Cipta Muda Solusi. Kami mencari talenta terbaik untuk bergabung dalam
                misi menciptakan solusi teknologi inovatif.
            </p>
            <div class="flex items-center justify-center mt-6 gap-8">
                <div class="flex items-center text-text text-base">
                    <i class="fas fa-users mr-2 text-primary"></i>
                    50+ Tim Profesional
                </div>
                <div class="flex items-center text-text text-base">
                    <i class="fas fa-briefcase mr-2 text-primary"></i>
                    Lingkungan Kerja Fleksibel
                </div>
                <div class="flex items-center text-text text-base">
                    <i class="fas fa-location-dot mr-2 text-primary"></i>
                    Jakarta & Remote
                </div>
            </div>
        </div>
    </section>

    <section id="jobs" class="py-12 bg-section">
        <div class="container max-w-full">
            <div class="flex items-center justify-between mx-10 mb-10">
                <h1 class="font-bold text-2xl text-heading">Daftar Lowongan Kerja (6)</h1>
                <div class="flex items-center gap-6">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-magnifying-glass text-black/50"></i>
                        </div>
                        <input type="search" name="input-search" id="input-search" placeholder="Cari Lowongan..."
                            class="border border-text text-base text-black2 rounded-lg pl-10 p-4 pr-3 focus:outline-none placeholder:text-black/50">
                    </div>
                    <div>
                        <select name="filter" id="filter"
                            class="p-4 rounded-lg border border-text text-base focus:outline-none text-black2">
                            <option value="-">Semua Kategori</option>
                            <option value="-">Semua Kategori</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mx-10">
                <div class="bg-white rounded-xl shadow-1 p-6">
                    <div class="flex justify-between items-center mb-2">
                        <h1 class="font-bold text-xl text-heading">Senior Full Stack Developer</h1>
                        <span class="text-white bg-secondary px-3 py-2 rounded-sm">Engineering</span>
                    </div>
                    <p class="font-lato text-sm max-w-md text-text mb-3">
                        Kami mencari Senior Full Stack Developer yang berpengalaman untuk bergabung dengan tim
                        engineering kami.
                    </p>
                    <div class="flex items-center gap-6 mb-4">
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-location-dot mr-2"></i>
                            Jakarta, Indonesia
                        </div>
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-clock mr-2"></i>
                            Full-Time
                        </div>
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-briefcase mr-2"></i>
                            3-5 Tahun
                        </div>
                    </div>
                    <h2 class="text-sm font-semibold text-heading mb-2">Keahlian yang Dibutuhkan:</h2>
                    <div class="flex items-center gap-4 mb-5">
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            React.Js, Node.Js
                        </div>
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            Database Management
                        </div>
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            API Development
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-sm font-medium text-text">Diposting 2 hari yang lalu</h3>
                        <a href="#"
                            class="bg-primary px-4 py-2 text-white font-medium flex items-center text-sm rounded-sm">
                            Lamar Sekarang
                            <i class="fas fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-1 p-6">
                    <div class="flex justify-between items-center mb-2">
                        <h1 class="font-bold text-xl text-heading">Senior Full Stack Developer</h1>
                        <span class="text-white bg-secondary px-3 py-2 rounded-sm">Engineering</span>
                    </div>
                    <p class="font-lato text-sm max-w-md text-text mb-3">
                        Kami mencari Senior Full Stack Developer yang berpengalaman untuk bergabung dengan tim
                        engineering kami.
                    </p>
                    <div class="flex items-center gap-6 mb-4">
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-location-dot mr-2"></i>
                            Jakarta, Indonesia
                        </div>
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-clock mr-2"></i>
                            Full-Time
                        </div>
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-briefcase mr-2"></i>
                            3-5 Tahun
                        </div>
                    </div>
                    <h2 class="text-sm font-semibold text-heading mb-2">Keahlian yang Dibutuhkan:</h2>
                    <div class="flex items-center gap-4 mb-5">
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            React.Js, Node.Js
                        </div>
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            Database Management
                        </div>
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            API Development
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-sm font-medium text-text">Diposting 2 hari yang lalu</h3>
                        <a href="#"
                            class="bg-primary px-4 py-2 text-white font-medium flex items-center text-sm rounded-sm">
                            Lamar Sekarang
                            <i class="fas fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-1 p-6">
                    <div class="flex justify-between items-center mb-2">
                        <h1 class="font-bold text-xl text-heading">Senior Full Stack Developer</h1>
                        <span class="text-white bg-secondary px-3 py-2 rounded-sm">Engineering</span>
                    </div>
                    <p class="font-lato text-sm max-w-md text-text mb-3">
                        Kami mencari Senior Full Stack Developer yang berpengalaman untuk bergabung dengan tim
                        engineering kami.
                    </p>
                    <div class="flex items-center gap-6 mb-4">
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-location-dot mr-2"></i>
                            Jakarta, Indonesia
                        </div>
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-clock mr-2"></i>
                            Full-Time
                        </div>
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-briefcase mr-2"></i>
                            3-5 Tahun
                        </div>
                    </div>
                    <h2 class="text-sm font-semibold text-heading mb-2">Keahlian yang Dibutuhkan:</h2>
                    <div class="flex items-center gap-4 mb-5">
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            React.Js, Node.Js
                        </div>
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            Database Management
                        </div>
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            API Development
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-sm font-medium text-text">Diposting 2 hari yang lalu</h3>
                        <a href="#"
                            class="bg-primary px-4 py-2 text-white font-medium flex items-center text-sm rounded-sm">
                            Lamar Sekarang
                            <i class="fas fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-1 p-6">
                    <div class="flex justify-between items-center mb-2">
                        <h1 class="font-bold text-xl text-heading">Senior Full Stack Developer</h1>
                        <span class="text-white bg-secondary px-3 py-2 rounded-sm">Engineering</span>
                    </div>
                    <p class="font-lato text-sm max-w-md text-text mb-3">
                        Kami mencari Senior Full Stack Developer yang berpengalaman untuk bergabung dengan tim
                        engineering kami.
                    </p>
                    <div class="flex items-center gap-6 mb-4">
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-location-dot mr-2"></i>
                            Jakarta, Indonesia
                        </div>
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-clock mr-2"></i>
                            Full-Time
                        </div>
                        <div class="flex items-center text-text text-xs">
                            <i class="fas fa-briefcase mr-2"></i>
                            3-5 Tahun
                        </div>
                    </div>
                    <h2 class="text-sm font-semibold text-heading mb-2">Keahlian yang Dibutuhkan:</h2>
                    <div class="flex items-center gap-4 mb-5">
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            React.Js, Node.Js
                        </div>
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            Database Management
                        </div>
                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                            API Development
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <h3 class="text-sm font-medium text-text">Diposting 2 hari yang lalu</h3>
                        <a href="#"
                            class="bg-primary px-4 py-2 text-white font-medium flex items-center text-sm rounded-sm">
                            Lamar Sekarang
                            <i class="fas fa-chevron-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <footer>
        <div class="container max-w-full">
            <div class="bg-bg p-6 text-center text-text font-medium">
                <p>Copyright &copy; {{ date('Y') }} PT. Cipta Muda Solusi. All Right Reserved.</p>
            </div>
        </div>
    </footer> --}}

</body>

<script src={{ asset('js/script.js') }}></script>

</html>
