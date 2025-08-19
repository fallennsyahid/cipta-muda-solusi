<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cipta Muda Solusi">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Cipta Muda Solusi</title>

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
    <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container max-w-full relative">
            <div class="flex items-center justify-between">
                <div class="px-4 py-6">
                    <div class="flex items-center mr-2">
                        <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="Logo Cipta Muda Solusi"
                            class="w-21 lg:w-37.5" width="675" height="200">
                        <div class="flex flex-col items-start">
                            <h1 class="text-heading font-semibold text-base lg:text-lg">PT. Cipta Muda Solusi</h1>
                            <span class="text-text text-xs">Young, Brave, Innovative, Strong</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end px-4">
                    <button id="hamburger" name="hamburger" type="button" aria-label="Hamburger Menu"
                        class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block
                    lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex lg:items-center lg:justify-center" id="#nav-active">
                            <li class="group">
                                <a href="#"
                                    class="text-base font-medium text-black py-2 mx-5 flex group-hover:text-primary">
                                    Beranda
                                </a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class="text-base font-medium text-black py-2 mx-5 flex group-hover:text-primary">
                                    Tentang
                                </a>
                            </li>
                            <li class="group">
                                <a href="#visiMisi"
                                    class="text-base font-medium text-black py-2 mx-5 flex group-hover:text-primary">
                                    Visi & Misi
                                </a>
                            </li>
                            <li class="group">
                                <a href="#service"
                                    class="text-base font-medium text-black py-2 mx-5 flex group-hover:text-primary">
                                    Layanan
                                </a>
                            </li>
                            <li class="group">
                                <a href="#teams"
                                    class="text-base font-medium text-black py-2 mx-5 flex group-hover:text-primary">
                                    Team
                                </a>
                            </li>
                            <li class="group">
                                <a href="#portfolios"
                                    class="text-base font-medium text-black py-2 mx-5 flex group-hover:text-primary">
                                    Portfolio
                                </a>
                            </li>
                            <li class="group">
                                <a href="#contact"
                                    class="text-base font-medium text-black py-2 mx-5 flex group-hover:text-primary">
                                    Contact
                                </a>
                            </li>
                            <li class="group">
                                <a href="/"
                                    class="search-button text-2xl text-black w-12.5 h-12.5 bg-gray-300 rounded-full mx-5 flex items-center justify-center transition-all duration-200 ease-in-out group-hover:scale-110"
                                    aria-label="Buka Pencarian">
                                    <i class="fas fa-magnifying-glass"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="lg:hidden absolute right-12">
                        <a href="/"
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
    {{-- Header End --}}

    {{-- Hero Section Start --}}
    <section id="hero-section" class="pt-36 bg-gradient-to-br bg-primary to-secondary">
        <div class="container max-w-full">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-8 lg:w-1/2">
                    <h1 class="text-4xl lg:text-6xl font-bold text-white pb-5 lg:text-left text-center">
                        Young, Brave, Innovative, Strong
                    </h1>
                    <p class="text-[1.625rem] text-center lg:text-left text-white">
                        Solusi IT, Marketing & Event Organizer Terpercaya untuk Kemajuan Bisnis Anda
                    </p>
                    <div class="flex gap-4 justify-center lg:justify-start">
                        <a href="#contact"
                            class="bg-bg/90 relative inline-flex items-center mt-5 px-6 py-3 rounded-xl text-heading shadow-lg hover:bg-bg overflow-hidden transition-all duration-500 ease-out group">
                            <span
                                class="absolute inset-0 bg-bg scale-x-0 origin-center transition-transform duration-500 ease-out group-hover:scale-x-100"></span>
                            <i class="fas fa-phone mr-2 relative"></i>
                            <span class="relative">Konsultasi Gratis</span>
                        </a>
                        <a href="{{ route('user.jobs.index') }}"
                            class="relative inline-flex items-center mt-5 px-6 py-3 border-2 border-accent/60 rounded-xl text-white hover:bg-secondary hover:border-none overflow-hidden transition-all duration-500 ease-out group">
                            <span
                                class="absolute inset-0 scale-x-0 origin-center border-2 border-accent rounded-xl bg-secondary transition-transform duration-500 ease-out group-hover:scale-x-100"></span>
                            <i class="fas fa-briefcase mr-2 relative"></i>
                            <span class="relative">Lowongan Kerja</span>
                        </a>
                    </div>
                </div>

                <div class="w-full self-end px-8 lg:w-1/2 overflow-hidden hidden lg:block">
                    <img src="{{ asset('landing/webp/hero-section.webp') }}" alt="Hero Section Image"
                        fetchpriority="high" class="rounded-lg aspect-[3/2]">
                </div>
            </div>

            <div
                class="bg-accent/80 p-10 flex flex-wrap justify-center items-center mt-21 lg:mt-10 gap-8 md:gap-16 lg:gap-24">
                <div class="flex-1 min-w-[120px] max-w-[300px] flex justify-center">
                    <img src="{{ asset('landing/webp/angkasa-pura.webp') }}" alt="Angkasa Pura"
                        class="w-full h-auto object-contain grayscale hover:grayscale-0 hover:scale-110 transition-all duration-300 ease-in-out"
                        loading="lazy" width="824" height="300" />
                </div>
                <div class="flex-1 min-w-[80px] max-w-[150px] flex justify-center">
                    <img src="{{ asset('landing/webp/kemenkop.webp') }}" alt="Kemenkop"
                        class="w-full h-auto object-contain grayscale hover:grayscale-0 hover:scale-110 transition-all duration-300 ease-in-out"
                        loading="lazy" width="403" height="300" />
                </div>
                <div class="flex-1 min-w-[90px] max-w-[160px] flex justify-center">
                    <img src="{{ asset('landing/webp/telkom.webp') }}" alt="Telkom Indonesia"
                        class="w-full h-auto object-contain grayscale hover:grayscale-0 hover:scale-110 transition-all duration-300 ease-in-out"
                        loading="lazy" width="441" height="300" />
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- About Section Start --}}
    <section id="about" class="pt-36 pb-0 bg-accent relative overflow-hidden min-h-[700px]">
        <div class="container max-w-full px-12 pb-32">
            <h1 class="text-center text-heading font-semibold text-4xl">Tentang Perusahaan</h1>
            <div class="flex justify-center mt-3">
                <span class="w-24 h-1 bg-secondary"></span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 mt-0 lg:mt-5">
                <div class="block mt-15">
                    <img src="{{ asset('landing/webp/about-image.webp') }}" alt="About Image" height="1024"
                        width="1536" class="rounded-xl w-[550px] aspect-[3/2] object-cover" fetchpriority="high">
                </div>
                <div class="flex flex-col mt-5">
                    <p class="pb-9 text-xl text-gray-700">
                        PT Cipta Muda Solusi adalah perusahaan yang berkomitmen membangun kepercayaan dan kerjasama
                        dengan mitra strategis dalam menghadapi era digital 4.0.
                    </p>
                    <p class="pb-9 text-xl text-gray-700">
                        Kami fokus membuat mitra lebih terbuka terhadap
                        teknologi dengan nilai-nilai Young, Brave, Innovative,
                        dan Strong sebagai fondasi dalam mendukung industri kreatif Indonesia.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white py-4 flex flex-col items-center justify-center rounded-xl">
                            <i class="fas fa-users text-secondary text-xl"></i>
                            <p class="font-medium text-xl text-black pt-1.5">Young</p>
                        </div>
                        <div class="bg-white py-4 flex flex-col items-center justify-center rounded-xl">
                            <i class="fas fa-shield-halved text-secondary text-xl"></i>
                            <p class="font-medium text-xl text-black pt-1.5">Brave</p>
                        </div>
                        <div class="bg-white py-4 flex flex-col items-center justify-center rounded-xl">
                            <i class="fas fa-lightbulb text-secondary text-xl"></i>
                            <p class="font-medium text-xl text-black pt-1.5">Innovative</p>
                        </div>
                        <div class="bg-white py-4 flex flex-col items-center justify-center rounded-xl">
                            <i class="fas fa-hand-fist text-secondary text-xl"></i>
                            <p class="font-medium text-xl text-black pt-1.5">Strong</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ml-10 mt-5">
                <img src="{{ asset('landing/svg/circle.svg') }}" alt="Circle" loading="lazy" width="165"
                    height="165">
            </div>
        </div>
        <div class="absolute left-0 bottom-0 w-full pointer-events-none z-10">
            <svg class="w-full h-full xl:h-60" viewBox="0 0 1440 222" fill="none"
                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path
                    d="M587 29.7293C438.5 164.229 151.712 212.304 -3 168.729V271.729H1440V156.729C1440 283.729 735.5 -104.771 587 29.7293Z"
                    fill="#0891b2" stroke="#0891b2" />
            </svg>
        </div>
    </section>
    {{-- About Section End --}}

    {{-- Visi & Misi Section Start --}}
    <section id="visiMisi" class="pt-32 pb-18">
        <div class="container max-w-full">
            <h1 class="text-heading font-semibold text-4xl text-center">Visi & Misi</h1>
            <div class="flex justify-center mt-3">
                <span class="w-24 h-1 bg-secondary"></span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mx-6 my-10">
                <div class="bg-accent p-6 flex flex-col justify-center items-center rounded-xl">
                    <i class="fas fa-eye text-primary text-5xl"></i>
                    <h1 class="text-primary font-semibold text-3xl pt-4 pb-5">Visi</h1>
                    <p class="text-xl text-center pb-3">
                        "Menjadi perusahaan Jasa Solusi IT, Marketing, dan Event Organizer terpercaya di Indonesia”
                    </p>
                </div>
                <div class="bg-accent p-6 flex flex-col justify-center items-center rounded-xl">
                    <i class="fas fa-bullseye text-primary text-5xl"></i>
                    <h1 class="text-primary font-semibold text-3xl pt-4 pb-5">Misi</h1>
                    <p class="text-xl text-center pb-3">
                        <i class="fas fa-circle-check mr-4 text-secondary"></i>
                        Memberikan jasa pelayanan terbaik secara konsisten kepada semua perusahaan mitra
                    </p>
                    <p class="text-xl text-center">
                        <i class="fas fa-circle-check mr-4 text-secondary"></i>
                        Memberikan jasa pelayanan terbaik secara konsisten kepada semua perusahaan mitra
                    </p>
                </div>
            </div>

            <div class="bg-accent p-10">
                <h1 class="text-heading font-semibold text-4xl text-center" id="title">Motto</h1>
                <div class="flex justify-center mt-3">
                    <span class="w-24 h-1 bg-secondary"></span>
                </div>

                <div class="flex justify-center items-center mt-8 p-20 border-4 border-text rounded-xl relative">
                    <div class="absolute -top-10 left-20 bg-accent p-3">
                        <i class="fa-solid fa-quote-right text-text text-5xl"></i>
                    </div>
                    <p class="font-semibold text-black text-4xl italic text-center">
                        "Kepuasaan Perusahaan Mitra adalah yang Utama"
                    </p>
                    <div class="absolute -bottom-10 right-20 bg-accent p-3">
                        <i class="fa-solid fa-quote-left text-text text-5xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Visi & Misi Section End --}}

    {{-- Service Section Start --}}
    <section id="service" class="pt-30 pb-32">
        <div class="container max-w-full">
            <h1 class="text-heading font-semibold text-4xl text-center">Layanan Kami</h1>
            <div class="flex justify-center mt-3">
                <span class="w-24 h-1 bg-secondary"></span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mx-8 gap-10 my-10">
                {{-- 1 --}}
                <div class="bg-gradient-to-br from-primary to-secondary rounded-xl p-10">
                    <div class="flex flex-col justify-center text-white">
                        <i class="fas fa-laptop-code text-3xl"></i>
                        <h1 class="font-semibold text-3xl mt-1">IT Solution</h1>

                        <p class="text-base text-white my-7.5">Memberikan pelayanan terbaik dalam segala bidang IT</p>

                        <ul class="list-disc list-inside">
                            <li class="text-white font-semibold text-base">Software Development</li>
                            <li class="text-white font-semibold text-base">Data Center</li>
                            <li class="text-white font-semibold text-base">IT Operation & Maintenance</li>
                        </ul>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="border-4 border-accent rounded-xl p-10">
                    <div class="flex flex-col justify-center">
                        <i class="fas fa-bullhorn text-3xl text-secondary"></i>
                        <h1 class="font-semibold text-3xl mt-1 text-heading">Sales dan Marketing</h1>

                        <p class="text-base text-gray-700 my-7.5">
                            Memberikan pelayanan dalam bidang pemasaran produk mitra untuk pengembangan usaha
                        </p>

                        <ul class="list-disc list-inside">
                            <li class="text-gray-700 text-base">Sales & Marketing Strategy</li>
                            <li class="text-gray-700 text-base">Digital Marketing</li>
                            <li class="text-gray-700 text-base">Brand Development</li>
                        </ul>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="bg-accent rounded-xl p-10">
                    <div class="flex flex-col justify-center text-heading">
                        <i class="fas fa-calendar-days text-3xl"></i>
                        <h1 class="font-semibold text-3xl mt-1">Event Organizer</h1>

                        <p class="text-base text-gray-700 my-7.5">
                            Membantu menjalankan penyelenggaraan event yang di inginkan mitra kerja
                        </p>

                        <ul class="list-disc list-inside">
                            <li class="text-gray-700 text-base">MICE Event</li>
                            <li class="text-gray-700 text-base">Corporate Events</li>
                            <li class="text-gray-700 text-base">Virtual Events</li>
                        </ul>
                    </div>
                </div>
                {{-- 4 --}}
                <div class="border-4 border-accent rounded-xl p-10">
                    <div class="flex flex-col justify-center">
                        <i class="fas fa-laptop text-3xl text-secondary"></i>
                        <h1 class="font-semibold text-3xl mt-1 text-heading">Software Development</h1>

                        <p class="text-base text-gray-700 my-7.5">
                            Berkembang bersama mitra dalam membentuk software yang di inginkan
                        </p>

                        <ul class="list-disc list-inside">
                            <li class="text-gray-700 text-base">Analisis Kebutuhan dan perencanaan sistem</li>
                            <li class="text-gray-700 text-base">Pengembangan aplikasi berbasis web & mobile</li>
                        </ul>
                    </div>
                </div>
                {{-- 5 --}}
                <div class="bg-accent rounded-xl p-10">
                    <div class="flex flex-col justify-center text-heading">
                        <i class="fas fa-server text-3xl"></i>
                        <h1 class="font-semibold text-3xl mt-1">Data Center</h1>

                        <p class="text-base text-gray-700 my-7.5">
                            Menjadi tempat terpercaya dalam penyimpanan data mitra untuk bekerja sama
                        </p>

                        <ul class="list-disc list-inside">
                            <li class="text-gray-700 text-base">Akses Data Cepat dan Andal</li>
                            <li class="text-gray-700 text-base">Keamanan berlapis & enkripsi</li>
                            <li class="text-gray-700 text-base">Infrastruktur berskala sesuai kebutuhan</li>
                        </ul>
                    </div>
                </div>
                {{-- 6 --}}
                <div class="bg-gradient-to-br from-primary to-secondary rounded-xl p-10">
                    <div class="flex flex-col justify-center text-white">
                        <i class="fa-solid fa-screwdriver-wrench text-3xl"></i>
                        <h1 class="font-semibold text-3xl mt-1">IT Operation & Maintenance</h1>

                        <p class="text-base text-white my-7.5">
                            Melakukan dan memberikan maintenance kebutuhan IT untuk seluruh mitra yang bekerja sama
                        </p>

                        <ul class="list-disc list-inside">
                            <li class="text-white font-semibold text-base">Monitoring infrastruktur IT 24/7</li>
                            <li class="text-white font-semibold text-base">Dukungan teknis dan troubleshooting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Service Section End --}}

    {{-- Team Section Start --}}
    <section id="teams" class="bg-section pt-36 pb-32 relative overflow-hidden">
        <div class="dots-container"></div>
        <div class="container max-w-full">
            <h1 class="text-primary font-semibold text-4xl text-center">Tim Kami</h1>
            <div class="flex justify-center mt-3">
                <span class="bg-secondary w-24 h-1"></span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 mx-8 gap-10 my-10">
                {{-- 1 --}}
                <div class="bg-white p-4 sm:p-6 rounded-xl shadow-xl flex flex-col">
                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="mb-3 sm:mb-0 sm:mr-3 flex-shrink-0 flex justify-center">
                            <img src="{{ asset('landing/webp/teams/randy-khairu.webp') }}" alt="Randy Khairu Basyar"
                                loading="lazy" class="rounded-full w-16 h-16 object-cover" />
                        </div>
                        <div class="flex flex-col items-center sm:items-start text-center sm:text-left">
                            <h1 class="text-primary font-semibold text-xl sm:text-2xl">Randy Khairu Basyar</h1>
                            <span class="text-blue-900 text-base sm:text-lg">Komisaris Utama</span>
                        </div>
                    </div>
                    <div class="block mt-4 sm:mt-6">
                        <p class="text-text italic text-base sm:text-xl text-center sm:text-left">
                            "Dengan menghadapi dunia digital 4.0, kami berkomitmen untuk terus berkembang dan menjadi
                            poros teknologi di Indonesia."
                        </p>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="bg-white p-4 sm:p-6 rounded-xl shadow-xl flex flex-col">
                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="mb-3 sm:mb-0 sm:mr-3 flex-shrink-0 flex justify-center">
                            <img src={{ asset('landing/webp/teams/adit-bayu.webp') }} alt="Aditya Bayu Irawan"
                                loading="lazy" class="rounded-full w-16 h-16 object-cover">
                        </div>
                        <div class="flex flex-col items-center sm:items-start text-center sm:text-left">
                            <h1 class="text-primary font-semibold text-xl sm:text-2xl">Aditya Bayu Irawan</h1>
                            <span class="text-blue-900 text-base sm:text-lg">CEO</span>
                        </div>
                    </div>
                    <div class="block mt-4 sm:mt-6">
                        <p class="text-text italic text-base sm:text-xl text-center sm:text-left">
                            "Membawa Indonesia untuk bersaing di pasar global agar terus berkembang dan menjadi poros IT
                            Dunia."
                        </p>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="bg-white p-4 sm:p-6 rounded-xl shadow-xl flex flex-col">
                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="mb-3 sm:mb-0 sm:mr-3 flex-shrink-0 flex justify-center">
                            <img src={{ asset('landing/webp/teams/irfan-fauzan.webp') }} alt="Irfan Fauzan"
                                loading="lazy" class="rounded-full w-16 h-16 object-cover">
                        </div>
                        <div class="flex flex-col items-center sm:items-start text-center sm:text-left">
                            <h1 class="text-primary font-semibold text-xl sm:text-2xl">Irfan Fauzan</h1>
                            <span class="text-blue-900 text-base sm:text-lg">IT Director</span>
                        </div>
                    </div>
                    <div class="block mt-4 sm:mt-6">
                        <p class="text-text italic text-base sm:text-xl text-center sm:text-left">
                            "Berdiri dengan kekuatan dan mental jiwa kesatria untuk terus berkembang menghadapi dunia
                            industri IT."
                        </p>
                    </div>
                </div>
                {{-- 4 --}}
                <div class="bg-white p-4 sm:p-6 rounded-xl shadow-xl flex flex-col">
                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="mb-3 sm:mb-0 sm:mr-3 flex-shrink-0 flex justify-center">
                            <img src={{ asset('landing/webp/teams/nanda.webp') }} alt="Nanda Ikhsanabdullah Utama"
                                loading="lazy" class="rounded-xl w-16 h-16 object-cover">
                        </div>
                        <div class="flex flex-col items-center sm:items-start text-center sm:text-left">
                            <h1 class="text-primary font-semibold text-xl sm:text-2xl">Nanda Ikhsanabdullah Utama</h1>
                            <span class="text-blue-900 text-base sm:text-lg">Event Director</span>
                        </div>
                    </div>
                    <div class="block mt-4 sm:mt-6">
                        <p class="text-text italic text-base sm:text-xl text-center sm:text-left">
                            "Digitalisasi merupakan perkembangan dunia yang bisa membawa kita kearah kemudahan dalam
                            melakukan perkembangan."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Team Section End --}}

    {{-- Portfolios Section Start --}}
    <section id="portfolios" class="pt-36 pb-32 bg-[#E4F8FD] relative">
        <div class="container max-w-full relative px-4 sm:px-8">
            <h1 class="text-primary text-center font-semibold text-4xl">Portfolio</h1>
            <div class="flex justify-center mt-3">
                <span class="bg-secondary w-24 h-1"></span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mx-6 gap-8 md:gap-10 my-10">
                <div class="bg-section w-full rounded-lg shadow-4 flex flex-col">
                    <img src="{{ asset('landing/webp/portfolios/porto-1.webp') }}"
                        alt="Sunlife Financial Annual Award Night"
                        class="w-full h-48 sm:h-56 md:h-60 object-cover rounded-t-lg">
                    <div class="flex flex-col p-5 flex-1">
                        <h1 class="text-primary font-semibold text-2xl">Sunlife Financial Annual Award Night</h1>
                        <h2 class="flex items-center py-2.5 text-blue-900 font-semibold text-base">
                            <i class="fas fa-gears mr-2 text-text"></i>
                            Virtual Event
                        </h2>
                        <p class="text-text text-base">
                            Virtual Event untuk 8000 peserta agent di seluruh Indonesia menggunakan platform Zoom
                            Meeting
                        </p>
                        <b class="pt-2.5 text-blue-900 text-base">Januari 2021</b>
                    </div>
                </div>
                <div class="bg-section w-full rounded-lg shadow-4 flex flex-col">
                    <img src="{{ asset('landing/webp/portfolios/porto-2.webp') }}" alt="Web Based Production"
                        class="w-full h-48 sm:h-56 md:h-60 object-cover rounded-t-lg">
                    <div class="flex flex-col p-5 flex-1">
                        <h1 class="text-primary font-semibold text-2xl">Web Based Production</h1>
                        <h2 class="flex items-center py-2.5 text-blue-900 font-semibold text-base">
                            <i class="fas fa-gears mr-2 text-text"></i>
                            Lamikro dan Database Kewirausahaan
                        </h2>
                        <p class="text-text text-base">
                            Virtual Event untuk 8000 peserta agent di seluruh Indonesia menggunakan platform Zoom
                            Meeting
                        </p>
                        <b class="pt-2.5 text-blue-900 text-base">Agustus 2020</b>
                    </div>
                </div>
                <div class="bg-section w-full rounded-lg shadow-4 flex flex-col">
                    <img src="{{ asset('landing/webp/portfolios/porto-3.webp') }}" alt="Infrastructure Instalation"
                        class="w-full h-48 sm:h-56 md:h-60 object-cover rounded-t-lg">
                    <div class="flex flex-col p-5 flex-1">
                        <h1 class="text-primary font-semibold text-2xl">Infrastructure Instalation</h1>
                        <h2 class="flex items-center py-2.5 text-blue-900 font-semibold text-base">
                            <i class="fas fa-gears mr-2 text-text"></i>
                            Switch dan Router MIKROTIK
                        </h2>
                        <p class="text-text text-base">
                            Virtual Event untuk 8000 peserta agent di seluruh Indonesia menggunakan platform Zoom
                            Meeting
                        </p>
                        <b class="pt-2.5 text-blue-900 text-base">April 2020</b>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center gap-3 md:gap-5 mt-8">
                <span
                    class="bg-accent w-10 h-10 md:w-12 md:h-12 flex items-center justify-center rounded-full shadow-4">
                    <i class="fas fa-arrow-left text-text"></i>
                </span>
                <span
                    class="font-semibold text-white text-lg md:text-xl bg-primary w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center shadow-paginate">
                    1
                </span>
                <span
                    class="font-semibold text-text text-lg md:text-xl bg-accent w-10 h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center shadow-4">
                    2
                </span>
                <span
                    class="bg-accent w-10 h-10 md:w-12 md:h-12 flex items-center justify-center rounded-full shadow-4">
                    <i class="fas fa-arrow-right"></i>
                </span>
            </div>
        </div>
        <div class="absolute left-0 bottom-0">
            <svg width="281" height="200" viewBox="0 0 281 200" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M161.015 41.9779C180.469 18.7942 215.033 15.7702 238.217 35.2236C261.401 54.6771 264.425 89.2414 244.971 112.425L107.962 275.707C88.5081 298.891 53.9438 301.915 30.76 282.461C7.57629 263.008 4.5523 228.443 24.0058 205.26L161.015 41.9779Z"
                    fill="#CCD2DF" />
                <path
                    d="M162.949 148.961C176.833 132.414 201.503 130.256 218.05 144.14C234.596 158.024 236.755 182.694 222.87 199.241L129.061 311.038C115.177 327.585 90.5075 329.743 73.9607 315.858C57.4139 301.974 55.2556 277.305 69.14 260.758L162.949 148.961Z"
                    fill="#0891B2" />
                <path
                    d="M99.3542 57.6374C113.239 41.0906 137.908 38.9323 154.455 52.8167C171.002 66.7012 173.16 91.3706 159.275 107.917L32.0613 259.525C18.1769 276.072 -6.4925 278.23 -23.0393 264.346C-39.5861 250.462 -41.7444 225.792 -27.86 209.245L99.3542 57.6374Z"
                    fill="#22D3EE" />
            </svg>
        </div>
        <div class="absolute right-0 bottom-0">
            <svg width="485" height="243" viewBox="0 0 485 243" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M282 87C331.275 14.8935 373.94 -6.18968 486 2.49997V244.5H1.5C1.5 244.5 68.5 177.5 154.5 193.5C240.5 209.5 282 87 282 87Z"
                    fill="#0891B2" stroke="#0891B2" />
            </svg>

        </div>
    </section>
    {{-- Portfolios Section End --}}

    {{-- Contact Section Start --}}
    <section id="contact" class="pt-36 pb-32">
        <div class="container max-w-full">
            <h1 class="text-primary text-center font-semibold text-4xl">Hubungi Kami</h1>
            <div class="flex justify-center mt-3">
                <span class="bg-secondary w-24 h-1"></span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 my-10 gap-12 mx-8">
                <div>
                    <h1 class="font-semibold text-4xl text-primary">Informasi Kontak</h1>
                    <div class="flex items-center mt-4">
                        <i class="fas fa-phone text-secondary text-3xl mr-3"></i>
                        <div class="flex flex-col justify-center">
                            <div class="font-semibold text-xl text-black">Office</div>
                            <span class="text-text text-base">021 83731722</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <i class="fas fa-mobile-screen text-secondary text-3xl mr-3"></i>
                        <div class="flex flex-col justify-center">
                            <div class="font-semibold text-xl text-black">Mobile</div>
                            <span class="text-text text-base">0812 1029 4688</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <i class="fas fa-envelope text-secondary text-3xl mr-3"></i>
                        <div class="flex flex-col justify-center">
                            <div class="font-semibold text-xl text-black">Email</div>
                            <span class="text-text text-base">ciptamudasolusi@gmail.com</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-4">
                        <i class="fas fa-location-dot text-secondary text-3xl mr-3"></i>
                        <div class="flex flex-col justify-center">
                            <div class="font-semibold text-xl text-black">Alamat</div>
                            <span class="text-text text-base">
                                Komplek Ruko Imperium Park Blok C No. 6, Jalan Mayor Oking, Kec. Cibinong, Kab. Bogor
                            </span>
                        </div>
                    </div>
                </div>

                <div class="bg-accent p-5 rounded-lg">
                    <h1 class="text-primary font-semibold text-4xl">Konsultasi Gratis</h1>
                    <form action="{{ route('index.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- Nama Lengkap --}}
                        <div class="relative my-5">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-text"></i>
                            </div>
                            <input type="text" id="full_name" name="full_name" placeholder="Nama Lengkap"
                                class="w-full pl-10 pr-3 py-4 text-text text-base bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:border focus:border-cyan-600">
                        </div>
                        {{-- Email --}}
                        <div class="relative my-5">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-text"></i>
                            </div>
                            <input type="email" id="email" name="email" placeholder="Email"
                                class="w-full pl-10 pr-3 py-4 text-text text-base bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:border focus:border-cyan-600">
                        </div>
                        {{-- Phone Number --}}
                        <div class="relative my-5">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-phone text-text"></i>
                            </div>
                            <input type="tel" id="phone_number" name="phone_number" placeholder="Nama Lengkap"
                                class="w-full pl-10 pr-3 py-4 text-text text-base bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:border focus:border-cyan-600">
                        </div>
                        {{-- Pesan --}}
                        <div class="relative my-5">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-message text-text"></i>
                            </div>
                            <textarea id="message" name="message" placeholder="Pesan Anda"
                                class="w-full pl-10 pr-3 py-4 text-text text-base bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-600 focus:border focus:border-cyan-600"
                                rows="1"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full py-3 bg-primary text-lg font-bold hover:bg-cyan-700 transition-all duration-200 ease-in-out cursor-pointer text-white text-shadow rounded-lg">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Section End --}}

    {{-- Back To Top Start --}}
    <a href="#" id="to-top" aria-label="Back To Top"
        class="fixed z-[9999] hidden justify-center items-center bottom-4 right-4 p-4 w-14 h-14 rounded-full bg-primary hover:ring-2 hover:ring-blue-400 active:ring-offset-2 active:ring-blue-500 hover:scale-110 transition-all duration-200 ease-linear">
        <i class="fas fa-arrow-up text-white font-bold text-2xl"></i>
    </a>
    {{-- Back To Top End --}}

    {{-- Footer Section Start --}}
    <footer class="bg-accent pt-10">
        <div class="container max-w-full">
            <div class="flex flex-wrap mx-6 mb-10">
                <div class="w-full mb-5 md:w-1/3">
                    <div class="flex items-center">
                        <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="Logo Cipta Muda Solusi"
                            class="w-21 lg:w-37.5" width="675" height="200">
                        <div class="block">
                            <h1 class="text-heading text-2xl font-semibold">PT. Cipta Muda Solusi</h1>
                            <p class="text-text text-base">Young, Brave, Innovative, Strong </p>
                        </div>
                    </div>
                    <p class="text-text text-base py-4 font-medium">
                        Perusahaan jasa solusi IT, marketing, dan event organizer terpercaya yang berkomitmen memberikan
                        pelayanan terbaik untuk kemajuan bisnis mitra.
                    </p>
                    <div class="flex items-center gap-2">
                        <a href="https://instagram.com/umarusyahidm_/" target="_blank" aria-label="Facebook"
                            class="w-13 h-13 bg-primary text-white rounded-full flex items-center justify-center text-center">
                            <i class="fab fa-facebook-f text-2xl"></i>
                        </a>
                        <a href="https://instagram.com/umarusyahidm_/" target="_blank" aria-label="Instagram"
                            class="w-13 h-13 bg-primary text-white rounded-full flex items-center justify-center text-center">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="https://instagram.com/umarusyahidm_/" target="_blank" aria-label="LinkedIn"
                            class="w-13 h-13 bg-primary text-white rounded-full flex items-center justify-center text-center">
                            <i class="fab fa-linkedin-in text-2xl"></i>
                        </a>
                        <a href="https://instagram.com/umarusyahidm_/" target="_blank" aria-label="Twitter"
                            class="w-13 h-13 bg-primary text-white rounded-full flex items-center justify-center text-center">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col items-center lg:items-center w-full md:w-1/3">
                    <h1 class="text-heading text-2xl font-semibold">Quick Links</h1>
                    <div class="flex flex-col -ml-10 gap-3 mt-4">
                        <a href="#" class="text-base text-text">Beranda</a>
                        <a href="#about" class="text-base text-text">Tentang</a>
                        <a href="#visiMisi" class="text-base text-text">Visi & Misi</a>
                        <a href="#service" class="text-base text-text">Layanan</a>
                        <a href="#teams" class="text-base text-text">Team</a>
                        <a href="#portfolio" class="text-base text-text">Portfolio</a>
                        <a href="#contact" class="text-base text-text">Kontak</a>
                    </div>
                </div>
                <div class="w-full md:w-1/3">
                    <h1 class="text-heading font-semibold text-2xl">Kontak Info</h1>
                    <div class="block">
                        <div class="flex items-center mt-6">
                            <i class="fas fa-phone text-secondary text-2xl mr-2"></i>
                            <p class="text-text  text-base">Office: 021 83731722</p>
                        </div>
                        <div class="flex items-center mt-6">
                            <i class="fas fa-mobile-screen text-secondary text-2xl mr-2"></i>
                            <p class="text-text  text-base">Mobile: 0812 1029 4688</p>
                        </div>
                        <div class="flex items-center mt-6">
                            <i class="fas fa-envelope text-secondary text-2xl mr-2"></i>
                            <p class="text-text  text-base">Email: ciptamudasolusi@gmail.com</p>
                        </div>
                        <div class="flex items-center mt-6">
                            <i class="fas fa-phone text-secondary text-2xl mr-2"></i>
                            <p class="text-text  text-base">
                                Alamat: Komplek Ruko Imperium Park Blok C No. 6, Jalan Mayor Oking, Kec. Cibinong, Kab.
                                Bogor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t-2 border-text flex items-center justify-center p-6">
                <h1 class="text-heading font-semibold text-base text-center">
                    Copyright &copy; {{ date('Y') }} Cipta Muda Solusi. All Right Reserved.
                </h1>
            </div>
        </div>
    </footer>
    {{-- Footer Section End --}}

</body>

<script src={{ asset('js/script.js') }}></script>

</html>
