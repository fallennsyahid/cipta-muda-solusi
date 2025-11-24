<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Solusi IT, Marketing & Event Organizer Terpercaya untuk Kemajuan Bisnis Anda">
    <title>Cipta Muda Solusi</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="shortcut icon" href="{{ asset('landing/icon-cms.png') }}" type="image/png">

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

    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

</head>

<body>
    {{-- Header Start --}}
    <x-header>
        <div class="flex items-center justify-center px-4 py-6">
            <button id="hamburger" name="hamburger" type="button" aria-label="Hamburger Menu"
                class="block absolute right-4 lg:hidden cursor-pointer">
                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>

            <nav class="navbar-effect shadow-2 px-6 py-4 rounded-full hidden lg:block">
                <ul class="flex items-center justify-center gap-8" id="#nav-active">
                    <li class="group">
                        <a href="#" class="text-base font-medium text-black2 group-hover:text-primary">Beranda
                        </a>
                    </li>
                    <li class="group"> <a href="#about"
                            class="text-base font-medium text-black2 group-hover:text-primary"> Tentang </a> </li>
                    <li class="group"> <a href="#service"
                            class="text-base font-medium text-black2 group-hover:text-primary"> Layanan </a> </li>
                    <li class="group"> <a href="#portfolio"
                            class="text-base font-medium text-black2 group-hover:text-primary"> Portfolio </a> </li>
                    <li class="group"> <a href="#team"
                            class="text-base font-medium text-black2 group-hover:text-primary"> Team </a> </li>
                    <li class="group"> <a href="#partner"
                            class="text-base font-medium text-black2 group-hover:text-primary"> Partner </a> </li>
                    <li class="group"> <a href="#contact"
                            class="text-base font-medium text-black2 group-hover:text-primary"> Contact </a> </li>
                    <li class="group"> <a href="{{ route('user.jobs.index') }}"
                            class="text-base font-medium text-black2 group-hover:text-primary"> Karir </a> </li>
                    <li class="group"> <a href="{{ route('user.faqs.index') }}"
                            class="text-base font-medium text-black2 group-hover:text-primary"> Faq </a> </li>
                    <li class="group"> <a href="{{ route('user.blogs.index') }}"
                            class="text-base font-medium text-black2 group-hover:text-primary"> Blog </a> </li>
                </ul>
            </nav>
        </div>

        <nav id="nav-menu"
            class="fixed top-0 right-0 h-full bg-gradient-to-b from-white via-gray-50 to-gray-100 w-72 shadow-2xl transform translate-x-full transition-transform duration-500 ease-in-out z-50 lg:hidden rounded-l-2xl">

            <div class="flex justify-end p-6">
                <button type="button" aria-label="Mobile Close Sidebar" id="mobile-close-sidebar"
                    name="mobile-close-sidebar"
                    class="close-navbar flex items-center justify-center w-10 h-10 rounded-full bg-gray-200 hover:bg-primary hover:text-white duration-300 transition-all ease-in-out cursor-pointer shadow-md">
                    <i
                        class="fas fa-times text-lg transform transition-transform duration-500 group-hover:rotate-90"></i>
                </button>
            </div>

            <ul class="flex flex-col gap-6 px-8 py-6 text-lg font-medium">
                <li>
                    <a href="#"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-home group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="#about"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-user group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Tentang</span>
                    </a>
                </li>
                <li>
                    <a href="#service"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-cogs group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Layanan</span>
                    </a>
                </li>
                <li>
                    <a href="#portfolio"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-briefcase group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="#team"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-users group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Team</span>
                    </a>
                </li>
                <li>
                    <a href="#partner"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-handshake group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Partner</span>
                    </a>
                </li>
                <li>
                    <a href="#contact"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-envelope group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.jobs.index') }}"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-briefcase group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Karir</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.faqs.index') }}"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-question-circle group-hover:scale-110 transition-transform duration-300"></i>
                        <span>FAQ</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.blogs.index') }}"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-blog group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Blog</span>
                    </a>
                </li>
            </ul>
        </nav>
    </x-header>
    {{-- Header Start --}}

    {{-- Hero Section Start --}}
    <section id="hero-section" class="pt-36 pb-24 lg:pb-0 bg-section overflow-x-hidden">
        <div class="bg-[#CFE1F9] w-55 h-55 rounded-full absolute left-3/20 -top-16 blur-xl"></div>
        <div class="bg-[#CFE1F9] w-55 h-55 rounded-full absolute -left-10 bottom-44 blur-xl"></div>
        <div class="bg-[#CFE1F9] w-55 h-55 rounded-l-full absolute right-0 bottom-7 blur-xl"></div>
        <div class="bg-[#CFE1F9] w-25 h-25 absolute right-18 rotate-45 animate-pulse"></div>

        <div class="container max-w-full relative z-20">
            <div class="flex flex-wrap">
                <div class="w-full self-center mt-12 lg:mt-0 px-8 lg:w-1/2">
                    <h1 class="text-base md:text-lg lg:text-xl font-semibold text-primary mb-3 text-center">
                        Young, Brave, Innovative, Strong
                    </h1>
                    <h2 class="font-bold text-3xl md:text-4xl lg:text-5xl text-heading text-center mb-5">
                        PT. Cipta Muda Solusi
                    </h2>
                    <p
                        class="text-secondary/90 text-base md:text-lg lg:text-xl font-lato font-medium mb-9 text-center max-w-md mx-auto">
                        Solusi IT, Marketing & Event Organizer Terpercaya untuk Kemajuan Bisnis Anda
                    </p>

                    <div class="flex justify-center">
                        <a href="#"
                            class="bg-accent flex items-center text-heading font-semibold text-sm sm:text-base md:text-lg py-2 px-6 sm:py-3 sm:px-8 md:py-4 md:px-12 
                            h-10 sm:h-12 md:h-14 rounded-tr-[50px] rounded-bl-[50px] rounded-tl-[20px] rounded-br-[20px] hover:bg-accent/80 transition-all duration-200 ease-in-out">
                            <i class="fas fa-phone mr-2"></i>
                            Konsultasi Gratis
                        </a>
                    </div>

                </div>

                <div class="w-full self-end px-4 lg:w-1/2 overflow-hidden hidden lg:block">
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
    <section id="about" class="py-28 bg-section overflow-x-hidden">
        <div class="container max-w-full">
            <div class="mb-5 relative z-10 md:z-0">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl text-heading text-center mb-5">
                    Tentang Kami</h1>
                <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
            </div>

            <p
                class="font-lato text-text text-lg md:text-xl lg:text-2xl text-center max-w-3xl mx-auto px-4 lg:px-0 relative z-10 md:z-0">
                Kami berkomitmen membangun kepercayaan dan kerjasama dengan mitra strategis dalam menghadapi era digital
                4.0.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-4 md:mx-12 gap-6 mt-12 mb-14">
                <div class="relative w-full max-w-sm mx-auto">
                    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
                    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
                        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
                            <i class="fas fa-users text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Young</h1>
                    </div>
                </div>
                <div class="relative w-full max-w-sm mx-auto">
                    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
                    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
                        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
                            <i class="fas fa-shield-halved text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Strong</h1>
                    </div>
                </div>
                <div class="relative w-full max-w-sm mx-auto">
                    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
                    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
                        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
                            <i class="fas fa-lightbulb text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Innovative</h1>
                    </div>
                </div>
                <div class="relative w-full max-w-sm mx-auto">
                    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
                    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
                        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
                            <i class="fas fa-hand-back-fist text-2xl text-white"></i>
                        </div>
                        <h1 class="font-semibold text-2xl text-heading text-center">Strong</h1>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mx-12">
                <div class="mb-12 lg:mb-0">
                    <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl text-heading mb-3 text-center lg:text-left">
                        Perjalanan Kami</h1>
                    <p class="max-w-2xl font-lato text-text text-base md:text-lg mb-9 text-center lg:text-left">
                        Dari startup kecil hingga menjadi partner teknologi terpercaya, kami terus berinovasi dan
                        berkembang untuk memberikan nilai terbaik bagi klien.
                    </p>
                    <div class="flex flex-col gap-6 h-96 overflow-y-auto custom-scrollbar">
                        <!-- 2010 -->
                        <div class="flex items-center gap-3">
                            <div
                                class=" w-16 h-16 bg-secondary text-white text-xl font-bold flex justify-center items-center rounded-full">
                                2010
                            </div>
                            <div>
                                <h1 class="text-heading font-semibold text-lg lg:text-xl">Awal Pertemanan</h1>
                                <p class="font-lato text-text max-w-sm">
                                    Aditya (Founder) dan Randy (Co-Founder) menjalin pertemanan sejak tahun 2010.
                                </p>
                            </div>
                        </div>

                        <!-- 2015 -->
                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 md:w-14 md:h-14 lg:w-16 lg:h-16 bg-secondary text-white text-lg lg:text-xl  font-bold flex justify-center items-center rounded-full">
                                2015
                            </div>
                            <div>
                                <h1 class="text-heading font-semibold text-lg lg:text-xl">Berdirinya CV. Mitra Abadi
                                </h1>
                                <p class="font-lato text-text max-w-sm">
                                    Mendirikan usaha di bidang IT & Event Organizer dengan nama CV. Mitra Abadi.
                                </p>
                            </div>
                        </div>

                        <!-- 2019 -->
                        <div class="flex items-center gap-3">
                            <div
                                class="w-16 h-16 bg-secondary text-white text-xl font-bold flex justify-center items-center rounded-full">
                                2019
                            </div>
                            <div>
                                <h1 class="text-heading font-semibold text-lg lg:text-xl">Proyek Besar</h1>
                                <p class="font-lato text-text max-w-sm">
                                    Mendapatkan proyek dari Kementerian Koperasi & UKM serta PT. Telkom Indonesia, Tbk.
                                </p>
                            </div>
                        </div>

                        <!-- 2020 -->
                        <div class="flex items-center gap-3">
                            <div
                                class="w-16 h-16 bg-secondary text-white text-xl font-bold flex justify-center items-center rounded-full">
                                2020
                            </div>
                            <div>
                                <h1 class="text-heading font-semibold text-lg lg:text-xl">Menjadi PT. Cipta Muda Solusi
                                </h1>
                                <p class="font-lato text-text max-w-sm">
                                    Resmi berganti nama menjadi PT. Cipta Muda Solusi dengan legalitas lengkap.
                                </p>
                            </div>
                        </div>

                        <!-- 2020 - Sekarang -->
                        <div class="flex items-center gap-3">
                            <div
                                class="w-16 h-16 bg-secondary text-white text-xl font-bold flex justify-center items-center rounded-full">
                                Now
                            </div>
                            <div>
                                <h1 class="text-heading font-semibold text-lg lg:text-xl">Visi & Perkembangan</h1>
                                <p class="font-lato text-text max-w-sm">
                                    Terus berkembang menjadi perusahaan mitra andal di bidang IT Solutions, Software
                                    Development, Marketing,
                                    dan Event Organizer dengan visi: “Menjadi perusahaan Jasa Solusi IT, Marketing, dan
                                    Event Organizer terpercaya di Indonesia.”
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="my-auto">
                    <div class="relative w-full max-w-4xl mx-auto">
                        <div
                            class="absolute inset-0 bg-accent rounded-xl rotate-3 z-0 p-6 md:p-10 flex justify-center items-center">
                            <div>
                                <h1 class="text-heading font-bold text-4xl mb-4 text-center -rotate-3">
                                    Motto
                                </h1>
                                <div class="flex justify-center items-center mt-6 md:mt-10">
                                    <div
                                        class="relative flex justify-center items-center p-6 md:p-16 border-2 border-text rounded-xl -rotate-3">
                                        <div
                                            class="absolute right-4 md:right-6 -top-6 md:-top-7 text-xl md:text-3xl text-secondary bg-accent p-2 md:p-3 rounded-full">
                                            <i class="fas fa-quote-right"></i>
                                        </div>
                                        <p
                                            class="font-medium text-darkChoco text-2xl md:text-xl italic text-center font-lato">
                                            "Kepuasaan Perusahaan Mitra adalah yang Utama"
                                        </p>
                                        <div
                                            class="absolute left-4 md:left-6 -bottom-6 md:-bottom-7 text-xl md:text-3xl text-secondary bg-accent p-2 md:p-3 rounded-full">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-end mt-4">
                                    <button type="button" id="see-visi-misi"
                                        class="flex items-center text-primary text-lg font-semibold gap-2 cursor-pointer hover:text-primary/80">
                                        Visi & Misi
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="visi-misi-card"
                            class="relative z-10 bg-white border-2 border-[#d2d2d2] p-6 md:p-10 rounded-xl flex flex-col origin-top-right transition-transform duration-1000 ease-in-out will-change-transform">
                            <h1 class="text-heading font-semibold text-xl md:text-2xl text-center mb-2.5">Visi & Misi
                            </h1>

                            <h2 class="flex items-center text-heading text-lg md:text-xl font-semibold mb-2">
                                <i class="fas fa-eye mr-2"></i>
                                Visi
                            </h2>
                            <p class="text-text font-lato text-sm md:text-base mb-5">
                                "Menjadi perusahaan Jasa Solusi IT, Marketing, dan Event Organizer terpercaya di
                                Indonesia”
                            </p>

                            <h3 class="flex items-center text-heading text-lg md:text-xl font-semibold mb-2">
                                <i class="fas fa-bullseye mr-2"></i>
                                Misi
                            </h3>
                            <p class="max-w-xl text-sm md:text-base flex items-center text-text mb-2">
                                <i class="fas fa-circle-check mr-2 text-secondary"></i>
                                Memberikan jasa pelayanan terbaik secara konsisten kepada semua perusahaan mitra
                            </p>
                            <p class="max-w-xl text-sm md:text-base flex items-center text-text">
                                <i class="fas fa-circle-check mr-2 text-secondary"></i>
                                Memberikan jasa pelayanan terbaik secara konsisten kepada semua perusahaan mitra
                            </p>

                            <div class="flex justify-end mt-2">
                                <button type="button" id="see-motto"
                                    class="flex items-center text-primary text-lg font-semibold gap-2 cursor-pointer hover:text-primary/80">
                                    Motto
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About Section End --}}

    {{-- Layanan Section Start --}}
    <section id="service" class="py-28 bg-section">
        <div class="container max-w-full">
            <div class="mb-5">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl text-heading text-center mb-5">Layanan Unggulan
                    Kami</h1>
                <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
            </div>

            <p class="max-w-4xl text-center mx-auto font-lato text-text text-lg md:text-xl lg:text-2xl">
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
    <section id="portfolio" class="py-28 bg-white">
        <div class="container max-w-full relative">
            <div class="mb-5">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl text-heading text-center mb-3 md:mb-5">Portfolio
                    Perusahaan</h1>
                <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
            </div>

            <p class="text-lg md:text-xl lg:text-2xl text-text mb-12 text-center max-w-3xl mx-auto">
                Beberapa pengalaman pekerjaan yang sudah kami jalankan dengan baik, benar, dan cepat.
            </p>

            <div class="mx-12 flex flex-col gap-y-12">
                @foreach ($portfolios as $index => $portfolio)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 place-items-center">
                        @if ($index % 2 == 0)
                            <div class="block md:hidden">
                                <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"
                                    width="600" height="300" class="rounded-md">
                            </div>
                            <div class="flex flex-col items-start gap-3">
                                <span
                                    class="flex items-center text-secondary font-lato text-lg md:text-xl font-semibold">
                                    <i class="fas fa-gears rotate-90 text-text mr-2"></i>
                                    {{ $portfolio->project_name }}
                                </span>
                                <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl text-heading">
                                    {{ $portfolio->title }}</h1>
                                <p class="text-text text-lg md:text-xl">
                                    {{ $portfolio->description }}
                                </p>
                                <div
                                    class="bg-secondary/25 text-secondary font-semibold text-base md:text-lg py-2 px-6 rounded-tl-lg rounded-br-lg rounded-bl-3xl rounded-tr-3xl uppercase">
                                    {{ \Carbon\Carbon::parse($portfolio->event_time)->locale('id')->translatedFormat('F Y') }}
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"
                                    width="600" height="300" class="rounded-md">
                            </div>
                        @else
                            <div class="block">
                                <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"
                                    width="600" height="300" class="rounded-md">
                            </div>
                            <div class="flex flex-col items-start gap-3">
                                <span
                                    class="flex items-center text-secondary font-lato text-lg md:text-xl font-semibold">
                                    <i class="fas fa-gears rotate-90 text-text mr-2"></i>
                                    {{ $portfolio->project_name }}
                                </span>
                                <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl text-heading">
                                    {{ $portfolio->title }}</h1>
                                <p class="text-text text-lg md:text-xl">
                                    {{ $portfolio->description }}
                                </p>
                                <div
                                    class="bg-secondary/25 text-secondary font-semibold text-base md:text-lg py-2 px-6 rounded-tl-lg rounded-br-lg rounded-bl-3xl rounded-tr-3xl uppercase">
                                    {{ \Carbon\Carbon::parse($portfolio->event_time)->locale('id')->translatedFormat('F Y') }}
                                </div>
                            </div>
                            {{-- <div class="md:hidden block">
                                <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"
                                    width="600" height="300" class="rounded-md">
                            </div> --}}
                        @endif
                    </div>
                @endforeach

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
        class="fixed inset-0 z-[99999] bg-black/30 backdrop-blur-xl overflow-y-auto transform translate-x-full transition-transform duration-700 ease-in-out">

        <!-- Close Button -->
        <div class="ml-6 mt-6">
            <a href="#" id="close-overlay"
                class="flex items-center justify-center w-12 h-12 bg-white/90 shadow-md rounded-full hover:bg-white transition duration-200 group">
                <i class="fas fa-times text-2xl text-darkChoco group-hover:rotate-90 transition-transform"></i>
            </a>
        </div>

        <!-- Content -->
        <div class="min-h-screen flex flex-col items-center py-12 px-6 lg:px-16">

            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl lg:text-5xl font-extrabold text-white mb-3">
                    Portfolio <span class="text-secondary">Perusahaan</span>
                </h1>
                <div class="w-24 h-1 bg-secondary mx-auto rounded-full"></div>
                <p class="text-white/80 mt-4 max-w-2xl mx-auto text-base">
                    Beberapa proyek terbaik yang pernah kami kerjakan dalam bidang Event, IoT, dan Web Development.
                </p>
            </div>

            {{-- <div class="flex flex-wrap justify-center gap-3 mb-10">
                <button type="button"
                    class="px-4 py-2 text-white rounded-full bg-secondary font-medium shadow-md hover:scale-105 transition">
                    Semua
                </button>
                <button type="button"
                    class="px-4 py-2 border border-darkChoco rounded-full text-darkChoco font-medium hover:bg-darkChoco hover:text-white transition">
                    Event
                </button>
                <button type="button"
                    class="px-4 py-2 border border-darkChoco rounded-full text-darkChoco font-medium hover:bg-darkChoco hover:text-white transition">
                    IoT
                </button>
                <button type="button"
                    class="px-4 py-2 border border-darkChoco rounded-full text-darkChoco font-medium hover:bg-darkChoco hover:text-white transition">
                    Web Development
                </button>
            </div> --}}

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 lg:gap-10 w-full">
                @foreach ($allPortfolios as $portfolio)
                    <div
                        class="bg-white rounded-2xl shadow-md hover:shadow-xl transition hover:-translate-y-2 duration-300">
                        <div class="relative aspect-video overflow-hidden rounded-t-2xl group">
                            <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"
                                class="w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-110 transition duration-500" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-500">
                                <i class="fas fa-search text-white text-3xl"></i>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col gap-3">
                            <h1 class="text-secondary text-sm uppercase tracking-wide font-semibold flex items-center">
                                <i class="fas fa-layer-group mr-2 text-text"></i>
                                {{ $portfolio->category }}
                            </h1>
                            <h2 class="text-heading font-bold text-xl line-clamp-2">{{ $portfolio->title }}</h2>
                            <p class="text-sm text-text">
                                {{ $portfolio->description }}
                            </p>
                            <div class="flex flex-wrap items-center gap-2">
                                @foreach ($portfolio->tools as $tool)
                                    <span
                                        class="bg-secondary/20 text-secondary px-3 py-1 rounded-full text-xs font-medium">
                                        {{ $tool }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Detail Portfolio Overlay End --}}

    {{-- Section Team Start --}}
    <section id="team" class="py-28 bg-white">
        <div class="container max-w-full relative z-10">
            <div class="mb-5">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl text-heading text-center mb-3 md:mb-5">Tim Kami
                </h1>
                <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
            </div>

            <p class="font-lato text-text text-lg md:text-xl lg:text-2xl text-center max-w-5xl mx-auto">
                Berdiri bersama dalam mewujudkan industri kreatif Indonesia didalam segala bidang terutama pada sektor
                Teknologi Informasi, Pemasaran (Marketing), dan bidang industri kreatif (MICE).
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mx-12 gap-x-6 gap-y-10 mt-6">
                <div class="bg-white shadow-4 p-6 rounded-xl border border-[#c8c8c8] flex flex-col items-center">
                    <div class="relative mb-4">
                        <img src="{{ asset('landing/webp/teams/randy-khairu.webp') }}" alt=""
                            class="rounded-full h-28 w-28 object-contain">
                    </div>
                    <h1 class="text-base text-heading font-bold text-center mb-1">Randy Khairu Basyar</h1>
                    <h2 class="text-sm font-semibold text-heading text-center mb-3">Komisaris Utama</h2>
                    <p class="text-text text-sm italic text-center mb-6">
                        “Dengan menghadapi dunia digital 4.0, kami berkomitmen untuk terus berkembang dan menjadi poros
                        teknologi di Indonesia.”
                    </p>

                    <div class="flex items-center gap-6">
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
                    class="bg-white shadow-4 p-6 rounded-xl border border-[#c8c8c8] flex flex-col items-center translate-y-0 lg:translate-y-6">
                    <div class="relative mb-4">
                        <img src="{{ asset('landing/webp/teams/aditya_bayu.webp') }}" alt=""
                            class="rounded-full h-28 w-28 object-contain">
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
                            class="rounded-full h-28 w-28 object-contain">
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
                            <i class="fab fa-linkedin text-2xl text-heading group-hover:text-white"></i>
                        </a>
                        <a href="#" target="_blank"
                            class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center group hover:bg-primary transition-colors duration-300 ease-in-out">
                            <i class="fab fa-instagram text-2xl text-heading group-hover:text-white"></i>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white shadow-4 p-6 rounded-xl border border-[#c8c8c8] flex flex-col items-center translate-y-0 lg:translate-y-6">
                    <div class="relative mb-4">
                        <img src="{{ asset('landing/webp/teams/nanda.webp') }}" alt=""
                            class="rounded-full h-28 w-28 object-contain">
                    </div>
                    <h1 class="text-base text-heading font-bold text-center mb-1">Nanda
                        Ikhsanabdullah Utama
                    </h1>
                    <h2 class="text-sm font-semibold text-heading text-center mb-3">Event Director</h2>
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
                        class="flex items-center justify-center p-10 text-center text-base md:text-lg lg:text-xl font-bold text-white w-32 h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 bg-primary translate-x-12 lg:translate-x-14 relative z-1 [clip-path:polygon(25%_6.7%,75%_6.7%,100%_50%,75%_93.3%,25%_93.3%,0%_50%)]">
                        "Muda Bersolusi"
                    </div>
                    <div
                        class="flex items-center justify-center p-10 text-center text-base md:text-lg lg:text-xl font-bold text-white w-56 h-56 md:w-64 md:h-64 lg:w-72 lg:h-72 bg-secondary/80 [clip-path:polygon(25%_6.7%,75%_6.7%,100%_50%,75%_93.3%,25%_93.3%,0%_50%)]">
                        “Kepuasaan Perusahaan Mitra adalah yang Utama”
                    </div>
                    <div
                        class="flex items-center justify-center p-10 text-center text-base md:text-lg lg:text-xl font-bold text-white w-32 h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 bg-primary -translate-x-12 lg:-translate-x-12 relative -z-1 [clip-path:polygon(25%_6.7%,75%_6.7%,100%_50%,75%_93.3%,25%_93.3%,0%_50%)]">
                        "Semua Pasti ada Solusi"
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section Team End --}}

    {{-- Partner Section Start --}}
    <section id="partner" class="py-28 bg-section">
        <div class="container max-w-full">
            <div class="mb-5">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl text-heading text-center mb-3 md:mb-5">Partner
                    Terpercaya
                </h1>
                <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
            </div>

            <p class="font-lato text-text text-lg md:text-xl lg:text-2xl text-center max-w-5xl mx-auto">
                Sebuah kebanggaan dapat bekerja sama dengan perusahaan-perusahaan terkemuka untuk memberikan solusi
                terbaik.
            </p>

            <div class="container min-w-full px-4 my-6">
                <div class="swiper">
                    <div class="swiper-wrapper py-6">
                        @foreach ($partners as $partner)
                            <div class="swiper-slide">
                                <a href="{{ $partner->partner_links }}" target="_blank"
                                    class="bg-white p-8 rounded-2xl flex items-center justify-center shadow-3">
                                    <div class="w-32 h-32 flex items-center justify-center">
                                        <img src="{{ Storage::url($partner->image) }}" alt="{{ $partner->name }}"
                                            title="{{ $partner->name }}"
                                            class="max-w-full max-h-full object-contain grayscale hover:grayscale-0 transition-all duration-300 ease-in-out">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Tombol Navigasi -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                    <div class="swiper-pagination !bottom-0 mt-10"></div>
                </div>
            </div>


            <div class="flex flex-col gap-2 items-center justify-center">
                <p class="text-center font-lato text-lg text-text font-medium">
                    Ingin menjadi partner kami?
                </p>
                <button type="button" id="open-partner-modal"
                    class="flex items-center gap-2 text-white font-semibold bg-gradient-to-r from-primary via-primary to-secondary 
                    py-2 px-4 text-sm sm:py-3 sm:px-6 sm:text-base md:py-4 md:px-8 md:text-lg lg:py-4 lg:px-10 lg:text-xl 
                    rounded-lg hover:from-secondary hover:via-primary hover:to-heading hover:scale-105 
                    transition-all duration-300 ease-in-out cursor-pointer active:scale-95">
                    <i class="fas fa-headset text-base sm:text-lg md:text-xl"></i>
                    Hubungi Kami
                </button>
            </div>
        </div>
    </section>
    {{-- Partner Section End --}}

    <div id="partner-modal" class="fixed inset-0 z-[99999] hidden items-center justify-center p-2 sm:p-4">
        <div class="close-partner-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <div
            class="bg-white w-full max-w-[95%] sm:max-w-lg rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
            <!-- Header -->
            <div
                class="bg-gradient-to-r from-heading via-primary to-secondary p-6 sm:p-8 text-center overflow-hidden relative">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div
                        class="w-12 h-12 sm:w-16 sm:h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-handshake text-2xl sm:text-3xl"></i>
                    </div>
                    <h1 class="text-xl sm:text-2xl font-bold text-white mb-2">Mari Berkolaborasi!</h1>
                    <p class="text-white/90 text-sm sm:text-base font-lato">Ceritakan ide kerjasama Anda dengan kami
                    </p>
                </div>

                <button
                    class="close-partner-modal absolute top-3 right-3 sm:top-4 sm:right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                    <i class="fas fa-times text-base sm:text-lg"></i>
                </button>
            </div>

            <!-- Body -->
            <div class="p-4 sm:p-8 max-h-[70vh] sm:max-h-96 overflow-y-auto custom-scrollbar">
                <form action="{{ route('user.partnerReq') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4 sm:space-y-6">
                    @csrf

                    <!-- Nama Perusahaan -->
                    <div class="group">
                        <label for="company_name"
                            class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-building"></i>
                            Nama Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <input type="text" id="company_name" name="company_name"
                            value="{{ old('company_name') }}" required
                            class="w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="PT. Nama Perusahaan">
                    </div>

                    <!-- Email -->
                    <div class="group">
                        <label for="company_email"
                            class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-envelope"></i>
                            Email <span class="text-red-400">*</span>
                        </label>
                        <input type="email" id="company_email" name="company_email"
                            value="{{ old('company_email') }}" required
                            class="w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="nama@perusahaan.com">
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="group">
                        <label for="company_phone_number"
                            class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-mobile-screen"></i>
                            Nomor Telepon <span class="text-red-400">*</span>
                        </label>
                        <input type="tel" id="company_phone_number" name="company_phone_number" required
                            class="w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="+62 123-3456-7890">
                    </div>

                    <!-- Jenis Perusahaan -->
                    <div class="group">
                        <label for="company_category"
                            class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-industry"></i>
                            Jenis Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <select name="company_category" id="company_category"
                            class="w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white cursor-pointer">
                            <option value="-" disabled selected>Pilih Kategori Perusahaan Anda</option>
                            @foreach ($partnerTypes as $partnerType)
                                <option value="{{ $partnerType->id }}">{{ $partnerType->name }}</option>
                            @endforeach
                        </select>

                        <input type="text" id="other_category_company" name="other_category_company"
                            class="hidden mt-4 w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="Ceritakan jenis bisnis Anda...">
                    </div>

                    <!-- Upload -->
                    <div class="upload-group">
                        <label for="file_attachments"
                            class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-paperclip"></i>
                            Logo Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <input type="file" name="file_attachments" id="file_attachments" class="hidden" required
                            accept=".png,.webp,.jpg,.jpeg">
                        <label
                            class="drop-area p-6 flex flex-col items-center justify-center text-center border border-text border-dashed rounded-lg cursor-pointer hover:bg-text/5 transition-colors duration-100 ease-in-out">
                            <div class="mb-4">
                                <i class="fas fa-cloud-arrow-up text-2xl text-darkChoco"></i>
                            </div>
                            <div>
                                <h1 class="text-base font-medium text-darkChoco">
                                    Choose a file or drag & drop it here
                                </h1>
                                <p class="text-text text-sm font-medium font-lato">
                                    JPEG, PNG, JPG format, max. 5MB
                                </p>
                            </div>
                        </label>

                        <!-- preview -->
                        <div class="preview hidden bg-text/10 p-4 mt-2 rounded-lg items-center justify-between">
                            <div class="flex items-center gap-3">
                                <img class="preview-image w-16 h-16 object-cover rounded-lg" alt="Preview">
                                <div>
                                    <h1 class="file-name text-base text-darkChoco font-semibold">title.jpg</h1>
                                    <div class="flex items-center gap-2 text-xs text-text">
                                        <span class="file-size"></span>
                                        <span>•</span>
                                        <span>
                                            <i class="fa-solid fa-circle-check text-green-400"></i>
                                            Completed
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="remove-file">
                                <i class="fa-solid fa-circle-xmark text-lg text-darkChoco"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Link -->
                    <div class="group">
                        <label for="company_link"
                            class="flex items-center gap-2 text-sm sm:text-base font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-globe"></i>
                            Website / Media Sosial <span class="text-red-400">*</span>
                        </label>
                        <input type="url" id="company_link" name="company_link" required
                            class="w-full px-3 py-2 sm:px-4 sm:py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="www.perusahaan.com atau www.instagram.com/perusahaan">
                    </div>

                    <!-- Submit -->
                    <div class="flex justify-center">
                        <button type="submit"
                            class="flex items-center justify-center w-full gap-2 bg-gradient-to-r from-primary via-primary to-secondary py-3 sm:py-4 px-6 sm:px-10 text-white font-semibold text-lg sm:text-xl rounded-lg hover:from-secondary hover:via-primary hover:to-heading hover:scale-105 transition-all duration-300 ease-in-out cursor-pointer active:scale-95">
                            <i class="fas fa-rocket"></i>
                            Kirim Permohonan Kerjasama
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Contact & Maps Section Start --}}
    <section id="contact" class="pt-20 md:pt-32 pb-20 md:pb-32 px-4 sm:px-8 lg:px-12 bg-section">
        <div id="container" class="container max-w-full">
            <div class="bg-accent rounded-2xl p-6 md:p-10 mb-6">
                <div class="flex flex-wrap md:flex-nowrap gap-8 lg:gap-10" id="formKontak">

                    <!-- Form -->
                    <div class="w-full lg:w-1/2">
                        <h1 class="text-heading text-xl md:text-2xl font-bold">Konsultasi Gratis</h1>
                        <form action="{{ route('index.store') }}" method="POST" class="space-y-4 py-4">
                            @csrf
                            <div class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="full_name"
                                            class="block mb-2 font-medium text-sm md:text-base text-heading">
                                            Nama Lengkap
                                        </label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                                <i class="fas fa-user text-sm md:text-base text-text"></i>
                                            </div>
                                            <input type="text" name="full_name" id="full_name"
                                                placeholder="Masukkan nama lengkap"
                                                class="w-full bg-white pl-12 py-3 md:py-4 pr-4 text-sm md:text-base text-darkChoco rounded-lg focus:outline-none">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="phone_number"
                                            class="block mb-2 font-medium text-sm md:text-base text-heading">
                                            Nomor Telepon
                                        </label>
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                                <i class="fas fa-phone text-sm md:text-base text-text"></i>
                                            </div>
                                            <input type="tel" name="phone_number" id="phone_number"
                                                placeholder="Masukkan nomor telepon"
                                                class="w-full bg-white pl-12 py-3 md:py-4 pr-4 text-sm md:text-base text-darkChoco rounded-lg focus:outline-none">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label for="email"
                                        class="block mb-2 font-medium text-sm md:text-base text-heading">
                                        Email
                                    </label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-envelope text-sm md:text-base text-text"></i>
                                        </div>
                                        <input type="email" name="email" id="email"
                                            placeholder="Masukkan email"
                                            class="w-full bg-white pl-12 py-3 md:py-4 pr-4 text-sm md:text-base text-darkChoco rounded-lg focus:outline-none">
                                    </div>
                                </div>

                                <div>
                                    <label for="message"
                                        class="block mb-2 font-medium text-sm md:text-base text-heading">
                                        Pesan
                                    </label>
                                    <div class="relative">
                                        <div class="absolute top-3 left-0 pl-4 pointer-events-none">
                                            <i class="fas fa-message text-sm md:text-base text-text"></i>
                                        </div>
                                        <textarea name="message" id="message" rows="4" placeholder="Pesan Anda"
                                            class="w-full bg-white pl-12 py-3 md:py-4 pr-4 text-sm md:text-base text-darkChoco rounded-lg focus:outline-none"></textarea>
                                    </div>
                                </div>

                                <div class="flex">
                                    <button type="submit"
                                        class="flex flex-1 items-center justify-center py-3 md:py-4 px-6 gap-2 text-white text-sm md:text-base font-semibold bg-gradient-to-br from-primary to-secondary hover:from-secondary hover:to-primary rounded-lg cursor-pointer">
                                        <i class="fas fa-paper-plane"></i>
                                        Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="w-full lg:w-1/2">
                        <h1 class="font-bold text-xl md:text-2xl text-heading">Informasi Kontak</h1>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 my-4">
                            <div class="flex flex-col items-center text-center p-4 bg-white rounded-lg gap-2.5">
                                <div
                                    class="inline-flex w-10 h-10 md:w-12 md:h-12 justify-center items-center text-white bg-gradient-to-br from-primary to-secondary rounded-sm">
                                    <i class="fas fa-location-dot text-base md:text-xl"></i>
                                </div>
                                <h1 class="font-semibold text-primary text-lg md:text-xl">Alamat</h1>
                                <p class="text-text text-sm md:text-base font-lato">
                                    Komplek Ruko Imperium Park Blok C No. 6, Jalan Mayor Oking, Cibinong, Bogor.
                                </p>
                            </div>

                            <div class="flex flex-col items-center text-center p-4 bg-white rounded-lg gap-2.5">
                                <div
                                    class="inline-flex w-10 h-10 md:w-12 md:h-12 justify-center items-center text-white bg-gradient-to-br from-primary to-secondary rounded-sm">
                                    <i class="fas fa-phone text-base md:text-xl"></i>
                                </div>
                                <h1 class="font-semibold text-primary text-lg md:text-xl">Telepon</h1>
                                <p class="text-text text-sm md:text-base font-lato flex flex-col gap-1">
                                    <span><strong>Mobile:</strong> 0812 1029 4688</span>
                                    <span><strong>Kantor:</strong> 021 83731722</span>
                                </p>
                            </div>

                            <div class="flex flex-col items-center text-center p-4 bg-white rounded-lg gap-2.5">
                                <div
                                    class="inline-flex w-10 h-10 md:w-12 md:h-12 justify-center items-center text-white bg-gradient-to-br from-primary to-secondary rounded-sm">
                                    <i class="fas fa-envelope text-base md:text-xl"></i>
                                </div>
                                <h1 class="font-semibold text-primary text-lg md:text-xl">Email</h1>
                                <p class="text-text text-sm md:text-base font-lato">
                                    ciptamudasolusi@gmail.com
                                </p>
                            </div>

                            <div class="flex flex-col items-center text-center p-4 bg-white rounded-lg gap-2.5">
                                <div
                                    class="inline-flex w-10 h-10 md:w-12 md:h-12 justify-center items-center text-white bg-gradient-to-br from-primary to-secondary rounded-sm">
                                    <i class="fas fa-clock text-base md:text-xl"></i>
                                </div>
                                <h1 class="font-semibold text-primary text-lg md:text-xl">Jam Operasional</h1>
                                <p class="text-text text-sm md:text-base font-lato">
                                    Senin - Jumat: 09.00 - 17.00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="mt-6 md:mt-10">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.523771473663!2d106.86139437457845!3d-6.474206763300091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c152c12a0d77%3A0xefa0990a4a4506b!2sPT%20Cipta%20Muda%20Solusi!5e1!3m2!1sid!2sid!4v1758164619067!5m2!1sid!2sid"
                        class="rounded-lg w-full h-72 md:h-96" loading="lazy"></iframe>
                    <div class="flex justify-center mt-4">
                        <a href="https://maps.app.goo.gl/12ZW6SjfrobMqscM9" target="_blank"
                            class="py-3 md:py-4 px-6 md:px-8 text-sm md:text-lg font-semibold text-white bg-gradient-to-r from-primary to-secondary rounded-lg flex items-center justify-center gap-2 transition-transform duration-300 hover:scale-105 active:scale-95">
                            <i class="fas fa-map-location-dot"></i>
                            Lihat Petunjuk Arah
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact & Maps Section End --}}

    {{-- To Top Start --}}
    <div>
        <a href="">
            <i class="fas fa-arrow-top"></i>
        </a>
    </div>
    {{-- To Top End --}}

    {{-- Footer Section Start --}}
    <footer class="bg-accent pt-10">
        <div class="container max-w-full">
            <div class="flex flex-wrap gap-10 md:gap-16 lg:gap-20 mx-4 mb-4 justify-center">
                <div class="w-full md:w-2/5">
                    <div class="flex items-center mb-2">
                        <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt=""
                            class="h-12 md:h-14 w-auto mr-2">
                        <h1 class="font-bold text-heading text-xl md:text-2xl">PT. Cipta Muda Solusi</h1>
                    </div>
                    <p class="font-lato text-darkChoco font-medium text-base md:text-lg text-justify">
                        Kami adalah partner teknologi terpercaya yang menghadirkan solusi inovatif untuk transformasi
                        digital bisnis Anda. Dengan tim profesional dan teknologi terdepan, kami siap membantu
                        mewujudkan visi digital perusahaan Anda.
                    </p>
                </div>

                <div class="w-1/2 md:w-[20%]">
                    <h1 class="font-bold text-xl md:text-2xl text-heading">Layanan</h1>
                    <ul class="mt-3 flex flex-col space-y-2 md:space-y-3 text-sm md:text-base">
                        <li><a href="#" class="text-text hover:text-primary transition-colors">IT Solution</a>
                        </li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Sales &
                                Marketing</a></li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Event
                                Organizer</a></li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Software
                                Development</a>
                        </li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Data Center</a>
                        </li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">IT Operation &
                                Maintanance</a></li>
                    </ul>
                </div>

                <div class="w-1/2 md:w-[20%]">
                    <h1 class="font-bold text-xl md:text-2xl text-heading">Quick Links</h1>
                    <ul class="mt-3 flex flex-col space-y-2 md:space-y-3 text-sm md:text-base">
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Beranda</a></li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Tentang</a></li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Layanan</a></li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Portfolio</a>
                        </li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Tim</a></li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Contact</a></li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Faq</a></li>
                        <li><a href="#" class="text-text hover:text-primary transition-colors">Blog</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-text py-4">
                <p class="text-center text-text font-lato font-semibold text-sm md:text-base">&copy;
                    {{ date('Y') }} PT. Cipta
                    Muda Solusi. All
                    Right Reserved.</p>
            </div>
        </div>
    </footer>
    {{-- Footer Section End --}}
</body>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper(".swiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        breakpoints: {
            // 480: {
            //     slidesPerView: 1,
            // }
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>


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

<script>
    document.querySelectorAll('.upload-group').forEach(group => {
        const input = group.querySelector('input[type="file"]');
        const dropArea = group.querySelector('.drop-area');
        const preview = group.querySelector('.preview');
        const fileName = group.querySelector('.file-name');
        const fileSize = group.querySelector('.file-size');
        const previewImage = group.querySelector('.preview-image');
        const removeBtn = group.querySelector('.remove-file');

        // klik area = trigger input file
        dropArea.addEventListener('click', () => input.click());

        // fungsi render file
        const renderFile = (file) => {
            if (!file) return;

            if (file.size > 5 * 1024 * 1024) {
                alert('Ukuran file maksimal 5MB!');
                return;
            }

            fileName.textContent = file.name;
            fileSize.textContent = `${(file.size / 1024).toFixed(1)} KB`;

            // reset tampilan dulu
            previewImage.src = "";
            previewImage.classList.add('hidden');
            const oldPdfIcon = group.querySelector('.pdf-icon');
            if (oldPdfIcon) oldPdfIcon.remove();

            // kalau gambar → tampilkan thumbnail
            if (["image/jpeg", "image/png", "image/jpg", "image/webp"].includes(file.type)) {
                const reader = new FileReader();
                reader.onload = (ev) => {
                    previewImage.src = ev.target.result;
                    previewImage.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }

            // kalau PDF → pakai icon font awesome
            else if (file.type === "application/pdf") {
                const pdfUrl = URL.createObjectURL(file);

                let pdfIcon = document.createElement("i");
                pdfIcon.className = "fa-solid fa-file-pdf text-red-500 text-5xl pdf-icon cursor-pointer";
                pdfIcon.onclick = () => window.open(pdfUrl, "_blank");

                preview.querySelector('.flex').prepend(pdfIcon);
            } else {
                alert('File harus berupa JPEG/PNG/JPG/WEBP atau PDF!');
                return;
            }

            preview.classList.remove('hidden');
            preview.classList.add('flex');
        };

        // pilih file manual
        input.addEventListener('change', (e) => {
            const file = e.target.files[0];
            renderFile(file);
        });

        // drag file
        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.classList.add('bg-text/5');
        });

        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('bg-text/5');
        });

        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            dropArea.classList.remove('bg-text/5');

            if (e.dataTransfer.files.length > 0) {
                const file = e.dataTransfer.files[0];
                input.files = e.dataTransfer.files;
                renderFile(file);
            }
        });

        // hapus file
        removeBtn.addEventListener('click', (e) => {
            e.preventDefault();
            input.value = "";
            preview.classList.remove('flex');
            preview.classList.add('hidden');
            previewImage.src = "";
            fileName.textContent = "";
            fileSize.textContent = "";

            const pdfIcon = group.querySelector('.pdf-icon');
            if (pdfIcon) pdfIcon.remove();
        });
    });
</script>

<script src="{{ asset('js/script.js') }}"></script>
<script>
    // Watch
    const clockEl = document.getElementById("clock");
    let serverTime = new Date(clockEl.dataset.time);

    const updateClock = () => {
        serverTime.setSeconds(serverTime.getSeconds() + 1);

        let hours = serverTime.getHours();
        let minutes = serverTime.getMinutes();
        let seconds = serverTime.getSeconds();

        clockEl.innerText =
            `${hours.toString().padStart(2, '0')}:` +
            `${minutes.toString().padStart(2, '0')}:` +
            `${seconds.toString().padStart(2, '0')} WIB`;
    };

    setInterval(updateClock, 1000);
    updateClock();
</script>

</html>
