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
                <div id="clock" data-time="{{ now()->timezone('Asia/Jakarta')->format('Y-m-d\TH:i:s') }}"
                    class="mr-10 text-darkChoco font-bold text-xl lg:text-2xl relative z-50"></div>
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
                class="font-bold text-3xl md:text-4xl lg:text-6xl mx-auto mb-6 text-center leading-snug bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text max-w-4xl">
                Bergabung Menjadi Bagian dari Tim Kami
            </h1>
            <p class="font-semibold text-base md:text-lg lg:text-xl text-text max-w-2xl lg:max-w-6xl mx-6 lg:mx-auto">
                Wujudkan karir impian Anda bersama Cipta Muda Solusi. Kami mencari talenta terbaik untuk bergabung dalam
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

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 sm:gap-6 w-full md:w-auto">
                    <form action="{{ route('user.jobs.index') }}#jobs" method="GET" class="w-full sm:w-72">
                        <div class="flex items-center">
                            <!-- Input -->
                            <div class="relative flex-1">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-magnifying-glass text-gray-400"></i>
                                </span>
                                <input type="search" name="search" id="search" placeholder="Cari Lowongan.."
                                    value="{{ $search }}"
                                    class="w-full h-12 pl-10 pr-3 border border-gray-300 rounded-l-lg text-sm text-black placeholder-gray-400">
                            </div>

                            <!-- Button -->
                            <button type="submit"
                                class="h-12 w-12 bg-secondary flex items-center justify-center text-white rounded-r-lg hover:bg-secondary/90 transition">
                                <i class="fas fa-paper-plane text-sm"></i>
                            </button>
                        </div>
                    </form>

                    {{-- <div class="flex-1 sm:flex-none sm:w-48">
                        <select name="filter" id="filter"
                            class="p-3 w-full rounded-lg border border-text text-base focus:outline-none text-black2" onchange="this.form.submit()">
                            <option value="-" {{ request('filter') == '-' ? 'selected' : '' }}>Semua Kategori</option>
                            <option value="-">IT Solution</option>
                            <option value="-">Sales & Marketing</option>
                            <option value="-">Event Organizer</option>
                        </select>
                    </div> --}}
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mx-4 md:mx-10">
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
                                    class="text-white bg-secondary px-3 py-2 rounded-sm">{{ $job->departement }}</span>
                            </div>
                            <p class="font-lato text-sm max-w-md text-text mb-3">
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
                            <div class="flex  flex-wrap items-center gap-4 mb-5">
                                @foreach ($job->skills as $skill)
                                    <div class="p-1 text-xs text-primary border-1 border-text rounded-sm">
                                        {{ $skill }}
                                    </div>
                                @endforeach
                            </div>
                            <div class="flex justify-between items-center">
                                <h3 class="text-sm font-medium text-text">Diposting
                                    {{ $job->created_at->locale('id')->diffForHumans() }}
                                </h3>
                                <a href="#" data-id="{{ $job->id }}"
                                    class="open-apply bg-primary px-4 py-2 text-white font-medium flex items-center text-sm rounded-sm hover:bg-primary/90">
                                    Lamar Sekarang
                                    <i class="fas fa-chevron-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
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
        {{-- Lamar Sekarang --}}
        <div id="modal-container-{{ $job->id }}"
            class="fixed inset-0 z-[99999] hidden justify-center items-end transition-all">
            <div class="close-apply-modal absolute inset-0 bg-black/40 backdrop-blur-md"></div>

            <div
                class="modal-content bg-white relative rounded-t-xl shadow-xl max-w-lg w-full transform translate-y-full transition-transform duration-300 ease-out">
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
    @endforeach
</body>

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
    // Watch
    const clockEl = document.getElementById("clock");
    let serverTime = new Date(clockEl.dataset.time);

    const updateClock = () => {
        serverTime.setSeconds(serverTime.getSeconds() + 1);

        let hours = serverTime.getHours();
        let minutes = serverTime.getMinutes();
        let seconds = serverTime.getSeconds();

        let ampm = hours >= 12 ? "PM" : "AM";
        hours = hours % 12 || 12;

        clockEl.innerText =
            `${hours.toString().padStart(2, '0')}:` +
            `${minutes.toString().padStart(2, '0')}:` +
            `${seconds.toString().padStart(2, '0')} ${ampm}`;
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

<script src="{{ asset('js/jobs.js') }}"></script>
<script src="{{ asset('asset-admin/js/preview-file.js') }}"></script>

</html>
