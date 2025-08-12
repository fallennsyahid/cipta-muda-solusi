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
        <div class="container max-w-full">
            <div class="flex items-center justify-between">
                <div class="px-4 py-6">
                    <div class="flex items-center mr-2">
                        <img src="{{ asset('landing/webp/cms-logo.webp') }}" alt="Logo Cipta Muda Solusi" width="150"
                            height="150" loading="lazy">
                        <div class="flex flex-col items-center">
                            <h1 class="text-primary font-semibold text-2xl">PT. Cipta Muda Solusi</h1>
                            <span class="text-text">Young, Brave, Innovative, Strong</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block
                    lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex lg:items-center lg:justify-center" id="#nav-active">
                            <li class="group">
                                <a href="#" class="text-base text-black py-2 mx-5 flex group-hover:text-primary">
                                    Beranda
                                </a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-black py-2 mx-5 flex group-hover:text-primary">
                                    Tentang
                                </a>
                            </li>
                            <li class="group">
                                <a href="#visiMisi"
                                    class="text-base text-black py-2 mx-5 flex group-hover:text-primary">
                                    Visi & Misi
                                </a>
                            </li>
                            <li class="group">
                                <a href="#service" class="text-base text-black py-2 mx-5 flex group-hover:text-primary">
                                    Layanan
                                </a>
                            </li>
                            <li class="group">
                                <a href="#teams" class="text-base text-black py-2 mx-5 flex group-hover:text-primary">
                                    Team
                                </a>
                            </li>
                            <li class="group">
                                <a href="#portfolio"
                                    class="text-base text-black py-2 mx-5 flex group-hover:text-primary">
                                    Portfolio
                                </a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-black py-2 mx-5 flex group-hover:text-primary">
                                    Contact
                                </a>
                            </li>
                            <li class="group">
                                <a href="#contact"
                                    class="text-2xl text-black py-3 px-3 bg-[#d9d9d9] rounded-full mx-5 flex transition-all duration-200 ease-in-out group-hover:scale-110">
                                    <i class="fas fa-magnifying-glass"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- Header End --}}

    {{-- Hero Section Start --}}
    <section id="hero-section" class="pt-36 bg-gradient-to-br bg-primary to-secondary">
        <div class="container max-w-full">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-8 lg:w-1/2">
                    <h1 class="text-4xl lg:text-6xl font-bold text-white pb-5 lg:text-left text-center">Young, Brave,
                        Innovative, Strong
                    </h1>
                    <p class="text-[1.625rem] text-center lg:text-left text-white">
                        Solusi IT, Marketing & Event Organizer Terpercaya untuk Kemajuan Bisnis Anda
                    </p>
                    <div class="flex justify-center lg:justify-start">
                        <a href="#"
                            class="bg-bg/90 inline-flex items-center mt-5 px-6 py-3 rounded-xl text-heading shadow-lg hover:bg-bg transition-colors duration-200 ease-in-out">
                            <i class="fas fa-phone mr-2"></i>
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>

                <div class="w-full self-end px-8 lg:w-1/2 overflow-hidden hidden lg:block">
                    <img src="{{ asset('landing/webp/hero-section.webp') }}" alt="Hero Section Image"
                        class="rounded-lg">
                </div>
            </div>

            <div
                class="bg-accent/80 p-10 flex flex-wrap justify-center items-center mt-21 lg:mt-10 gap-8 md:gap-16 lg:gap-24">
                <div class="flex-1 min-w-[120px] max-w-[300px] flex justify-center">
                    <img src="{{ asset('landing/webp/angkasa-pura.webp') }}" alt="Angkasa Pura"
                        class="w-full h-auto object-contain" />
                </div>
                <div class="flex-1 min-w-[80px] max-w-[150px] flex justify-center">
                    <img src="{{ asset('landing/webp/kemenkop.webp') }}" alt="Kemenkop"
                        class="w-full h-auto object-contain" />
                </div>
                <div class="flex-1 min-w-[90px] max-w-[160px] flex justify-center">
                    <img src="{{ asset('landing/webp/telkom.webp') }}" alt="Telkom Indonesia"
                        class="w-full h-auto object-contain" />
                </div>
            </div>
        </div>
    </section>
    {{-- Hero Section End --}}

    {{-- About Section Start --}}
    <section id="about" class="pt-36 pb-32 bg-accent">
        <div class="container max-w-full px-12">
            <h1 class="text-center text-heading font-semibold text-4xl">Tentang Perusahaan</h1>
            <div class="flex justify-center mt-3">
                <span class="w-24 h-1 bg-secondary"></span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 mt-5">
                <div class="block mt-15">
                    <img src={{ asset('landing/webp/about-image.webp') }} alt="About Image" width="550"
                        height="330" class="rounded-xl">
                </div>
                <div class="flex flex-col mt-5">
                    <p class="pb-9 text-xl text-text">
                        PT Cipta Muda Solusi adalah perusahaan yang berkomitmen membangun kepercayaan dan kerjasama
                        dengan mitra strategis dalam menghadapi era digital 4.0.
                    </p>
                    <p class="pb-9 text-xl text-text">
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
                <img src={{ asset('landing/svg/circle.svg') }} alt="Circle">
            </div>

            {{-- <div class="relative pb-32">
                <img src={{ asset('landing/svg/wave.svg') }} alt="Wave">
            </div> --}}
        </div>
    </section>
    {{-- About Section End --}}

    {{-- Visi & Misi Section Start --}}
    <section id="visiMisi" class="pt-32 pb-18">
        <div class="container max-w-full">
            <h1 class="text-heading font-semibold text-4xl text-center" id="title">Visi & Misi</h1>
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
                        " Kepuasaan Perusahaan Mitra adalah yang Utama"
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

                        <p class="text-base text-text my-7.5">
                            Memberikan pelayanan dalam bidang pemasaran produk mitra untuk pengembangan usaha
                        </p>

                        <ul class="list-disc list-inside">
                            <li class="text-text text-base">Sales & Marketing Strategy</li>
                            <li class="text-text text-base">Digital Marketing</li>
                            <li class="text-text text-base">Brand Development</li>
                        </ul>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="bg-accent rounded-xl p-10">
                    <div class="flex flex-col justify-center text-heading">
                        <i class="fas fa-calendar-days text-3xl"></i>
                        <h1 class="font-semibold text-3xl mt-1">Event Organizer</h1>

                        <p class="text-base text-text my-7.5">
                            Membantu menjalankan penyelenggaraan event yang di inginkan mitra kerja
                        </p>

                        <ul class="list-disc list-inside">
                            <li class="text-text text-base">MICE Event</li>
                            <li class="text-text text-base">Corporate Events</li>
                            <li class="text-text text-base">Virtual Events</li>
                        </ul>
                    </div>
                </div>
                {{-- 4 --}}
                <div class="border-4 border-accent rounded-xl p-10">
                    <div class="flex flex-col justify-center">
                        <i class="fas fa-laptop text-3xl text-secondary"></i>
                        <h1 class="font-semibold text-3xl mt-1 text-heading">Software Development</h1>

                        <p class="text-base text-text my-7.5">
                            Berkembang bersama mitra dalam membentuk software yang di inginkan
                        </p>

                        <ul class="list-disc list-inside">
                            <li class="text-text text-base">Analisis Kebutuhan dan perencanaan sistem</li>
                            <li class="text-text text-base">Pengembangan aplikasi berbasis web & mobile</li>
                        </ul>
                    </div>
                </div>
                {{-- 5 --}}
                <div class="bg-accent rounded-xl p-10">
                    <div class="flex flex-col justify-center text-heading">
                        <i class="fas fa-server text-3xl"></i>
                        <h1 class="font-semibold text-3xl mt-1">Data Center</h1>

                        <p class="text-base text-text my-7.5">
                            Menjadi tempat terpercaya dalam penyimpanan data mitra untuk bekerja sama
                        </p>

                        <ul class="list-disc list-inside">
                            <li class="text-text text-base">Akses Data Cepat dan Andal</li>
                            <li class="text-text text-base">Keamanan berlapis & enkripsi</li>
                            <li class="text-text text-base">Infrastruktur berskala sesuai kebutuhan</li>
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
    <section id="teams" class="bg-section pt-36 pb-32">
        <div class="container max-w-full">
            <h1 class="text-primary font-semibold text-4xl text-center">Tim Kami</h1>
            <div class="flex justify-center mt-3">
                <span class="bg-secondary w-24 h-1"></span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 mx-8 gap-10 my-10">
                {{-- 1 --}}
                <div class="bg-white p-6 rounded-xl shadow-xl flex flex-col">
                    <div class="flex items-center">
                        <div class="mr-3">
                            <img src={{ asset('landing/pngs/randy-khairu.png') }} alt="Randy Khairu Basyar"
                                width="70" height="70">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h1 class="text-primary font-semibold text-2xl">Randy Khairu Basyar</h1>
                            <span class="text-secondary text-lg">Komisaris Utama</span>
                        </div>
                    </div>
                    <div class="block mt-6">
                        <p class="text-text italic text-xl">
                            "Dengan menghadapi dunia digital 4.0, kami berkomitmen untuk terus berkembang dan menjadi
                            poros teknologi di Indonesia."
                        </p>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="bg-white p-6 rounded-xl shadow-xl flex flex-col">
                    <div class="flex items-center">
                        <div class="mr-3">
                            <img src={{ asset('landing/pngs/adit-bayu.png') }} alt="Aditya Bayu Irawan" width="70"
                                height="70">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h1 class="text-primary font-semibold text-2xl">Aditya Bayu Irawan</h1>
                            <span class="text-secondary text-lg">CEO</span>
                        </div>
                    </div>
                    <div class="block mt-6">
                        <p class="text-text italic text-xl">
                            "Membawa Indonesia untuk bersaing di pasar global agar terus berkembang dan menjadi poros IT
                            Dunia."
                        </p>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="bg-white p-6 rounded-xl shadow-xl flex flex-col">
                    <div class="flex items-center">
                        <div class="mr-3">
                            <img src={{ asset('landing/pngs/irfan-fauzan.png') }} alt="Irfan Fauzan" width="70"
                                height="70">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h1 class="text-primary font-semibold text-2xl">Irfan Fauzan</h1>
                            <span class="text-secondary text-lg">IT Director</span>
                        </div>
                    </div>
                    <div class="block mt-6">
                        <p class="text-text italic text-xl">
                            "Berdiri dengan kekuatan dan mental jiwa kesatria untuk terus berkembang menghadapi dunia
                            industri IT."
                        </p>
                    </div>
                </div>
                {{-- 4 --}}
                <div class="bg-white p-6 rounded-xl shadow-xl flex flex-col">
                    <div class="flex items-center">
                        <div class="mr-3">
                            <img src={{ asset('landing/pngs/nanda.png') }} alt="Nanda Ikhsanabdullah Utama"
                                width="70" height="70">
                        </div>
                        <div class="flex flex-col justify-center">
                            <h1 class="text-primary font-semibold text-2xl">Nanda Ikhsanabdullah Utama</h1>
                            <span class="text-secondary text-lg">Event Director</span>
                        </div>
                    </div>
                    <div class="block mt-6">
                        <p class="text-text italic text-xl">
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
    <section id="portfolios" class="pt-36 pb-32 bg-gray-200">
        <div class="container max-w-full relative">
            <h1 class="text-primary text-center font-semibold text-4xl">Portfolio</h1>
            <div class="flex justify-center mt-3">
                <span class="bg-secondary w-24 h-1"></span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 place-items-center mx-8 my-10 gap-10">
                <div class="bg-section w-100 rounded-lg shadow-4">
                    <img src={{ asset('landing/pngs/porto-1.png') }} alt="Sunlife Financial Annual Award Night"
                        width="400" height="225">
                    <div class="flex flex-col p-5">
                        <h1 class="text-primary font-semibold text-2xl">Sunlife Financial Annual Award Night</h1>
                        <h3 class="flex items-center py-2.5 text-secondary font-semibold text-base">
                            <i class="fas fa-gears mr-2 text-text"></i>
                            Virtual Event
                        </h3>
                        <p class="text-text text-base">
                            Virtual Event untuk 8000 peserta agent di seluruh Indonesia menggunakan platform Zoom
                            Meeting
                        </p>
                        <b class="pt-2.5 text-secondary text-base">Januari 2021</b>
                    </div>
                </div>
                <div class="bg-section w-100 rounded-lg shadow-4">
                    <img src={{ asset('landing/pngs/porto-2.png') }} alt="Web Based Production" width="400"
                        height="225">
                    <div class="flex flex-col p-5">
                        <h1 class="text-primary font-semibold text-2xl">Web Based Production</h1>
                        <h3 class="flex items-center py-2.5 text-secondary font-semibold text-base">
                            <i class="fas fa-gears mr-2 text-text"></i>
                            Lamikro dan Database Kewirausahaan
                        </h3>
                        <p class="text-text text-base">
                            Virtual Event untuk 8000 peserta agent di seluruh Indonesia menggunakan platform Zoom
                            Meeting
                        </p>
                        <b class="pt-2.5 text-secondary text-base">Agustus 2020</b>
                    </div>
                </div>
                <div class="bg-section w-100 rounded-lg shadow-4">
                    <img src={{ asset('landing/pngs/porto-3.png') }} alt="Infrastructure Instalation" width="400"
                        height="225">
                    <div class="flex flex-col p-5">
                        <h1 class="text-primary font-semibold text-2xl">Infrastructure Instalation</h1>
                        <h3 class="flex items-center py-2.5 text-secondary font-semibold text-base">
                            <i class="fas fa-gears mr-2 text-text"></i>
                            Switch dan Router MIKROTIK
                        </h3>
                        <p class="text-text text-base">
                            Virtual Event untuk 8000 peserta agent di seluruh Indonesia menggunakan platform Zoom
                            Meeting
                        </p>
                        <b class="pt-2.5 text-secondary text-base">April 2020</b>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center gap-5">
                <span class="bg-accent w-12 h-12 flex items-center justify-center rounded-full shadow-4">
                    <i class="fas fa-arrow-left text-text"></i>
                </span>
                <span
                    class="font-semibold text-white text-xl bg-primary w-12 h-12 rounded-full flex items-center justify-center shadow-paginate">
                    1
                </span>
                <span
                    class="font-semibold text-text text-xl bg-accent w-12 h-12 rounded-full flex items-center justify-center shadow-4">
                    2
                </span>
                <span class="bg-accent w-12 h-12 flex items-center justify-center rounded-full shadow-4">
                    <i class="fas fa-arrow-right"></i>
                </span>
            </div>
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
                    {{-- Nama Lengkap --}}
                    <div class="relative text-text text-base bg-white my-5 rounded-lg">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user"></i>
                        </div>
                        <input type="text" id="nama-lengkap" name="nama-lengkap" placeholder="Nama Lengkap"
                            class="w-full pl-10 pr-3 py-4">
                    </div>
                    {{-- Email --}}
                    <div class="relative text-text text-base bg-white my-5 rounded-lg">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <input type="email" id="email" name="email" placeholder="Email"
                            class="w-full pl-10 pr-3 py-4">
                    </div>
                    {{-- Phone Number --}}
                    <div class="relative text-text text-base bg-white my-5 rounded-lg">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-phone"></i>
                        </div>
                        <input type="tel" id="phone-number" name="phone-number" placeholder="Nama Lengkap"
                            class="w-full pl-10 pr-3 py-4">
                    </div>
                    {{-- Pesan --}}
                    <div class="relative text-text text-base bg-white my-5 rounded-lg">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-message"></i>
                        </div>
                        <textarea id="nama-lengkap" name="nama-lengkap" placeholder="Nama Lengkap" class="w-full pl-10 pr-3 py-4"
                            rows="1"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full py-3 bg-primary text-lg font-semibold rounded-lg text-white shadow-paginate">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan</button>
                </div>
            </div>
        </div>
    </section>
    {{-- Contact Section End --}}

    {{-- Footer Section Start --}}
    <footer class="bg-accent pt-10">
        <div class="container max-w-full">
            <div class="flex flex-wrap mx-6 mb-10">
                <div class="w-full mb-5 md:w-1/3">
                    <div class="flex items-center">
                        <img src={{ asset('landing/webp/cms-logo.webp') }} alt="Cipta Muda Solusi" width="150"
                            height="150">
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
                        <a href="https://instagram.com/umarusyahidm_/" target="_blank"
                            class="w-12.5 h-12.5 bg-primary text-white rounded-full flex items-center justify-center text-2xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://instagram.com/umarusyahidm_/" target="_blank"
                            class="w-12.5 h-12.5 bg-primary text-white rounded-full flex items-center justify-center text-2xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://instagram.com/umarusyahidm_/" target="_blank"
                            class="w-12.5 h-12.5 bg-primary text-white rounded-full flex items-center justify-center text-2xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://instagram.com/umarusyahidm_/" target="_blank"
                            class="w-12.5 h-12.5 bg-primary text-white rounded-full flex items-center justify-center text-2xl">
                            <i class="fab fa-instagram"></i>
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
                <h3 class="text-primary font-semibold text-base text-center">
                    Copyright &copy; {{ date('Y') }} Cipta Muda Solusi. All Right Reserved.
                </h3>
            </div>
        </div>
    </footer>
    {{-- Footer Section End --}}


</body>

<script>
    // function buatLingkaran(container, x, y, size, color) {
    //     const lingkaran = document.createElement("div");
    //     lingkaran.style.width = size + "px";
    //     lingkaran.style.height = size + "px";
    //     lingkaran.style.backgroundColor = color;
    //     lingkaran.style.left = x + "px";
    //     lingkaran.style.top = y + "px";
    //     lingkaran.style.position = "absolute";
    //     lingkaran.style.borderRadius = "50%";
    //     // lingkaran.style.zIndex = '-1'
    //     container.appendChild(lingkaran);
    // }

    // const section = document.getElementById("teams");
    // section.style.position = "relative";

    // const colors = [
    //     getComputedStyle(document.documentElement).getPropertyValue("--color-primary").trim(),
    //     getComputedStyle(document.documentElement).getPropertyValue("--color-secondary").trim(),
    //     getComputedStyle(document.documentElement).getPropertyValue("--color-accent").trim(),
    // ];

    // let circles = JSON.parse(localStorage.getItem("circlesData"));

    // if (!circles) {
    //     // Generate lingkaran baru kalau belum ada di localStorage
    //     circles = [];
    //     for (let i = 0; i < 10; i++) {
    //         const size = Math.floor(Math.random() * 70) + 30;
    //         const x = Math.random() * (section.clientWidth - size);
    //         const y = Math.random() * (section.clientHeight - size);
    //         const color = colors[Math.floor(Math.random() * colors.length)];

    //         circles.push({
    //             x,
    //             y,
    //             size,
    //             color
    //         });
    //     }
    //     localStorage.setItem("circlesData", JSON.stringify(circles));
    // }

    // // Render lingkaran dari data yang sudah tersimpan
    // circles.forEach(c => {
    //     buatLingkaran(section, c.x, c.y, c.size, c.color);
    // });
</script>

</html>
