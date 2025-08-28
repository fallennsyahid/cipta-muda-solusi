<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cipta Muda Solusi</title>

    {{-- CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- Header Start --}}
    <header class="absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container max-w-full relative">
            <div class="flex items-center justify-between">
                <div class="pl-10 py-6">
                    <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="Logo Cipta Muda Solusi"
                        class="h-14 w-auto" width="675" height="200">
                </div>

                <div class="flex items-center justify-center px-4 py-6">
                    <button id="hamburger" name="hamburger" type="button" aria-label="Hamburger Menu"
                        class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="bg-white shadow-2 px-6 py-4 rounded-full">
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
                                <a href="#visiMisi" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Visi & Misi
                                </a>
                            </li>
                            <li class="group">
                                <a href="#service" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Layanan
                                </a>
                            </li>
                            <li class="group">
                                <a href="#teams" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Team
                                </a>
                            </li>
                            <li class="group">
                                <a href="#portfolios"
                                    class="text-base font-medium text-black2 group-hover:text-primary">
                                    Portfolio
                                </a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base font-medium text-black2 group-hover:text-primary">
                                    Contact
                                </a>
                            </li>
                            <li class="group">
                                <i class="fas fa-sun text-darkChoco text-2xl"></i>
                            </li>
                        </ul>
                    </nav>
                </div>
                <button type="button"
                    class="search-button text-2xl text-darkChoco w-14 h-14 bg-white shadow-3 rounded-full mr-10 flex items-center justify-center transition-all duration-200 ease-in-out cursor-pointer hover:scale-110"
                    aria-label="Buka Pencarian">
                    <i class="fas fa-magnifying-glass"></i>
                </button>
            </div>
        </div>
    </header>
    {{-- Header Start --}}

    {{-- Hero Section Start --}}
    <section id="hero-section" class="pt-36 bg-section min-h-screen">
        <div class="bg-[#CFE1F9] w-55 h-55 rounded-full absolute left-3/20 -top-16 blur-xl"></div>
        <div class="bg-[#CFE1F9] w-55 h-55 rounded-full absolute -left-10 bottom-44 blur-xl"></div>
        <div class="bg-[#CFE1F9] w-55 h-55 rounded-l-full absolute right-0 bottom-7 blur-xl"></div>
        <div class="bg-[#CFE1F9] w-25 h-25 absolute right-18 rotate-45 animate-pulse"></div>

        <div class="container max-w-full relative z-20">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-8 lg:w-1/2">
                    <h1 class="text-2xl font-semibold text-primary mb-3 text-center">
                        Young, Brave, Innovative, Strong
                    </h1>
                    <h2 class="font-bold text-6xl text-heading text-center mb-5">
                        Cipta Muda Solusi
                    </h2>
                    <p class="text-secondary/90 text-xl font-lato font-medium mb-9 text-center max-w-md mx-auto">
                        Solusi IT, Marketing & Event Organizer Terpercaya untuk Kemajuan Bisnis Anda
                    </p>

                    <div class="flex justify-center">
                        <a href="#"
                            class="bg-accent flex items-center text-heading font-semibold text-base py-4 px-12 h-14 rounded-tr-[50px] rounded-bl-[50px] rounded-tl-[20px] rounded-br-[20px] hover:bg-accent/80 transition-all duration-200 ease-in-out">
                            <i class="fas fa-phone mr-2"></i>
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>

                <div class="w-full self-end px-4 lg:w-1/2 overflow-hidden">
                    <div class="mt-10 relative lg:mt-9 lg:right-0">

                        <!-- SVG sebagai background -->
                        <span class="absolute inset-0 flex justify-center items-center">
                            <svg width="453" height="479" viewBox="0 0 453 479" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M310.132 20.4273C335.704 45.3169 337.999 98.3708 363.899 143.565C389.799 189.087 439.304 227.076 450.45 270.632C461.597 314.517 434.714 363.968 398.651 405.56C362.587 447.151 317.672 480.883 271.774 478.918C225.875 476.953 179.649 439.619 129.161 421.934C79.0001 404.25 24.5776 406.215 7.20169 380.015C-10.502 353.488 8.51308 299.124 20.6434 256.878C32.4459 214.959 37.6914 185.484 43.2648 149.132C48.8382 112.781 54.7394 69.5514 78.3444 43.6794C102.277 17.8074 144.242 9.29258 189.812 3.72519C235.383 -1.8422 284.232 -4.46216 310.132 20.4273Z"
                                    fill="#3B82F6" fill-opacity="0.2" />
                            </svg>
                        </span>

                        <!-- IMG di atas -->
                        <img src="{{ asset('landing/hero.png') }}" alt=""
                            class="relative z-10 max-w-full mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section Start --}}

    {{-- About Section Start --}}
    <section id="about" class="pt-36 pb-32 bg-section overflow-hidden">
        <div class="container max-w-full">
            <div class="mb-5">
                <h1 class="font-bold text-5xl text-heading text-center mb-5">Tentang Kami</h1>
                <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
            </div>

            <p class="font-lato text-text text-2xl text-center max-w-3xl mx-auto">
                Kami berkomitmen membangun kepercayaan dan kerjasama dengan mitra strategis dalam menghadapi era digital
                4.0.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-12 gap-4 mt-12 mb-14">
                <div class="relative w-80 mx-auto">
                    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
                    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
                        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
                            <i class="fas fa-users text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Young</h1>
                    </div>
                </div>
                <div class="relative w-74 mx-auto">
                    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
                    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
                        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
                            <i class="fas fa-users text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Young</h1>
                    </div>
                </div>
                <div class="relative w-74 mx-auto">
                    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
                    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
                        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
                            <i class="fas fa-users text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Young</h1>
                    </div>
                </div>
                <div class="relative w-74 mx-auto">
                    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
                    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
                        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
                            <i class="fas fa-users text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Young</h1>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2.5 mx-12">
                <div>
                    <h1 class="font-bold text-4xl text-heading mb-3">Perjalanan Kami</h1>
                    <p class="max-w-2xl font-lato text-text text-lg mb-9">
                        Dari startup kecil hingga menjadi partner teknologi terpercaya, kami terus berinovasi dan
                        berkembang untuk memberikan nilai terbaik bagi klien.
                    </p>
                    <div class="flex flex-col gap-6">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-14 h-14 bg-secondary text-white text-xl font-bold flex justify-center items-center rounded-full">
                                20
                            </div>
                            <div>
                                <h1 class="text-heading font-semibold text-xl">Perjalanan Kami</h1>
                                <p class="font-lato text-text max-w-sm">Cipta Muda Solusi didirikan dengan visi menjadi
                                    partner
                                    teknologi
                                    terpercaya.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-14 h-14 bg-secondary text-white text-xl font-bold flex justify-center items-center rounded-full">
                                20
                            </div>
                            <div>
                                <h1 class="text-heading font-semibold text-xl">Perjalanan Kami</h1>
                                <p class="font-lato text-text max-w-sm">Cipta Muda Solusi didirikan dengan visi menjadi
                                    partner
                                    teknologi
                                    terpercaya.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-14 h-14 bg-secondary text-white text-xl font-bold flex justify-center items-center rounded-full">
                                20
                            </div>
                            <div>
                                <h1 class="text-heading font-semibold text-xl">Perjalanan Kami</h1>
                                <p class="font-lato text-text max-w-sm">Cipta Muda Solusi didirikan dengan visi menjadi
                                    partner
                                    teknologi
                                    terpercaya.</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div
                                class="w-14 h-14 bg-secondary text-white text-xl font-bold flex justify-center items-center rounded-full">
                                20
                            </div>
                            <div>
                                <h1 class="text-heading font-semibold text-xl">Perjalanan Kami</h1>
                                <p class="font-lato text-text max-w-sm">Cipta Muda Solusi didirikan dengan visi menjadi
                                    partner
                                    teknologi
                                    terpercaya.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-auto">
                    <div class="relative w-165">
                        <div class="absolute inset-0 bg-accent rounded-xl rotate-3 z-0 p-6">
                            <h1 class="text-heading font-bold text-4xl mb-4 text-center -rotate-3">Motto</h1>
                            <div class="flex justify-center items-center mt-10">
                                <div
                                    class="relative flex justify-center items-center p-16 border-2 border-text rounded-xl -rotate-3">
                                    <div
                                        class="absolute right-6 -top-7 text-3xl text-secondary bg-accent p-3 rounded-full">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                    <p class="font-medium text-darkChoco text-xl italic text-center font-lato">
                                        "Kepuasaan
                                        Perusahaan Mitra adalah yang Utama"
                                    </p>
                                    <div
                                        class="absolute left-6 -bottom-7 text-3xl text-secondary bg-accent p-3 rounded-full">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="relative z-10 bg-white border-2 border-[#d2d2d2] p-10 rounded-xl flex flex-col hover:-rotate-90 origin-top-right transition-transform duration-700 ease-in-out">
                            <h1 class="text-heading font-semibold text-xl mb-2.5">Visi & Misi</h1>
                            <h2 class="flex items-center text-heading text-xl font-semibold mb-2">
                                <i class="fas fa-eye mr-2"></i>
                                Visi
                            </h2>
                            <p class="text-text font-lato text-sm mb-5">
                                "Menjadi perusahaan Jasa Solusi IT, Marketing, dan Event Organizer terpercaya di
                                Indonesia”
                            </p>
                            <h3 class="flex items-center text-heading text-xl font-semibold mb-2">
                                <i class="fas fa-bullseye mr-2"></i>
                                Misi
                            </h3>
                            <p class="max-w-xl text-sm flex items-center text-text mb-2">
                                <i class="fas fa-circle-check mr-2 text-secondary"></i>
                                Memberikan jasa pelayanan terbaik secara konsisten kepada semua perusahaan mitra
                            </p>
                            <p class="max-w-xl text-sm flex items-center text-text">
                                <i class="fas fa-circle-check mr-2 text-secondary"></i>
                                Memberikan jasa pelayanan terbaik secara konsisten kepada semua perusahaan mitra
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About Section End --}}

    {{-- Layanan Section Start --}}
    <section id="service" class="pt-36 pb-32 bg-section">
        <div class="container max-w-full">
            <div class="mb-5">
                <h1 class="font-bold text-5xl text-heading text-center mb-5">Layanan Unggulan Kami</h1>
                <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
            </div>

            <p class="max-w-4xl text-center mx-auto font-lato text-text text-2xl">
                Kami menyediakan berbagai layanan teknologi yang komprehensif untuk mendukung transformasi digital
                bisnis Anda
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-flow-row gap-6 my-12 mx-12">
                <div class="relative group">
                    <div class="bg-white shadow-3 rounded-xl p-6 group-hover:rounded-none group-hover:rounded-t-xl">
                        <div class="flex justify-center items-center flex-col gap-4">
                            <div
                                class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg group-hover:-translate-x-40 duration-500 ease-in-out">
                                <i class="fas fa-laptop-code text-white text-2xl"></i>
                            </div>
                            <h1
                                class="text-heading font-semibold text-xl group-hover:-translate-x-33 duration-500 ease-in-out">
                                IT Solution</h1>
                            <p class="text-text text-base text-center group-hover:text-left">
                                Memberikan pelayanan terbaik dalam segala bidang IT
                            </p>
                        </div>
                    </div>

                    <ul
                        class="absolute left-0 right-0 bg-white shadow-md rounded-b-xl px-6 pb-6 opacity-0 -translate-y-4 pointer-events-none transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:-translate-y-0 group-hover:pointer-events-auto">
                        <li
                            class="relative pl-5 text-text font-semibold text-base before:content-['•'] before:absolute before:left-0 before:text-base">
                            Software Development</li>
                        <li
                            class="relative pl-5 text-text font-semibold text-base before:content-['•'] before:absolute before:left-0 before:text-base">
                            Data Center</li>
                        <li
                            class="relative pl-5 text-text font-semibold text-base before:content-['•'] before:absolute before:left-0 before:text-base">
                            IT Operation & Maintenance</li>
                    </ul>
                </div>


                <div class="relative group">
                    <div class="bg-white shadow-3 rounded-xl p-6 group-hover:rounded-none group-hover:rounded-t-xl">
                        <div class="flex justify-center items-center flex-col gap-4">
                            <div
                                class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg group-hover:-translate-x-40 duration-500 ease-in-out">
                                <i class="fas fa-laptop-code text-white text-2xl"></i>
                            </div>
                            <h1
                                class="text-heading font-semibold text-xl group-hover:-translate-x-33 duration-500 ease-in-out">
                                IT Solution</h1>
                            <p class="text-text text-base text-center group-hover:text-left">
                                Memberikan pelayanan terbaik dalam segala bidang IT
                            </p>
                        </div>
                    </div>

                    <ul
                        class="absolute left-0 right-0 bg-white shadow-md rounded-b-xl px-6 pb-6 opacity-0 -translate-y-4 pointer-events-none transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:-translate-y-0 group-hover:pointer-events-auto">
                        <li
                            class="relative pl-5 text-text font-semibold text-base before:content-['•'] before:absolute before:left-0 before:text-base">
                            Software Development</li>
                        <li
                            class="relative pl-5 text-text font-semibold text-base before:content-['•'] before:absolute before:left-0 before:text-base">
                            Data Center</li>
                        <li
                            class="relative pl-5 text-text font-semibold text-base before:content-['•'] before:absolute before:left-0 before:text-base">
                            IT Operation & Maintenance</li>
                    </ul>
                </div>

                <div class="relative group">
                    <div class="bg-white shadow-3 rounded-xl p-6 group-hover:rounded-none group-hover:rounded-t-xl">
                        <div class="flex justify-center items-center flex-col gap-4">
                            <div
                                class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg group-hover:-translate-x-40 duration-500 ease-in-out">
                                <i class="fas fa-laptop-code text-white text-2xl"></i>
                            </div>
                            <h1
                                class="text-heading font-semibold text-xl group-hover:-translate-x-33 duration-500 ease-in-out">
                                IT Solution</h1>
                            <p class="text-text text-base text-center group-hover:text-left">
                                Memberikan pelayanan terbaik dalam segala bidang IT
                            </p>
                        </div>
                    </div>

                    <ul
                        class="absolute left-0 right-0 bg-white shadow-md rounded-b-xl px-6 pb-6 opacity-0 -translate-y-4 pointer-events-none transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:-translate-y-0 group-hover:pointer-events-auto">
                        <li
                            class="relative pl-5 text-text font-semibold text-base before:content-['•'] before:absolute before:left-0 before:text-base">
                            Software Development</li>
                        <li
                            class="relative pl-5 text-text font-semibold text-base before:content-['•'] before:absolute before:left-0 before:text-base">
                            Data Center</li>
                        <li
                            class="relative pl-5 text-text font-semibold text-base before:content-['•'] before:absolute before:left-0 before:text-base">
                            IT Operation & Maintenance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Layanan Section Start --}}

    {{-- Portfolio Section Start --}}
    <section id="portfolio" class="pt-36 pb-32 bg-white">
        <div class="container max-w-full">
            <div class="mb-5">
                <h1 class="font-bold text-5xl text-heading text-center mb-5">Portfolio Perusahaan</h1>
                <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
            </div>

            <p class="text-2xl text-text mb-12 text-center max-w-3xl mx-auto">
                Beberapa pengalaman pekerjaan yang sudah kami jalankan dengan baik, benar, dan cepat.
            </p>

            <div class="mx-12 flex flex-col gap-y-12">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 place-items-center">
                    <div class="flex flex-col items-start gap-3">
                        <span class="flex items-center text-secondary font-lato text-xl font-semibold">
                            <i class="fas fa-gear text-text mr-2"></i>
                            Switch dan Router MIKROTIK
                        </span>
                        <h1 class="font-bold text-4xl text-heading">INFRASTRUCTURE INSTALATION</h1>
                        <p class="text-text text-xl">
                            Instalasi dan konfigurasi switch Catalyst 2960X dan Mikrotik RB 1100 AH pada server Angkasa
                            Pura 1 – Kemayoran , Jakarta Pusat.
                        </p>
                        <div
                            class="bg-secondary/25 text-secondary font-semibold text-lg py-2 px-6 rounded-tl-lg rounded-br-lg rounded-bl-3xl rounded-tr-3xl">
                            APRIL 2020
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('landing/webp/portfolios/portfolio_3.webp') }}" alt=""
                            width="600" height="300" class="hidden md:block">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 place-items-center">
                    <div>
                        <img src="{{ asset('landing/webp/portfolios/portfolio_3.webp') }}" alt=""
                            width="600" height="300">
                    </div>
                    <div class="flex flex-col items-start gap-3">
                        <span class="flex items-center text-secondary font-lato text-xl font-semibold">
                            <i class="fas fa-gear text-text mr-2"></i>
                            Switch dan Router MIKROTIK
                        </span>
                        <h1 class="font-bold text-4xl text-heading">INFRASTRUCTURE INSTALATION</h1>
                        <p class="text-text text-xl">
                            Instalasi dan konfigurasi switch Catalyst 2960X dan Mikrotik RB 1100 AH pada server Angkasa
                            Pura 1 – Kemayoran , Jakarta Pusat.
                        </p>
                        <div
                            class="bg-secondary/25 text-secondary font-semibold text-lg py-2 px-6 rounded-tl-lg rounded-br-lg rounded-bl-3xl rounded-tr-3xl">
                            APRIL 2020
                        </div>
                    </div>
                </div>
                <button type="button"
                    class="text-heading font-semibold text-base px-9 py-2 border border-[#c8c8c8] mx-auto rounded-lg shadow-4 cursor-pointer hover:bg-primary hover:text-white transition-colors duration-300 ease-in-out">
                    Lihat Semua
                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                </button>
            </div>
        </div>
    </section>
    {{-- Portfolio Section End --}}

    {{-- Section Team Start --}}
    <section id="team" class="pt-36 pb-32 bg-white">
        <div class="container max-w-full relative z-50">
            <div class="mb-5">
                <h1 class="font-bold text-5xl text-heading text-center mb-5">Tim Kami</h1>
                <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
            </div>

            <p class="font-lato text-text text-2xl text-center max-w-5xl mx-auto">
                Berdiri bersama dalam mewujudkan industri kreatif Indonesia didalam segala bidang terutama pada sektor
                Teknologi Informasi, Pemasaran (Marketing), dan bidang industri kreatif (MICE).
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-12 gap-x-6 gap-y-10 mt-6">
                <div class="bg-white shadow-4 p-6 rounded-xl border border-[#c8c8c8] flex flex-col items-center">
                    <div class="relative mb-4">
                        <img src="{{ asset('landing/webp/teams/randy-khairu.webp') }}" alt=""
                            class="rounded-full h-20 w-20 object-contain">
                    </div>
                    <h1 class="text-base text-heading font-bold text-center mb-1">Randy Khairu Basyar</h1>
                    <h2 class="text-sm font-semibold text-heading text-center mb-3">Komisarin Utama</h2>
                    <p class="text-text text-sm italic text-center mb-6">
                        “Dengan menghadapi dunia digital 4.0, kami berkomitmen untuk terus berkembang dan menjadi poros
                        teknologi di Indonesia.”
                    </p>

                    <div class="flex items-center gap-6">
                        <a href="#" target="_blank"
                            class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center group hover:bg-primary transition-colors duration-300 ease-in-out">
                            <i class="fab fa-telegram text-2xl text-heading group-hover:text-white"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center group hover:bg-primary transition-colors duration-300 ease-in-out">
                            <i class="fab fa-linkedin text-2xl text-heading group-hover:text-white"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center group hover:bg-primary transition-colors duration-300 ease-in-out">
                            <i class="fab fa-instagram text-2xl text-heading group-hover:text-white"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white shadow-4 p-6 rounded-xl border border-[#c8c8c8] flex flex-col items-center translate-y-6">
                    <div class="relative mb-4">
                        <img src="{{ asset('landing/webp/teams/randy-khairu.webp') }}" alt=""
                            class="rounded-full h-20 w-20 object-contain">
                    </div>

                    <h1 class="text-base text-heading font-bold text-center mb-1">Randy Khairu Basyar</h1>
                    <h2 class="text-sm font-semibold text-heading text-center mb-3">Komisarin Utama</h2>
                    <p class="text-text text-sm italic text-center mb-6">
                        “Dengan menghadapi dunia digital 4.0, kami berkomitmen untuk terus berkembang dan menjadi poros
                        teknologi di Indonesia.”
                    </p>

                    <div class="flex items-center gap-6">
                        <div class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center">
                            <i class="fab fa-telegram text-2xl text-heading"></i>
                        </div>
                        <div class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center">
                            <i class="fab fa-linkedin text-2xl text-heading"></i>
                        </div>
                        <div class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center">
                            <i class="fab fa-instagram text-2xl text-heading"></i>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-4 p-6 rounded-xl border border-[#c8c8c8] flex flex-col items-center">
                    <div class="relative mb-4">
                        <img src="{{ asset('landing/webp/teams/randy-khairu.webp') }}" alt=""
                            class="rounded-full h-20 w-20 object-contain">
                    </div>

                    <h1 class="text-base text-heading font-bold text-center mb-1">Randy Khairu Basyar</h1>
                    <h2 class="text-sm font-semibold text-heading text-center mb-3">Komisarin Utama</h2>
                    <p class="text-text text-sm italic text-center mb-6">
                        “Dengan menghadapi dunia digital 4.0, kami berkomitmen untuk terus berkembang dan menjadi poros
                        teknologi di Indonesia.”
                    </p>

                    <div class="flex items-center gap-6">
                        <div class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center">
                            <i class="fab fa-telegram text-2xl text-heading"></i>
                        </div>
                        <div class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center">
                            <i class="fab fa-linkedin text-2xl text-heading"></i>
                        </div>
                        <div class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center">
                            <i class="fab fa-instagram text-2xl text-heading"></i>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white shadow-4 p-6 rounded-xl border border-[#c8c8c8] flex flex-col items-center translate-y-6">
                    <div class="relative mb-4">
                        <img src="{{ asset('landing/webp/teams/randy-khairu.webp') }}" alt=""
                            class="rounded-full h-20 w-20 object-contain">
                    </div>

                    <h1 class="text-base text-heading font-bold text-center mb-1">Randy Khairu Basyar</h1>
                    <h2 class="text-sm font-semibold text-heading text-center mb-3">Komisarin Utama</h2>
                    <p class="text-text text-sm italic text-center mb-6">
                        “Dengan menghadapi dunia digital 4.0, kami berkomitmen untuk terus berkembang dan menjadi poros
                        teknologi di Indonesia.”
                    </p>

                    <div class="flex items-center gap-6">
                        <div class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center">
                            <i class="fab fa-telegram text-2xl text-heading"></i>
                        </div>
                        <div class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center">
                            <i class="fab fa-linkedin text-2xl text-heading"></i>
                        </div>
                        <div class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center">
                            <i class="fab fa-instagram text-2xl text-heading"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-20">
                <div class="flex items-end">
                    <div
                        class="flex items-center justify-center p-10 text-center text-xl font-bold text-white w-48 h-48 bg-primary translate-x-14 relative z-10 [clip-path:polygon(25%_6.7%,75%_6.7%,100%_50%,75%_93.3%,25%_93.3%,0%_50%)]">
                        "Muda Bersolusi"
                    </div>
                    <div
                        class="flex items-center justify-center p-10 text-center text-xl font-bold text-white w-72 h-72 bg-secondary/80 [clip-path:polygon(25%_6.7%,75%_6.7%,100%_50%,75%_93.3%,25%_93.3%,0%_50%)]">
                        “Kepuasaan Perusahaan Mitra adalah yang Utama”
                    </div>
                    <div
                        class="flex items-center justify-center p-10 text-center text-xl font-bold text-white w-48 h-48 bg-primary -translate-x-14 relative -z-10 [clip-path:polygon(25%_6.7%,75%_6.7%,100%_50%,75%_93.3%,25%_93.3%,0%_50%)]">
                        "Semua Pasti ada Solusi"
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section Team End --}}

    {{-- Partner Section Start --}}
    <section id="partner" class="pt-36 pb-32 bg-section">
        <div class="container max-w-full">
            <div class="mb-5">
                <h1 class="font-bold text-5xl text-heading text-center mb-5">Partner Terpercaya</h1>
                <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
            </div>

            <p class="font-lato text-text text-2xl text-center max-w-5xl mx-auto">
                Sebuah kebanggaan dapat bekerja sama dengan perusahaan-perusahaan terkemuka untuk memberikan solusi
                terbaik.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 mx-12 gap-6 my-10">
                <div class="bg-white p-8 rounded-2xl flex items-center justify-center shadow-3">
                    <img src="{{ asset('landing/webp/angkasa-pura.webp') }}" alt=""
                        class="aspect-video h-36 w-full grayscale hover:grayscale-0 transition-all duration-300 ease-in-out">
                </div>
                <div class="bg-white p-8 rounded-2xl flex items-center justify-center shadow-3">
                    <img src="{{ asset('landing/webp/telkom.webp') }}" alt=""
                        class="aspect-square h-36 w-36 grayscale hover:grayscale-0 transition-all duration-300 ease-in-out">
                </div>
                <div class="bg-white p-8 rounded-2xl flex items-center justify-center shadow-3">
                    <img src="{{ asset('landing/webp/kemenkop.webp') }}" alt=""
                        class="aspect-video h-36 w-36 grayscale hover:grayscale-0 transition-all duration-300 ease-in-out">
                </div>
            </div>

            <p class="text-center font-lato text-lg text-text font-medium">
                Ingin menjadi partner kami?
                <a href="#" class="font-semibold text-primary hover:text-primary/80">
                    Hubungi Kami
                    <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </p>
        </div>
    </section>
    {{-- Partner Section End --}}

    {{-- Contact & Maps Section Start --}}
    <section id="contact" class="pt-8 pb-32 bg-section">
        <div class="container max-w-full">
            <div class="bg-accent mx-12 rounded-2xl p-6">
                <div class="flex flex-wrap lg:flex-nowrap gap-10">
                    <div class="w-full lg:w-1/2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.0444291674!2d-118.74139030403776!3d34.020608403183566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Amerika%20Serikat!5e0!3m2!1sid!2sid!4v1756348054105!5m2!1sid!2sid"
                            width="600" height="400" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-lg">
                        </iframe>
                    </div>
                    <div class="w-full lg:w-1/2 p-16 flex flex-col justify-center items-center">
                        <h1 class="font-bold text-4xl text-heading text-center mb-8">Kunjungi Kami</h1>
                        <p class="font-lato text-text text-lg text-center max-w-xl mb-8">
                            Datang dan temui tim kami secara langsung. Kami selalu terbuka untuk berbincang dan
                            berkolaborasi.
                        </p>
                        <div class="flex justify-center">
                            <a href="https://maps.app.goo.gl/MEj1GV4VQM4ft1UVA" target="_blank"
                                class="py-3 px-5 bg-secondary text-white font-medium text-base rounded-lg flex items-center justify-center hover:bg-primary transition-colors duration-300 ease-in-out">
                                <i class="fas fa-map-location-dot mr-2"></i>
                                Dapatkan Petunjuk Arah
                            </a>
                        </div>
                    </div>
                </div>
                <p class="mt-6 text-center text-text font-medium text-lg font-lato">Ingin konsultasi secara online?
                    <a href="#" target="_blank" class="text-primary font-semibold hover:text-primary/80">
                        Konsultasi sekarang
                        <i class="fas fa-people-arrows ml-1"></i>
                    </a>
                </p>
            </div>
        </div>
    </section>
    {{-- Contact & Maps Section End --}}

    {{-- Footer Section Start --}}
    <footer class="bg-accent pt-10">
        <div class="container max-w-full">
            <div class="flex flex-wrap gap-20 mx-10">
                <div class="w-full md:w-2/5">
                    <div class="flex items-center mb-2">
                        <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="" class="h-14 w-auto">
                        <h1 class="font-bold text-heading text-2xl">Cipta Muda Solusi</h1>
                    </div>
                    <p class="font-lato text-darkChoco text-base">
                        Kami adalah partner teknologi terpercaya yang menghadirkan solusi inovatif untuk transformasi
                        digital bisnis Anda. Dengan tim profesional dan teknologi terdepan, kami siap membantu
                        mewujudkan visi digital perusahaan Anda.
                    </p>
                    <div class="my-3">
                        <h1 class="font-bold text-xl text-heading mb-2">Subscribe Newslatter</h1>
                        <div class="flex items-center gap-2">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-black/50"></i>
                                </div>
                                <input type="email" name="newslatter" id="newslatter" placeholder="Email Anda"
                                    class="w-full py-3 pl-12 pr-4 text-base bg-white text-darkChoco rounded-lg focus:outline-none">
                            </div>
                            <div>
                                <button type="submit"
                                    class="bg-secondary w-11 h-11 flex justify-center items-center border border-secondary rounded-lg cursor-pointer group hover:bg-transparent hover:border-2 hover:border-white transition-all duration-200 ease-in-out">
                                    <i class="fas fa-envelope text-white group-hover:text-secondary"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-[13%]">
                    <h1 class="font-bold text-2xl text-heading">Perusahaan</h1>
                    <ul class="mt-3 flex flex-col space-y-3">
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Tim
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Faq
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Lowongan
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-[13%]">
                    <h1 class="font-bold text-2xl text-heading">Layanan</h1>
                    <ul class="mt-3 flex flex-col space-y-3">
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                IT Solution
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Sales & Marketing
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Event Organizer
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Software Development
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Data Center
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                IT Operation & Maintanance
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-[13%]">
                    <h1 class="font-bold text-2xl text-heading">Quick Links</h1>
                    <ul class="mt-3 flex flex-col space-y-3">
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Tentang
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Layanan
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Tim
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Faq
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="font-lato text-base text-text hover:text-primary transition-colors duration-200 ease-in-out">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-center gap-3 my-6">
                <a href="#" target="_blank"
                    class="w-10 h-10 bg-primary rounded-full flex justify-center items-center text-center">
                    <i class="fab fa-facebook text-white text-xl"></i>
                </a>
                <a href="#" target="_blank"
                    class="w-10 h-10 bg-primary rounded-full flex justify-center items-center text-center">
                    <i class="fab fa-linkedin text-white text-xl"></i>
                </a>
                <a href="#" target="_blank"
                    class="w-10 h-10 bg-primary rounded-full flex justify-center items-center text-center">
                    <i class="fab fa-instagram text-white text-xl"></i>
                </a>
                <a href="#" target="_blank"
                    class="w-10 h-10 bg-primary rounded-full flex justify-center items-center text-center">
                    <i class="fab fa-x-twitter text-white text-xl"></i>
                </a>
                <a href="#" target="_blank"
                    class="w-10 h-10 bg-primary rounded-full flex justify-center items-center text-center">
                    <i class="fab fa-youtube text-white text-xl"></i>
                </a>
            </div>
            <div class="border-t border-text py-4">
                <p class="text-center text-text font-lato font-semibold text-base">&copy; 2025 Cipta Muda Solusi. All
                    Right Reserved.</p>
            </div>
        </div>
    </footer>
    {{-- Footer Section End --}}
</body>

</html>
