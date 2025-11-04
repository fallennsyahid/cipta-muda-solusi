<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cipta Muda Solusi - Lowongan Kerja</title>

    <link rel="shortcut icon" href="{{ asset('landing/icon-cms.png') }}" type="image/png">

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

    <!-- Cropper JS -->
    <link href="https://unpkg.com/cropperjs@1.6.2/dist/cropper.min.css" rel="stylesheet">
    <script src="https://unpkg.com/cropperjs@1.6.2/dist/cropper.min.js"></script>

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
                        <a href="{{ route('index') }}"
                            class="text-base font-medium text-black2 group-hover:text-primary">
                            Beranda
                        </a>
                    </li>
                    <li class="group">
                        <a href="{{ route('index') }}#about"
                            class="text-base font-medium text-black2 group-hover:text-primary">
                            Tentang
                        </a>
                    </li>
                    <li class="group">
                        <a href="{{ route('index') }}#service"
                            class="text-base font-medium text-black2 group-hover:text-primary">
                            Layanan
                        </a>
                    </li>
                    <li class="group">
                        <a href="{{ route('index') }}#portfolio"
                            class="text-base font-medium text-black2 group-hover:text-primary">
                            Portfolio
                        </a>
                    </li>
                    <li class="group">
                        <a href="{{ route('index') }}#team"
                            class="text-base font-medium text-black2 group-hover:text-primary">
                            Team
                        </a>
                    </li>
                    <li class="group">
                        <a href="{{ route('index') }}#partner"
                            class="text-base font-medium text-black2 group-hover:text-primary">
                            Partner
                        </a>
                    </li>
                    <li class="group">
                        <a href="{{ route('index') }}#contact"
                            class="text-base font-medium text-black2 group-hover:text-primary">
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
                    <a href="{{ route('index') }}#"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-home group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Beranda</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('index') }}#about"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-user group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Tentang</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('index') }}#service"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-cogs group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Layanan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('index') }}#portfolio"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-briefcase group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Portfolio</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('index') }}#team"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-users group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Team</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('index') }}#partner"
                        class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
                        <i class="fas fa-handshake group-hover:scale-110 transition-transform duration-300"></i>
                        <span>Partner</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('index') }}#contact"
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

    <section id="hero" class="relative h-screen bg-accent/50 flex items-center justify-center text-center">
        <div class="absolute left-10 top-20 w-32 h-32 bg-primary/20 rounded-full blur-md"></div>
        <div class="absolute right-10 bottom-20 w-40 h-40 bg-primary/20 rounded-full blur-md"></div>
        <div
            class="absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 w-60 h-60 bg-primary/20 rounded-full blur-md">
        </div>

        <div class="container max-w-full">
            <h1
                class="font-bold text-3xl md:text-4xl lg:text-6xl mx-auto mb-6 text-center leading-snug bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text max-w-4xl">
                Bergabung Menjadi Bagian dari Tim Kami
            </h1>
            <p class="font-semibold text-base md:text-lg lg:text-xl text-text max-w-2xl lg:max-w-6xl mx-6 lg:mx-auto">
                Wujudkan karir Anda bersama PT. Cipta Muda Solusi. Kami mencari talenta terbaik untuk bergabung dalam
                misi menciptakan solusi teknologi inovatif.
            </p>
            <div class="flex items-center justify-center mt-6 gap-8 mx-10 md:mx-5 lg:mx-0">
                <div class="flex items-center text-text text-sm lg:text-base">
                    <i class="fas fa-users mr-2 text-primary"></i>
                    50+ Tim Profesional
                </div>
                <div class="flex items-center text-text text-sm lg:text-base">
                    <i class="fas fa-briefcase mr-2 text-primary"></i>
                    Lingkungan Kerja Fleksibel
                </div>
                <div class="flex items-center text-text text-sm lg:text-base">
                    <i class="fas fa-location-dot mr-2 text-primary"></i>
                    Jakarta & Remote
                </div>
            </div>
        </div>
    </section>

    <section id="jobs" class="py-12 bg-section">
        <div class="container max-w-full">
            <div
                class="flex flex-col md:flex-row md:items-center md:justify-between mx-4 md:mx-10 mb-6 md:mb-10 gap-4 md:gap-0">
                <h1 class="font-bold text-lg md:text-xl lg:text-2xl text-heading text-center md:text-left">
                    Daftar Lowongan Kerja ({{ $totalJobs }})
                </h1>

                <div class="flex items-center gap-3">
                    <!-- Input -->
                    <div class="relative w-full">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-magnifying-glass text-gray-400"></i>
                        </span>
                        <input type="search" name="searchJob" id="searchJob" placeholder="Cari Lowongan.."
                            class="w-full pl-10 py-3 pr-4 border border-gray-300 rounded-lg text-base text-black placeholder-gray-400">
                    </div>

                    <select name="filterJob" id="filterJob"
                        class="w-full px-6 py-3 border border-gray-300 rounded-lg text-base text-black capitalize">
                        <option value="-">Semua Jenis</option>
                        @foreach ($jobTypes as $type)
                            <option value="{{ $type->value }}">{{ $type->value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mx-4 md:mx-10" id="jobList">
                @if ($jobs->isEmpty())
                    <div class="col-span-1 lg:col-span-2 bg-white rounded-xl shadow-1 p-10 text-center">
                        <i class="fas fa-briefcase text-5xl md:text-6xl text-primary/50 mb-3 md:mb-6"></i>
                        <h2 class="text-lg md:text-xl lg:text-2xl font-bold text-heading">Tidak Ada Lowongan</h2>
                        <p class="text-text text-sm md:text-base mt-2">Kami belum membuka rekrutmen untuk saat ini.</p>
                    </div>
                @else
                    @foreach ($jobs as $job)
                        <div class="bg-white rounded-xl shadow-1 p-6">
                            <div class="flex justify-between items-center mb-2">
                                <h1 class="font-bold text-xl text-heading">{{ $job->position }}</h1>
                                <span
                                    class="text-white bg-secondary px-3 py-2 rounded-sm capitalize">{{ $job->departement }}</span>
                            </div>
                            <p class="font-lato text-sm max-w-md text-text mb-3 truncate">
                                {{ $job->description }}
                            </p>
                            <div class="flex items-center gap-6 mb-4">
                                <div class="flex items-center text-text text-xs">
                                    <i class="fas fa-location-dot mr-2"></i>
                                    {{ $job->location }}
                                </div>
                                <div class="flex items-center text-text text-xs capitalize">
                                    <i class="fas fa-clock mr-2"></i>
                                    {{ $job->job_type }}
                                </div>
                                <div class="flex items-center text-text text-xs capitalize">
                                    <i class="fas fa-money-bill mr-2"></i>
                                    {{ $job->salary }}
                                </div>
                                @if ($job->job_type === 'contract')
                                    <div class="flex items-center text-text text-xs">
                                        <i class="fas fa-briefcase mr-2"></i>
                                        {{ $job->contract_duration }}
                                    </div>
                                @endif
                            </div>
                            <h2 class="text-sm font-semibold text-heading mb-2">Keahlian yang Dibutuhkan:</h2>
                            <div class="w-full overflow-x-auto mb-5 custom-scrollbar">
                                <div class="flex flex-wrap items-center gap-4 mb-2 min-w-max">
                                    @foreach ($job->skills as $skill)
                                        <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                                            {{ $skill }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <h3 class="text-sm font-medium text-text">Diposting
                                    {{ $job->created_at->locale('id')->diffForHumans() }}
                                </h3>
                                <div class="flex items-center space-x-3">
                                    <button type="button" data-id="{{ $job->id }}"
                                        class="open-detail-application bg-cyan-500 px-4 py-2 text-white font-medium flex items-center text-sm rounded-sm hover:bg-cyan-600 cursor-pointer">
                                        <i class="fas fa-eye mr-2"></i>
                                        Lihat Detail
                                    </button>
                                    <a href="#" data-id="{{ $job->id }}"
                                        class="open-apply bg-primary px-4 py-2 text-white font-medium flex items-center text-sm rounded-sm hover:bg-primary/90">
                                        Lamar Sekarang
                                        <i class="fas fa-chevron-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            @if ($jobs->hasPages())
                <div id="paginationContainer" class="mt-4 mx-4 md:mx-10">
                    {{ $jobs->links() }}
                </div>
            @endif
        </div>
    </section>

    <section id="reason" class="bg-gradient-to-br from-primary/5 via-secondary/5 to-accent/5 p-12">
        <div class="container max-w-full">
            <div class="text-center mb-10">
                <h1 class="text-heading text-3xl lg:text-4xl font-bold mb-4">Mengapa Bergabung dengan Kami?
                </h1>
                <p class="text-lg lg:text-xl text-text max-w-3xl mx-auto font-lato">
                    Kami menawarkan lingkungan kerja yang mendukung pertumbuhan karir dan inovasi.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-white shadow-md p-6 rounded-xl text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="text-4xl mb-4">📈</div>
                    <h2 class="text-heading text-xl font-bold mb-3">Pertumbuhan Karir</h2>
                    <p class="text-text font-lato">
                        Program pengembangan karir yang jelas dengan mentoring dari senior
                    </p>
                </div>
                <div
                    class="bg-white shadow-md p-6 rounded-xl text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="text-4xl mb-4">⚖️</div>
                    <h2 class="text-heading text-xl font-bold mb-3">Work-Life Balance</h2>
                    <p class="text-text font-lato">
                        Fleksibilitas waktu kerja dan opsi remote work untuk keseimbangan hidup
                    </p>
                </div>
                <div
                    class="bg-white shadow-md p-6 rounded-xl text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="text-4xl mb-4">🚀</div>
                    <h2 class="text-heading text-xl font-bold mb-3">Teknologi Terdepan</h2>
                    <p class="text-text font-lato">
                        Bekerja dengan teknologi dan tools terbaru di industri
                    </p>
                </div>
                <div
                    class="bg-white shadow-md p-6 rounded-xl text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="text-4xl mb-4">🤝</div>
                    <h2 class="text-heading text-xl font-bold mb-3">Tim yang Solid</h2>
                    <p class="text-text font-lato">
                        Bergabung dengan tim profesional yang saling mendukung
                    </p>
                </div>
                <div
                    class="bg-white shadow-md p-6 rounded-xl text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="text-4xl mb-4">💎</div>
                    <h2 class="text-heading text-xl font-bold mb-3">Benefit Menarik</h2>
                    <p class="text-text font-lato">
                        Paket kompensasi kompetitif dengan berbagai tunjangan
                    </p>
                </div>
                <div
                    class="bg-white shadow-md p-6 rounded-xl text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="text-4xl mb-4">💡</div>
                    <h2 class="text-heading text-xl font-bold mb-3">Lingkungan Inovatif</h2>
                    <p class="text-text font-lato">
                        Budaya kerja yang mendorong kreativitas dan inovasi
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-accent p-12">
        <div class="container max-w-full">
            <div class="text-center mb-6">
                <h1 class="text-3xl lg:text-4xl font-bold text-heading mb-4">Tidak Menemukan Posisi yang Cocok?</h1>
                <p class="text-darkChoco text-lg lg:text-xl max-w-3xl mx-auto font-lato">
                    Kirimkan CV Anda kepada kami. Kami akan menghubungi Anda ketika ada posisi yang sesuai dengan
                    keahlian Anda.
                </p>
            </div>
            <div class="flex items-center justify-center">
                <a href="#" id="upload-cv"
                    class="px-8 py-3 bg-primary font-semibold text-lg text-white rounded-lg flex items-center gap-2 hover:bg-primary/90 transition-all duration-200 ease-in-out">
                    <i class="fa-solid fa-upload"></i>
                    Upload CV
                </a>
            </div>
        </div>
    </section>

    {{-- Upload CV --}}
    <div id="cvModal" class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
        <div class="close-modal absolute inset-0 bg-[#CBD0DC]/35 backdrop-blur-sm"></div>

        <div class="relative bg-white rounded-xl shadow-xl max-w-lg w-full my-4">
            <div class="p-8 flex justify-between items-center border-b-2 border-[#CBD0DC]">
                <div class="flex items-center gap-4">
                    <div
                        class="inline-flex justify-center items-center border-2 border-[#CBD0DC] w-12 h-12 rounded-full">
                        <i class="fas fa-cloud-arrow-up text-2xl text-darkChoco"></i>
                    </div>
                    <div>
                        <h1 class="text-heading font-semibold text-xl">Upload CV Anda</h1>
                        <h2 class="text-text font-medium text-sm">Kami akan menghubungi Anda jika tertarik</h2>
                    </div>
                </div>
                <div>
                    <a href="#"
                        class="close-modal flex justify-center items-center w-10 h-10 rounded-full border border-[#CBD0DC] hover:bg-darkChoco transition-all duration-300 ease-in-out group">
                        <i class="fa fa-times text-xl text-darkChoco group-hover:text-white"></i>
                    </a>
                </div>
            </div>
            <form action="{{ route('user.jobs.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-6 p-8 max-h-96 overflow-y-auto custom-scrollbar">
                @csrf
                <div class="space-y-3">
                    <div class="mb-2">
                        <label for="applicant_name" class="text-primary text-base font-medium">Nama Lengkap</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-user text-text"></i>
                        </div>
                        <input type="text" name="applicant_name" id="applicant_name" required
                            placeholder="Masukkan Nama Lengkap Anda"
                            class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>

                    <div class="mb-2">
                        <label for="date_of_birth" class="text-primary text-base font-medium">Tanggal Lahir</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-calendar-days text-text"></i>
                        </div>
                        <input type="date" name="date_of_birth" id="date_of_birth" required
                            class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>

                    <div class="mb-2">
                        <label for="applicant_email" class="text-primary text-base font-medium">Email</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-text"></i>
                        </div>
                        <input type="email" name="applicant_email" id="applicant_email" required
                            placeholder="Masukkan email Anda.."
                            class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>

                    <div class="mb-2">
                        <label for="applicant_phone_number" class="text-primary text-base font-medium">Nomor
                            Telepon</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-phone text-text"></i>
                        </div>
                        <input type="tel" name="applicant_phone_number" id="applicant_phone_number"
                            placeholder="Masukkan nomor telepon Anda.." required
                            class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>

                    <div class="mb-2">
                        <label for="applicant_experience" class="text-primary text-base font-medium">
                            Pengalaman Anda
                        </label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 top-4 left-0 pl-4 flex pointer-events-none">
                            <i class="fas fa-message text-text"></i>
                        </div>
                        <textarea name="applicant_experience" id="applicant_experience" placeholder="Cerita pengalaman Anda.."
                            rows="6" required
                            class="w-full pl-12 py-3 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-primary resize-none"></textarea>
                    </div>

                    <div class="mb-2">
                        <label for="applicant_link" class="text-primary text-base font-medium">
                            Link Portfolio / Github / LinkedIn
                        </label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-phone text-text"></i>
                        </div>
                        <input type="url" name="applicant_link" id="applicant_link" required
                            placeholder="https://www.github.com/username"
                            class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-secondary">
                    </div>

                    <div class="mb-2">
                        <label for="applicant_image" class="text-primary text-base font-medium">
                            Foto Anda
                        </label>
                    </div>

                    <div class="photo-group w-full space-y-3">
                        <!-- Tombol Upload -->
                        <div class="flex justify-center">
                            <label
                                class="upload-btn bg-orange-500 hover:bg-orange-600 w-full justify-center text-white px-5 py-2 rounded-lg font-semibold cursor-pointer flex items-center gap-2 transition">
                                <i class="fas fa-image"></i> Upload Foto
                                <input type="file" name="applicant_image" id="applicant_image" required
                                    accept="image/jpeg,image/png,image/webp" class="photo-input hidden" />
                            </label>
                        </div>

                        <div class="preview-container hidden opacity-0 transition-opacity duration-300">
                            <!-- Preview -->
                            <div class="w-full bg-gray-100 rounded-lg overflow-hidden flex justify-center items-center"
                                style="height: 350px;">
                                <img class="photo-preview hidden max-h-full object-contain" />
                            </div>

                            <!-- Tombol aksi -->
                            <div class="flex gap-3 mt-3">
                                <button
                                    class="action-btn hidden flex-1 bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg font-medium transition">
                                    Potong
                                </button>
                                <button
                                    class="delete-btn hidden flex-1 bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg font-medium transition">
                                    Hapus
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="upload-group">
                        <div class="mb-2">
                            <label for="applicant_file" class="text-primary text-base font-medium">Upload CV</label>
                        </div>
                        <input type="file" name="applicant_file" id="applicant_file" class="hidden"
                            accept=".pdf" required>
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
                                    PDF format, max. 5MB
                                </p>
                            </div>
                        </label>
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
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-primary to-secondary py-3 flex items-center justify-center text-white font-semibold text-lg rounded-lg cursor-pointer hover:from-secondary hover:to-primary">
                    <i class="fas fa-upload mr-2"></i>
                    Upload
                </button>
            </form>
        </div>
    </div>

    @foreach ($jobs as $job)
        {{-- Lamar Sekarang Start --}}
        <div id="modal-container-{{ $job->id }}"
            class="fixed inset-0 z-[99999] hidden justify-center items-end transition-all">
            <div class="close-apply-modal absolute inset-0 bg-black/40 backdrop-blur-md"></div>

            <div
                class="modal-content bg-white relative rounded-t-xl shadow-xl max-w-2xl w-full transform translate-y-full transition-transform duration-300 ease-out">
                <div class="p-6">
                    <div class="w-16 h-1 bg-secondary rounded-full mx-auto mb-4"></div>

                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-heading text-2xl font-bold">Form Lamaran</h1>
                        <a href=""
                            class="close-apply-modal w-10 h-10 rounded-full flex justify-center items-center border-2 border-darkChoco hover:bg-darkChoco transition-colors duration-200 ease-linear group">
                            <i class="fas fa-times text-xl text-darkChoco group-hover:text-white"></i>
                        </a>
                    </div>

                    <p class="text-text text-sm mb-6">
                        Isi form berikut untuk melamar posisi
                        <strong>
                            {{ $job->position }}
                        </strong>
                    </p>
                </div>

                <form action="{{ route('applicants.store', $job->id) }}" method="POST"
                    enctype="multipart/form-data"
                    class="space-y-6 max-h-96 overflow-y-auto p-6 border-t border-t-text/15 custom-scrollbar">
                    @csrf
                    <div class="space-y-3">

                        <input type="hidden" name="job_vacancy_id" id="job_vacancy_id"
                            value="{{ $job->id }}">

                        {{-- Nama Lengkap --}}
                        <div class="mb-2">
                            <label for="full_name" class="text-primary text-base font-medium">Nama Lengkap</label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-user text-text"></i>
                            </div>
                            <input type="text" name="full_name" id="full_name"
                                placeholder="Masukkan nama lengkap.." required
                                class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-secondary">
                        </div>

                        {{-- Date of Birth --}}
                        <div class="mb-2">
                            <label for="date_of_birth" class="text-primary text-base font-medium">Tanggal
                                Lahir</label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-calendar-days text-text"></i>
                            </div>
                            <input type="date" name="date_of_birth" id="date_of_birth" required
                                class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-secondary">
                        </div>

                        {{-- Email --}}
                        <div class="mb-2">
                            <label for="email" class="text-primary text-base font-medium">Email</label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-text"></i>
                            </div>
                            <input type="email" name="email" id="email" required
                                placeholder="Masukkan email Anda.."
                                class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-secondary">
                        </div>

                        {{-- Phone Number --}}
                        <div class="mb-2">
                            <label for="phone_number" class="text-primary text-base font-medium">Nomor Telepon</label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-phone text-text"></i>
                            </div>
                            <input type="tel" name="phone_number" id="phone_number" required
                                placeholder="Ex. +62xxx"
                                class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-secondary">
                        </div>

                        {{-- Experience --}}
                        <div class="mb-2">
                            <label for="experience" class="text-primary text-base font-medium">Pengalaman Anda</label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 top-4 pl-4 pointer-events-none">
                                <i class="fas fa-message text-text"></i>
                            </div>
                            <textarea name="experience" id="experience" placeholder="Ceritakan pengalaman kerja Anda yang relevan.."
                                rows="6" required
                                class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-secondary resize-none"></textarea>
                        </div>

                        {{-- Link --}}
                        <div class="mb-2">
                            <label for="link" class="text-primary text-base font-medium">Link Portfolio / Github /
                                LinkedIn</label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i class="fas fa-phone text-text"></i>
                            </div>
                            <input type="url" name="link" id="link" required
                                placeholder="https://www.github.com/username"
                                class="w-full pl-12 py-4 pr-4 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-secondary">
                        </div>

                        {{-- Employee Image --}}
                        <div class="mb-2">
                            <label for="employee_image" class="text-primary text-base font-medium">
                                Foto Anda
                            </label>
                        </div>

                        <div class="photo-group w-full space-y-3">
                            <!-- Tombol Upload -->
                            <div class="flex justify-center">
                                <label
                                    class="upload-btn bg-orange-500 hover:bg-orange-600 w-full justify-center text-white px-5 py-2 rounded-lg font-semibold cursor-pointer flex items-center gap-2 transition">
                                    <i class="fas fa-image"></i> Upload Foto
                                    <input type="file" name="applicant_picture" id="applicant_picture" required
                                        accept="image/jpeg,image/png,image/webp" class="photo-input hidden" />
                                </label>
                            </div>

                            <div class="preview-container hidden opacity-0 transition-opacity duration-300">
                                <!-- Preview -->
                                <div class="w-full bg-gray-100 rounded-lg overflow-hidden flex justify-center items-center"
                                    style="height: 350px;">
                                    <img class="photo-preview hidden max-h-full object-contain" />
                                </div>

                                <!-- Tombol aksi -->
                                <div class="flex gap-3 mt-3">
                                    <button
                                        class="action-btn hidden flex-1 bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg font-medium transition">
                                        Potong
                                    </button>
                                    <button
                                        class="delete-btn hidden flex-1 bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg font-medium transition">
                                        Hapus
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="flex flex-col items-center space-y-4">
                            <!-- Input file -->
                            <input id="photoInput" type="file" accept="image/*" class="border rounded p-2" />

                            <!-- Preview -->
                            <div
                                class="w-64 h-64 bg-gray-100 flex items-center justify-center overflow-hidden rounded-lg">
                                <img id="photoPreview" class="hidden max-w-full" />
                            </div>

                            <button id="cropBtn" class="hidden bg-blue-600 text-white px-4 py-2 rounded">Crop &
                                Upload</button>
                        </div> --}}

                        {{-- Upload CV --}}
                        <div class="upload-group">
                            <div class="mb-2">
                                <label for="experience" class="text-primary text-base font-medium">
                                    Upload CV Anda
                                </label>
                            </div>

                            <input type="file" name="cv" id="cv-{{ $job->id }}" class="hidden"
                                accept=".pdf" required>

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
                                        PDF format, max. 5MB
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

                        {{-- Button Submit --}}
                        <div class="flex justify-center items-center mt-4">
                            <button type="submit"
                                class="bg-secondary py-3 px-8 rounded-lg font-semibold text-white text-lg shadow-lg flex items-center gap-2 cursor-pointer hover:bg-secondary/90 hover:shadow-xl transition-all duration-200 ease-in-out">
                                <i class="fas fa-paper-plane"></i>
                                Kirim Lamaran
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- Lamar Sekarang End --}}

        {{-- Application Detail Start --}}
        <div id="modal-detail-{{ $job->id }}"
            class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
            <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

            <div
                class="bg-white max-w-3xl w-full rounded-xl shadow-2xl relative border border-text/20 overflow-hidden">
                <div class="bg-gradient-to-r from-heading via-primary to-secondary p-8 overflow-hidden relative">
                    <h2 class="text-2xl font-bold text-white mb-2">{{ $job->position }}</h2>
                    <div class="flex items-center gap-4 flex-wrap">
                        <span
                            class="bg-white/20 backdrop-blur-sm text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ $job->departement }}
                        </span>
                        <div class="flex items-center text-white/90 text-sm">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Diposting {{ $job->created_at->locale('id')->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>

                <div class="max-h-96 overflow-y-auto custom-scrollbar">
                    <div class="space-y-6 p-8">
                        <div
                            class="grid grid-cols-1 {{ $job->contract_duration ? 'md:grid-cols-2 lg:grid-cols-4' : 'md:grid-cols-3' }} gap-4">
                            <div class="bg-gray-100 rounded-lg p-4 text-center shadow-md">
                                <i class="fas fa-location-dot text-primary text-lg mb-2"></i>
                                <p class="text-sm text-text/80 mb-1">Lokasi</p>
                                <p class="font-semibold text-base text-text">{{ $job->location }}</p>
                            </div>
                            <div class="bg-gray-100 rounded-lg p-4 text-center shadow-md">
                                <i class="fas fa-clock text-primary text-lg mb-2"></i>
                                <p class="text-sm text-text/80 mb-1">Tipe Pekerjaan</p>
                                <p class="font-semibold text-base text-text capitalize">{{ $job->job_type }}</p>
                            </div>
                            <div class="bg-gray-100 rounded-lg p-4 text-center shadow-md">
                                <i class="fas fa-money-bill text-primary text-lg mb-2"></i>
                                <p class="text-sm text-text/80 mb-1">Gaji</p>
                                <p class="font-semibold text-base text-text">{{ $job->salary }}</p>
                            </div>
                            @if ($job->contract_duration)
                                <div class="bg-gray-100 rounded-lg p-4 text-center shadow-md">
                                    <i class="fas fa-briefcase text-primary text-lg mb-2"></i>
                                    <p class="text-sm text-text/80 mb-1">Durasi Kontrak</p>
                                    <p class="font-semibold text-base text-text">{{ $job->contract_duration }}</p>
                                </div>
                            @endif
                        </div>

                        <div class="space-y-2">
                            <h1 class="flex items-center text-text text-lg font-bold">
                                <i class="fas fa-file-alt text-primary mr-2"></i>
                                Deskripsi Pekerjaan
                            </h1>
                            <p class="bg-gray-100 rounded-lg p-4 shadow-md">
                                {{ $job->description }}
                            </p>
                        </div>

                        <div class="space-y-2">
                            <h1 class="flex items-center text-text text-lg font-bold">
                                <i class="fas fa-code text-primary mr-2"></i>
                                Keahlian yang Dibutuhkan
                            </h1>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($job->skills as $skill)
                                    <span
                                        class="px-3 py-1 text-sm font-medium text-primary bg-primary/10 border border-primary/40 rounded-md">
                                        {{ $skill }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-text/25 bg-gray-100 p-4">
                        <div class="flex justify-between items-center gap-4">
                            <button type="button"
                                class="close-modal px-6 py-3 border-2 border-gray-300 text-gray-700 font-medium rounded-lg bg-gray-100 hover:bg-gray-200 cursor-pointer transition-colors">
                                Tutup
                            </button>
                            <button type="button" data-id="{{ $job->id }}"
                                class="open-apply flex items-center px-6 py-3 bg-gradient-to-r from-primary to-secondary text-white font-medium rounded-lg cursor-pointer transition-colors hover:from-secondary hover:to-primary">
                                Lamar Sekarang
                                <i class="fas fa-chevron-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Application Detail End --}}
    @endforeach
</body>

<script>
    (function() {
        const searchEl = document.getElementById('searchJob');
        const filterEl = document.getElementById('filterJob');
        const jobsEl = document.getElementById('jobList');
        const searchUrl = `{{ route('jobs.search') }}`;

        // 🕒 Debounce helper (supaya fetch tidak terlalu sering dipanggil)
        function debounce(fn, delay) {
            let timer;
            return function(...args) {
                clearTimeout(timer);
                timer = setTimeout(() => fn.apply(this, args), delay);
            };
        }

        // 🚀 Ambil & render hasil pencarian
        async function fetchAndRender() {
            try {
                const q = searchEl.value.trim();
                const type = filterEl.value;

                const url = new URL(searchUrl, window.location.origin);
                if (q) url.searchParams.set('q', q);
                if (type && type !== '-') url.searchParams.set('job_type', type);

                const res = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });
                if (!res.ok) throw new Error('Network error');

                const html = await res.text();

                const pagination = document.getElementById('paginationContainer');
                if (pagination) {
                    if (q || (type && type !== '-')) {
                        pagination.classList.add('hidden');
                    } else {
                        pagination.classList.remove('hidden');
                    }
                }

                // Jika hasil kosong
                if (!html.trim()) {
                    jobsEl.innerHTML = `
                    <div class="flex flex-col justify-center items-center py-20 col-span-full">
                        <i class="fas fa-circle-exclamation text-5xl mb-4 text-gray-400"></i>
                        <p class="text-lg font-medium text-gray-500">Tidak ada hasil yang sesuai</p>
                    </div>
                `;
                } else {
                    jobsEl.innerHTML = html;
                }
            } catch (err) {
                console.error(err);
                jobsEl.innerHTML = `
                <tr>
                    <td colspan="6" class="text-center py-10 text-red-500">
                        <i class="fas fa-triangle-exclamation text-3xl mb-2"></i>
                        <p class="text-lg font-medium">Terjadi kesalahan saat memuat data</p>
                    </td>
                </tr>
            `;
            }
        }

        const debouncedFetch = debounce(fetchAndRender, 300);

        // 🔍 Event input pencarian
        searchEl.addEventListener('input', debouncedFetch);

        // 🧹 Event tombol X di search input (jika user klik clear)
        searchEl.addEventListener('search', fetchAndRender);

        // 🎛️ Event filter status
        filterEl.addEventListener('change', fetchAndRender);

        // 🟢 Dropdown menu (aktifkan/ nonaktifkan/ hapus)
        document.addEventListener('click', function(e) {
            const openDetailBtn = e.target.closest('.open-detail-application');
            if (openDetailBtn) {
                const id = openDetailBtn.dataset.id;
                const modal = document.getElementById(`modal-detail-${id}`);
                if (modal) {
                    modal.classList.toggle('hidden');
                    modal.classList.toggle('flex');
                }
            }

            const openApplyBtn = e.target.closest('.open-apply');
            if (openApplyBtn) {
                e.preventDefault();
                const jobId = openApplyBtn.dataset.id || openApplyBtn.closest('[id^="modal-detail-"]').id
                    .replace('modal-detail-', '');

                const applyModalContainer = document.querySelector('#modal-container-' + jobId);
                const applyModalContent = applyModalContainer?.querySelector('.modal-content');

                // Tutup modal detail (kalau terbuka)
                const detailModal = document.querySelector('#modal-detail-' + jobId);
                if (detailModal) {
                    detailModal.classList.add('hidden');
                    detailModal.classList.remove('flex');
                }

                // Buka modal apply
                if (applyModalContainer) {
                    applyModalContainer.classList.remove('hidden');
                    applyModalContainer.classList.add('flex');

                    // Animasi muncul dari bawah
                    setTimeout(() => {
                        applyModalContent?.classList.remove('translate-y-full');
                    }, 100);
                }
            }

            // 🔹 Tutup modal apply
            const closeApplyBtn = e.target.closest('.close-apply-modal');
            if (closeApplyBtn) {
                const container = closeApplyBtn.closest('[id^="modal-container-"]');
                const content = container.querySelector('.modal-content');
                content.classList.add('translate-y-full');
                setTimeout(() => {
                    container.classList.add('hidden');
                    container.classList.remove('flex');
                }, 300);
            }
        });

        // // Tutup dropdown jika klik di luar
        // document.addEventListener('click', function(e) {
        //     const isDropdown = e.target.closest('.dropdown-button');
        //     const isMenu = e.target.closest('[id^="dropdown-menu-"]');
        //     if (!isDropdown && !isMenu) {
        //         document.querySelectorAll('[id^="dropdown-menu-"]').forEach(menu => {
        //             menu.classList.remove('scale-y-100');
        //             menu.classList.add('scale-y-0');
        //         });
        //     }
        // });
    })();
</script>

<script>
    document.querySelectorAll(".photo-group").forEach((group) => {
        const input = group.querySelector(".photo-input");
        const previewContainer = group.querySelector(".preview-container");
        const preview = group.querySelector(".photo-preview");
        const actionBtn = group.querySelector(".action-btn");
        const deleteBtn = group.querySelector(".delete-btn");
        let cropper = null;
        let isCropped = false;

        // Upload foto
        input.addEventListener("change", (e) => {
            const file = e.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = () => {
                preview.src = reader.result;
                preview.classList.remove("hidden");
                previewContainer.classList.remove("hidden");
                setTimeout(() => previewContainer.classList.add("opacity-100"), 10);

                actionBtn.classList.remove("hidden");
                deleteBtn.classList.remove("hidden");

                // Reset tombol
                isCropped = false;
                actionBtn.textContent = "Potong";
                actionBtn.classList.remove("bg-blue-500", "hover:bg-blue-600");
                actionBtn.classList.add("bg-green-500", "hover:bg-green-600");

                // Cropper baru
                if (cropper) cropper.destroy();
                cropper = new Cropper(preview, {
                    aspectRatio: 1,
                    viewMode: 1,
                    autoCropArea: 1,
                    dragMode: "move",
                });
            };
            reader.readAsDataURL(file);
        });

        // Tombol Potong / Ganti Foto
        actionBtn.addEventListener("click", (e) => {
            e.preventDefault();

            if (!isCropped && cropper) {
                const canvas = cropper.getCroppedCanvas({
                    width: 400,
                    height: 400,
                });

                // Buat blob file baru agar dikirim ke server
                canvas.toBlob((blob) => {
                    const file = new File([blob], "cropped-photo.jpg", {
                        type: "image/jpeg"
                    });

                    // Buat ulang input file agar punya file hasil crop
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    input.files = dataTransfer.files;
                }, "image/jpeg");

                preview.src = canvas.toDataURL();
                cropper.destroy();
                cropper = null;
                isCropped = true;

                // Ubah tombol jadi "Ganti Foto"
                actionBtn.textContent = "Ganti Foto";
                actionBtn.classList.remove("bg-green-500", "hover:bg-green-600");
                actionBtn.classList.add("bg-blue-500", "hover:bg-blue-600");
            } else {
                input.click(); // buka file picker lagi
            }
        });

        // Tombol Hapus
        deleteBtn.addEventListener("click", (e) => {
            e.preventDefault();
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }

            preview.src = "";
            preview.classList.add("hidden");
            actionBtn.classList.add("hidden");
            deleteBtn.classList.add("hidden");
            input.value = "";
            isCropped = false;

            // Sembunyikan container dengan animasi halus
            previewContainer.classList.remove("opacity-100");
            setTimeout(() => previewContainer.classList.add("hidden"), 300);
        });

        // 🔒 Cegah form dikirim sebelum foto dipotong
        const form = group.closest("form");
        form.addEventListener("submit", (event) => {
            if (!isCropped) {
                event.preventDefault();
                alert("Silakan potong foto terlebih dahulu sebelum mengirim lamaran!");
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1500,
        });
    @endif
</script>

<script>
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

        // fungsi render file (hanya PDF)
        const renderFile = (file) => {
            if (!file) return;

            if (file.size > 5 * 1024 * 1024) {
                alert('Ukuran file maksimal 5MB!');
                return;
            }

            // reset tampilan
            fileName.textContent = file.name;
            fileSize.textContent = `${(file.size / 1024).toFixed(1)} KB`;
            previewImage.src = "";
            previewImage.classList.add('hidden');

            const oldPdfIcon = group.querySelector('.pdf-icon');
            if (oldPdfIcon) oldPdfIcon.remove();

            // hanya izinkan PDF
            if (file.type === "application/pdf") {
                const pdfUrl = URL.createObjectURL(file);

                let pdfIcon = document.createElement("i");
                pdfIcon.className = "fa-solid fa-file-pdf text-red-500 text-5xl pdf-icon cursor-pointer";
                pdfIcon.onclick = () => window.open(pdfUrl, "_blank");

                preview.querySelector('.flex').prepend(pdfIcon);
            } else {
                alert('Hanya file PDF yang diperbolehkan!');
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

<script src="{{ asset('js/jobs.js') }}"></script>
<script src="{{ asset('asset-admin/js/preview-file.js') }}"></script>

</html>
