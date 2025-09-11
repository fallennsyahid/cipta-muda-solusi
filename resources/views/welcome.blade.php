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

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    {{-- Header Start --}}
    <x-header>
        <div class="flex items-center justify-center px-4 py-6">
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
                        <a href="#partner" class="text-base font-medium text-black2 group-hover:text-primary">
                            Partner
                        </a>
                    </li>
                    <li class="group">
                        <a href="#contact" class="text-base font-medium text-black2 group-hover:text-primary">
                            Contact
                        </a>
                    </li>
                    <li class="group">
                        <a href="{{ route('user.jobs.index') }}"
                            class="text-base font-medium text-black2 group-hover:text-primary">
                            Karir
                        </a>
                    </li>
                    <li class="group">
                        <a href="{{ route('user.faqs.index') }}"
                            class="text-base font-medium text-black2 group-hover:text-primary">
                            Faq
                        </a>
                    </li>
                    <li class="group">
                        <a href="{{ route('user.blogs.index') }}"
                            class="text-base font-medium text-black2 group-hover:text-primary">
                            Blog
                        </a>
                    </li>
                    <li class="group">
                        <i class="fas fa-sun text-darkChoco text-2xl"></i>
                    </li>
                </ul>
            </nav>
        </div>
    </x-header>
    {{-- Header Start --}}

    {{-- Hero Section Start --}}
    <section id="hero-section" class="pt-36 bg-section">
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
                            <i class="fas fa-shield-halved text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Strong</h1>
                    </div>
                </div>
                <div class="relative w-74 mx-auto">
                    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
                    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
                        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
                            <i class="fas fa-lightbulb text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Innovotive</h1>
                    </div>
                </div>
                <div class="relative w-74 mx-auto">
                    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
                    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
                        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
                            <i class="fas fa-hand-back-fist text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Strong</h1>
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
                            class="relative z-10 bg-white border-2 border-[#d2d2d2] p-10 rounded-xl flex flex-col origin-top-right transition-transform duration-1000 ease-in-out hover:-rotate-90 hover:-translate-x-2 will-change-transform">
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

            <div class="slider-left-container">
                <div class="slider-left-track gap-8">
                    {{-- 1 --}}
                    <div class="slide-item-left">
                        <div
                            class="bg-white shadow-3 rounded-xl p-6 h-48 group-hover:rounded-none group-hover:rounded-t-xl">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-laptop-code text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    IT Solution
                                </h1>
                                <p class="text-text text-base text-center">
                                    Memberikan pelayanan terbaik dalam segala bidang IT
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="slide-item-left">
                        <div
                            class="bg-white shadow-3 rounded-xl p-6 h-48 group-hover:rounded-none group-hover:rounded-t-xl">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-laptop text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    Software Development
                                </h1>
                                <p class="text-text text-base text-center">
                                    Berkembang bersama mitra dalam membentuk software yang di inginkan
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- 3 --}}
                    <div class="slide-item-left">
                        <div
                            class="bg-white shadow-3 rounded-xl p-6 h-48 group-hover:rounded-none group-hover:rounded-t-xl">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-server text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    Data Center
                                </h1>
                                <p class="text-text text-base text-center">
                                    Menjadi tempat terpercaya dalam penyimpanan data mitra untuk bekerja sama
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- 1 --}}
                    <div class="slide-item-left">
                        <div class="bg-white shadow-3 rounded-xl p-6 h-48">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-laptop-code text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    IT Solution
                                </h1>
                                <p class="text-text text-base text-center">
                                    Memberikan pelayanan terbaik dalam segala bidang IT
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="slide-item-left">
                        <div class="bg-white shadow-3 rounded-xl p-6 h-48">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-laptop text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    Software Development
                                </h1>
                                <p class="text-text text-base text-center">
                                    Berkembang bersama mitra dalam membentuk software yang di inginkan
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- 3 --}}
                    <div class="slide-item-left">
                        <div class="bg-white shadow-3 rounded-xl p-6 h-48">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-server text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    Data Center
                                </h1>
                                <p class="text-text text-base text-center">
                                    Menjadi tempat terpercaya dalam penyimpanan data mitra untuk bekerja sama
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-right-container">
                <div class="slider-right-track gap-8 ">

                    {{-- Slide Utama --}}
                    <div class="slide-item-right">
                        <div class="bg-white shadow-3 rounded-xl p-6 h-48">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-screwdriver-wrench text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    IT Operation dan Maintenance</h1>

                                <p class="text-text text-base text-center group-hover:text-left">
                                    Melakukan dan memberikan
                                    maintenance kebutuhan IT
                                    untuk seluruh mitra yang
                                    bekerja sama
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item-right">
                        <div class="bg-white shadow-3 rounded-xl p-6 h-48">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-bullhorn text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    Sales dan
                                    Marketing
                                </h1>
                                <p class="text-text text-base text-center">
                                    Memberikan pelayanan
                                    dalam bidang pemasaran
                                    produk mitra untuk
                                    pengembangan usaha.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item-right">
                        <div class="bg-white shadow-3 rounded-xl p-6 h-48">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-calendar-days text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    Event Organizer
                                </h1>
                                <p class="text-text text-base text-center">
                                    Membantu menjalankan
                                    penyelenggaraan event yang
                                    di inginkan mitra kerja.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Slide Duplikat --}}
                    <div class="slide-item-right">
                        <div class="bg-white shadow-3 rounded-xl p-6 h-48">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-screwdriver-wrench text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    IT Operation dan Maintenance</h1>

                                <p class="text-text text-base text-center group-hover:text-left">
                                    Melakukan dan memberikan
                                    maintenance kebutuhan IT
                                    untuk seluruh mitra yang
                                    bekerja sama
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item-right">
                        <div class="bg-white shadow-3 rounded-xl p-6 h-48">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-bullhorn text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    Sales dan
                                    Marketing
                                </h1>
                                <p class="text-text text-base text-center">
                                    Memberikan pelayanan
                                    dalam bidang pemasaran
                                    produk mitra untuk
                                    pengembangan usaha.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item-right">
                        <div class="bg-white shadow-3 rounded-xl p-6 h-48">
                            <div class="flex justify-center items-center flex-col gap-4">
                                <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                                    <i class="fas fa-calendar-days text-white text-2xl"></i>
                                </div>
                                <h1 class="text-heading font-semibold text-xl">
                                    Event Organizer
                                </h1>
                                <p class="text-text text-base text-center">
                                    Membantu menjalankan
                                    penyelenggaraan event yang
                                    di inginkan mitra kerja.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Layanan Section Start --}}

    {{-- Portfolio Section Start --}}
    <section id="portfolio" class="pt-36 pb-32 bg-white">
        <div class="container max-w-full relative">
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
                            <i class="fas fa-gears rotate-90 text-text mr-2"></i>
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
                        <img src="{{ asset('landing/webp/portfolios/portfolio_1.webp') }}" alt=""
                            width="600" height="300">
                    </div>
                    <div class="flex flex-col items-start gap-3">
                        <span class="flex items-center text-secondary font-lato text-xl font-semibold">
                            <i class="fas fa-gears rotate-90 text-text mr-2"></i>
                            Lamikro dan Database Kewirausahaan
                        </span>
                        <h1 class="font-bold text-4xl text-heading">WEB BASED PRODUCTION</h1>
                        <p class="text-text text-xl">
                            Jasa pembuatan website berbasis Big Data, yang
                            dikelola oleh tim kami bekerjasama dengan
                            Kementerian Koperasi dan UKM.
                            Kami juga mengelola maintain dan operasional
                            kegiatan didalamnya.
                        </p>
                        <div
                            class="bg-secondary/25 text-secondary font-semibold text-lg py-2 px-6 rounded-tl-lg rounded-br-lg rounded-bl-3xl rounded-tr-3xl">
                            AGUSTUS 2020
                        </div>
                    </div>
                </div>
                <button type="button" id="open-overlay"
                    class="text-heading font-semibold text-base px-9 py-2 border border-[#c8c8c8] mx-auto rounded-lg shadow-4 cursor-pointer hover:bg-primary hover:text-white transition-colors duration-300 ease-in-out">
                    Lihat Semua
                    <i class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                </button>
            </div>
        </div>
    </section>
    {{-- Portfolio Section End --}}

    {{-- Detail Portfolio Overlay Start --}}
    <div id="portfolio-overlay"
        class="fixed inset-0 z-[99999] bg-black2/20 backdrop-blur-xl overflow-y-auto transform translate-x-full transition-transform duration-700 ease-in-out">
        <div class="ml-12 mt-12">
            <a href="#" id="close-overlay"
                class="flex items-center justify-center w-12 h-12 bg-white rounded-full hover:bg-white/75 duration-200 transition-all ease-in-out group">
                <i
                    class="fas fa-times block text-2xl text-darkChoco/80 group-hover:text-darkChoco transform transition-transform duration-200 ease-in-out group-hover:rotate-90"></i>
            </a>
        </div>

        <div class="min-h-screen flex flex-col items-center justify-start py-12">
            <div class="flex flex-col justify-between items-center mb-8">
                <div class="mb-5">
                    <h1 class="text-5xl font-bold text-white mb-3">Portfolio Perusahaan</h1>
                    <div class="w-25 h-1 bg-white mx-auto rounded-full"></div>
                </div>
                <div class="flex gap-4">
                    <button type="button"
                        class="px-3 py-1 text-white rounded-full bg-darkChoco font-medium cursor-pointer">
                        Semua
                    </button>
                    <button type="button"
                        class="px-3 py-1 text-darkChoco border border-darkChoco rounded-full font-medium cursor-pointer hover:text-white hover:bg-darkChoco transition-colors duration-200 ease-in-out">
                        Event
                    </button>
                    <button type="button"
                        class="px-3 py-1 border border-darkChoco rounded-full text-darkChoco font-medium cursor-pointer hover:text-white hover:bg-darkChoco transition-colors duration-200 ease-in-out">
                        IoT
                    </button>
                    <button type="button"
                        class="px-3 py-1 border border-darkChoco rounded-full text-darkChoco font-medium cursor-pointer hover:text-white hover:bg-darkChoco transition-colors duration-200 ease-in-out">
                        Web Development
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mx-10">
                <div class="bg-white shadow-1 rounded-xl">
                    <div class="aspect-video overflow-hidden rounded-t-xl">
                        <img src="{{ asset('landing/webp/portfolios/portfolio_1.webp') }}" alt=""
                            class="w-full h-full opacity-90 object-conver hover:opacity-100 hover:scale-105 5transition-all duration-300" />
                    </div>
                    <div class="p-6 flex flex-col gap-3">
                        <h1 class="text-primary text-lg font-medium flex items-center gap-2">
                            <i class="fas fa-layer-group text-text"></i>
                            Web Development
                        </h1>
                        <h2 class="text-heading font-bold text-xl">Web Based Development</h2>
                        <p class="text-base text-text">
                            Jasa pembuatan website berbasis Big Data, yang
                            dikelola oleh tim kami bekerjasama dengan
                            Kementerian Koperasi dan UKM.
                            Kami juga mengelola maintain dan operasional
                            kegiatan didalamnya.
                        </p>
                        <div class="flex items-center gap-2">
                            <span class="bg-secondary/25 text-primary px-3 py-1 rounded-full">
                                Bootstrap
                            </span>
                            <span class="bg-secondary/25 text-primary px-3 py-1 rounded-full">
                                PHP
                            </span>
                            <span class="bg-secondary/25 text-primary px-3 py-1 rounded-full">
                                JQuery
                            </span>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-1 rounded-xl">
                    <div class="aspect-video overflow-hidden rounded-t-xl">
                        <img src="{{ asset('landing/webp/portfolios/portfolio_2.webp') }}" alt=""
                            class="w-full h-full opacity-90 object-conver hover:opacity-100 hover:scale-105 5transition-all duration-300" />
                    </div>
                    <div class="p-6 flex flex-col gap-3">
                        <h1 class="text-primary text-lg font-medium flex items-center gap-2">
                            <i class="fas fa-layer-group text-text"></i>
                            Event Organizer
                        </h1>
                        <h2 class="text-heading font-bold text-xl">
                            SUNLIFE FINANCIAL ANNUAL AWARD NIGHT
                        </h2>
                        <p class="text-base text-text">
                            Malam Penghargaan agensi Sunlife Financial
                            Indonesia yang di laksanakan secara virtual
                            melalui zoom meeting yang di ikuti sebanyak 8000
                            peserta (Agent) di seluruh Indonesia
                        </p>
                        <div class="flex items-center gap-2">
                            <span class="bg-secondary/25 text-primary px-3 py-1 rounded-full">
                                Zoom
                            </span>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-1 rounded-xl">
                    <div class="aspect-video overflow-hidden rounded-t-xl">
                        <img src="{{ asset('landing/webp/portfolios/portfolio_3.webp') }}" alt=""
                            class="w-full h-full opacity-90 object-conver hover:opacity-100 hover:scale-105 5transition-all duration-300" />
                    </div>
                    <div class="p-6 flex flex-col gap-3">
                        <h1 class="text-primary text-lg font-medium flex items-center gap-2">
                            <i class="fas fa-layer-group text-text"></i>
                            IT Operation dan Maintenance
                        </h1>
                        <h2 class="text-heading font-bold text-xl">INFRASTRUCTURE INSTALATION</h2>
                        <p class="text-base text-text">
                            Instalasi dan konfigurasi switch Catalyst 2960X
                            dan Mikrotik RB 1100 AH pada server Angkasa
                            Pura 1 – Kemayoran , Jakarta Pusat.
                        </p>
                        <div class="flex items-center gap-2">
                            <span class="bg-secondary/25 text-primary px-3 py-1 rounded-full">
                                Catalyst 2960X
                            </span>
                            <span class="bg-secondary/25 text-primary px-3 py-1 rounded-full">
                                Mikrotik RB 1100 AH
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Detail Portfolio Overlay End --}}

    {{-- Section Team Start --}}
    <section id="team" class="pt-36 pb-32 bg-white">
        <div class="container max-w-full relative z-10">
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
                        <img src="{{ asset('landing/webp/teams/aditya_bayu.webp') }}" alt=""
                            class="rounded-full h-20 w-20 object-contain">
                    </div>
                    <h1 class="text-base text-heading font-bold text-center mb-1">Aditya Bayu Irawan</h1>
                    <h2 class="text-sm font-semibold text-heading text-center mb-3">CEO</h2>
                    <p class="text-text text-sm italic text-center mb-6">
                        “Membawa Indonesia
                        untuk bersaing di
                        pasar global agar terus
                        berkembang dan
                        menjadi poros IT
                        Dunia.”
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

                <div class="bg-white shadow-4 p-6 rounded-xl border border-[#c8c8c8] flex flex-col items-center">
                    <div class="relative mb-4">
                        <img src="{{ asset('landing/webp/teams/irfan_fauzan.webp') }}" alt=""
                            class="rounded-full h-20 w-20 object-contain">
                    </div>
                    <h1 class="text-base text-heading font-bold text-center mb-1">Irfan Fauzan</h1>
                    <h2 class="text-sm font-semibold text-heading text-center mb-3">IT Director</h2>
                    <p class="text-text text-sm italic text-center mb-6">
                        “Berdiri dengan
                        kekuatan dan mental
                        jiwa kesatria untuk
                        terus berkembang
                        menghadapi dunia
                        industri IT.”
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
                        <img src="{{ asset('landing/webp/teams/nanda.webp') }}" alt=""
                            class="rounded-full h-20 w-20 object-contain">
                    </div>
                    <h1 class="text-base text-heading font-bold text-center mb-1">Nanda
                        Ikhsanabdullah Utama
                    </h1>
                    <h2 class="text-sm font-semibold text-heading text-center mb-3">Komisarin Utama</h2>
                    <p class="text-text text-sm italic text-center mb-6">
                        “Digitalisasi merupakan
                        perkembangan dunia
                        yang bisa membawa
                        kita kearah
                        kemudahan dalam
                        melakukan
                        perkembangan.”
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
            </div>

            <div class="flex justify-center mt-20">
                <div class="flex items-end">
                    <div
                        class="flex items-center justify-center p-10 text-center text-xl font-bold text-white w-48 h-48 bg-primary translate-x-14 relative z-1 [clip-path:polygon(25%_6.7%,75%_6.7%,100%_50%,75%_93.3%,25%_93.3%,0%_50%)]">
                        "Muda Bersolusi"
                    </div>
                    <div
                        class="flex items-center justify-center p-10 text-center text-xl font-bold text-white w-72 h-72 bg-secondary/80 [clip-path:polygon(25%_6.7%,75%_6.7%,100%_50%,75%_93.3%,25%_93.3%,0%_50%)]">
                        “Kepuasaan Perusahaan Mitra adalah yang Utama”
                    </div>
                    <div
                        class="flex items-center justify-center p-10 text-center text-xl font-bold text-white w-48 h-48 bg-primary -translate-x-14 relative -z-1 [clip-path:polygon(25%_6.7%,75%_6.7%,100%_50%,75%_93.3%,25%_93.3%,0%_50%)]">
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

            <div class="flex flex-col gap-2 items-center justify-center">
                <p class="text-center font-lato text-lg text-text font-medium">
                    Ingin menjadi partner kami?
                </p>
                <button type="button" id="open-partner-modal"
                    class="flex items-center gap-2 bg-gradient-to-r from-primary via-primary to-secondary py-4 px-10 text-white font-semibold text-xl rounded-lg hover:from-secondary hover:via-primary hover:to-heading hover:scale-105 transition-all duration-300 ease-in-out cursor-pointer active:scale-95">
                    <i class="fas fa-headset"></i>
                    Hubungi Kami
                </button>
            </div>
        </div>
    </section>
    {{-- Partner Section End --}}

    <div id="partner-modal" class="fixed inset-0 z-[99999] hidden items-center justify-center p-4">
        <div class="close-partner-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <div class="bg-white max-w-lg w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
            <div
                class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div
                        class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-handshake text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-white mb-2">Mari Berkolaborasi!</h1>
                    <p class="text-white/90 text-base font-lato">Ceritakan ide kerjasama Anda dengan kami</p>
                </div>

                <button
                    class="close-partner-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                <form action="{{ route('user.partnerReq') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf
                    <div class="group">
                        <label for="company_name"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-building"></i>
                            Nama Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <input type="text" id="company_name" name="company_name" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="PT. Nama Perusahaan">
                    </div>

                    <div class="group">
                        <label for="company_email"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-envelope"></i>
                            Email <span class="text-red-400">*</span>
                        </label>
                        <input type="email" id="company_email" name="company_email" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="nama@perusahaan.com">
                    </div>

                    <div class="group">
                        <label for="company_phone_number"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-mobile-screen"></i>
                            Nomor Telepon <span class="text-red-400">*</span>
                        </label>
                        <input type="tel" id="company_phone_number" name="company_phone_number" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="+62 123-3456-7890">
                    </div>

                    <div class="group">
                        <label for="company_category"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-industry"></i>
                            Jenis Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <select name="company_category" id="company_category"
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white cursor-pointer">
                            <option value="-" disabled selected>Pilih Kategori Perusahaan Anda</option>
                            @foreach ($partnerTypes as $type)
                                <option value="{{ $type->value }}">{{ $type->value }}</option>
                            @endforeach
                            <option value="other_category_company" disabled selected>Pilih Kategori Perusahaan Anda
                            </option>
                        </select>

                        <input type="text" id="other_category_company" name="other_category_company"
                            class="hidden mt-4 w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="Ceritakan jenis bisnis Anda...">
                    </div>

                    <div class="group">
                        <label for="company_description"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-building-circle-check"></i>
                            Penjelasan Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <textarea name="company_description" id="company_description" rows="4" required maxlength="400"
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent focus:outline-none transition-all duration-200 hover:bg-white resize-none"
                            placeholder="Perusahaan kami bergerak di bidang... dengan fokus utama pada..."></textarea>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-xs text-slate-500">Ceritakan tentang Perusahaan Anda</p>
                            <p class="text-xs font-medium text-slate-600" id="charCount"></p>
                        </div>
                    </div>

                    <div class="group">
                        <label for="company_link"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-globe"></i>
                            Website / Media Sosial <span class="text-slate-400 text-xs">(Opsional)</span>
                        </label>
                        <input type="url" id="company_link" name="company_link" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="www.perusahaan.com atau www.instagram.com/perusahaan">
                    </div>

                    <div class="group">
                        <label for="file_attachments"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-paperclip"></i>
                            Lampiran <span class="text-slate-400 text-xs">(Opsional)</span>
                        </label>
                        <input type="file" name="file_attachments" id="file_attachments" class="hidden"
                            accept="file/.pdf">
                        <label for="file_attachments"
                            class="p-6 flex flex-col items-center justify-center text-center border border-text border-dashed rounded-lg cursor-pointer hover:bg-text/5 transition-colors duration-100 ease-in-out">
                            <div class="mb-4">
                                <i class="fas fa-cloud-arrow-up text-2xl text-darkChoco"></i>
                            </div>
                            <div>
                                <h1 class="text-base font-medium text-darkChoco">
                                    Choose a file or drag & drop it here
                                </h1>
                                <p class="text-text text-sm font-medium font-lato">
                                    PDF format, max. 5MB
                                </p>
                            </div>
                        </label>
                        <div class="bg-text/10 p-4 rounded-lg flex justify-between mt-2">
                            <div class="flex items-center gap-3">
                                <div>
                                    <i class="fas fa-file-pdf text-4xl text-darkChoco"></i>
                                </div>
                                <div>
                                    <h1 class="text-base text-darkChoco font-semibold">title.pdf</h1>
                                    <div class="flex items-center gap-2 text-xs text-text">
                                        <span>60KB of 120KB</span>
                                        <span>•</span>
                                        <span>
                                            <i class="fa-solid fa-spinner text-blue-400"></i>
                                            Uploading...
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="">
                                    <i class="fa-solid fa-circle-xmark text-lg text-darkChoco"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="flex items-center w-full gap-2 bg-gradient-to-r from-primary via-primary to-secondary py-4 px-10 text-white font-semibold text-xl rounded-lg hover:from-secondary hover:via-primary hover:to-heading hover:scale-105 transition-all duration-300 ease-in-out cursor-pointer active:scale-95">
                            <i class="fas fa-rocket"></i>
                            Kirim Permohonan Kerjasama
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Contact & Maps Section Start --}}
    <section id="contact" class="pt-32 pb-32 px-12 bg-section">
        <div id="container" class="container max-w-full">
            <div class="bg-accent rounded-2xl p-6 mb-6">
                <div class="flex flex-wrap md:flex-nowrap gap-10" id="formKontak">
                    <div class="w-full lg:w-1/2">
                        <h1 class="text-heading text-2xl font-bold">Konsultasi Gratis</h1>
                        <form action="{{ route('index.store') }}" method="POST" class="space-y-4 py-4">
                            @csrf
                            <div class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="full_name"
                                            class="block mb-2 font-medium text-base text-heading">Nama
                                            Lengkap</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                                <i class="fas fa-user text-base text-text"></i>
                                            </div>
                                            <input type="text" name="full_name" id="full_name"
                                                placeholder="Masukkan nama lengkap"
                                                class="w-full bg-white pl-12 py-4 pr-4 text-base text-darkChoco rounded-lg focus:outline-none">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="phone_number"
                                            class="block mb-2 font-medium text-base text-heading">Nomor
                                            Telepon</label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                                <i class="fas fa-phone text-base text-text"></i>
                                            </div>
                                            <input type="tel" name="phone_number" id="phone_number"
                                                placeholder="Masukkan nomor telepon"
                                                class="w-full bg-white pl-12 py-4 pr-4 text-base text-darkChoco rounded-lg focus:outline-none">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 font-medium text-base text-heading">Email</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-envelope text-base text-text"></i>
                                        </div>
                                        <input type="email" name="email" id="email"
                                            placeholder="Masukkan email"
                                            class="w-full bg-white pl-12 py-4 pr-4 text-base text-darkChoco rounded-lg focus:outline-none">
                                    </div>
                                </div>
                                <div>
                                    <label for="message"
                                        class="block mb-2 font-medium text-base text-heading">Email</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 top-4 pl-4 pointer-events-none">
                                            <i class="fas fa-message text-base text-text"></i>
                                        </div>
                                        <textarea name="message" id="message" rows="4" placeholder="Pesan Anda"
                                            class="w-full bg-white pl-12 py-4 pr-4 text-base text-darkChoco rounded-lg focus:outline-none"></textarea>
                                    </div>
                                </div>
                                <div class="flex">
                                    <button type="submit"
                                        class="flex flex-1 items-center justify-center py-3 px-6 gap-2 text-white text-base font-semibold bg-gradient-to-br from-primary to-secondary hover:from-secondary hover:to-primary rounded-lg cursor-pointer">
                                        <i class="fas fa-paper-plane"></i>
                                        Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-1/2">
                        <h1 class="font-bold text-2xl text-heading">Informasi Kontak</h1>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
                            <div class="flex flex-col items-center justify-center p-4 bg-white rounded-lg gap-2.5">
                                <div
                                    class="inline-flex w-12 h-12 justify-center items-center text-white bg-gradient-to-br from-primary to-secondary rounded-sm">
                                    <i class="fas fa-location-dot text-xl"></i>
                                </div>
                                <h1 class="font-semibold text-primary text-xl">Telepon</h1>
                                <p class="text-text text-base font-lato text-center">
                                    Komplek Ruko Imperium Park Blok C No. 6, Jalan Mayor Oking, Kec. Cibinong,
                                    Kab.
                                    Bogor.
                                </p>
                            </div>
                            <div class="flex flex-col items-center justify-center p-3 bg-white rounded-lg gap-2.5">
                                <div
                                    class="inline-flex w-12 h-12 justify-center items-center text-white bg-gradient-to-br from-primary to-secondary rounded-sm">
                                    <i class="fas fa-phone text-xl"></i>
                                </div>
                                <h1 class="font-semibold text-primary text-xl">Alamat Kantor</h1>
                                <p class="text-text text-base font-lato text-center flex flex-col gap-1">
                                    <span>
                                        <strong class="font-bold">Mobile:</strong> 0812 1029 4688
                                    </span>
                                    <span>
                                        <strong class="font-bold">Kantor:</strong> 021 83731722
                                    </span>
                                </p>
                            </div>
                            <div class="flex flex-col items-center justify-center p-4 bg-white rounded-lg gap-2.5">
                                <div
                                    class="inline-flex w-12 h-12 justify-center items-center text-white bg-gradient-to-br from-primary to-secondary rounded-sm">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <h1 class="font-semibold text-primary text-xl">Email</h1>
                                <p class="text-text text-base font-lato text-center">
                                    ciptamudasolusi@gmail.com
                                </p>
                            </div>
                            <div class="flex flex-col items-center justify-center p-4 bg-white rounded-lg gap-2.5">
                                <div
                                    class="inline-flex w-12 h-12 justify-center items-center text-white bg-gradient-to-br from-primary to-secondary rounded-sm">
                                    <i class="fas fa-clock text-xl"></i>
                                </div>
                                <h1 class="font-semibold text-primary text-xl">Jam Operasional</h1>
                                <p class="text-text text-base font-lato text-center">
                                    Senin - Jumat: 09.00 - 17.00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.0444291674!2d-118.74139030403776!3d34.020608403183566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Amerika%20Serikat!5e0!3m2!1sid!2sid!4v1756612201402!5m2!1sid!2sid"
                        class="rounded-lg w-full h-96" loading="lazy"></iframe>
                    <div class="flex justify-center mt-4">
                        <a href="" target="_blank"
                            class="py-4 bg-gradient-to-r from-primary to-secondary px-8 text-lg font-semibold text-white rounded-lg flex items-center justify-center gap-2 transition-transform duration-300 ease-linear hover:scale-105 active:scale-95">
                            <i class="fas fa-map-location-dot"></i>
                            Lihat Petunjuk Arah
                        </a>
                    </div>
                </div>
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
                            <a href="{{ route('user.jobs.index') }}"
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
                                Contact
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
                <p class="text-center text-text font-lato font-semibold text-base">&copy; {{ date('Y') }} Cipta
                    Muda Solusi. All
                    Right Reserved.</p>
            </div>
        </div>
    </footer>
    {{-- Footer Section End --}}
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 2000,
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Gagal!',
            text: '{{ session('error') }}',
            showConfirmButton: true,
        });
    </script>
@endif

<script src="{{ asset('js/script.js') }}"></script>


</html>
