<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cipta Muda Solusi - Faq</title>

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

    <section id="hero"
        class="relative h-screen bg-gradient-to-br from-primary/10 to-secondary/10 flex items-center justify-center text-center">
        <div class="absolute top-28 right-10 w-32 h-32 bg-accent rotate-45 animate-pulse"></div>
        <div
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-primary/20 rounded-full blur-md">
        </div>
        <div class="absolute bottom-28 left-10 w-32 h-32 bg-accent rotate-45 animate-pulse"></div>

        <div class="container max-w-full">
            <h1
                class="text-6xl font-bold mb-6 bg-gradient-to-r from-primary to-secondary text-transparent bg-clip-text leading-relaxed">
                Pertanyaan yang Sering Ditanyakan
            </h1>
            <p class="font-lato text-text text-xl font-semibold mb-6">
                Temukan jawaban untuk pertanyaan yang sering diajukan tentang layanan kami
            </p>
            <div class="flex items-center justify-center">
                <a href="#question"
                    class="bg-gradient-to-r bg-primary to-secondary py-4 px-6 text-xl font-semibold text-white flex items-center rounded-xl relative z-10 group">
                    Lihat Pertanyaan
                    <i
                        class="fas fa-arrow-right ml-2 group-hover:rotate-90 transition-transform duration-200 ease-in-out"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="question" class="p-12 bg-section">
        <div class="container max-w-full">
            <div class="flex flex-col gap-8">
                @foreach ($faqs as $faq)
                    <div class="flex flex-col gap-6">
                        <div class="bg-white shadow-1 rounded-xl transition-colors duration-200 ease-in-out">
                            <div
                                class="flex items-center justify-between px-8 py-6 hover:bg-accent/30 transition-all duration-200 ease-in-out">
                                <h1 class="font-semibold text-2xl text-heading">
                                    {{ $faq->question }}
                                </h1>
                                <div
                                    class="dropdown-button w-10 h-10 rounded-full flex justify-center items-center cursor-pointer hover:bg-text/20 transition-all duration-300 ease-in-out">
                                    <i
                                        class="dropdown-icon fas fa-chevron-down text-2xl text-heading transition-transform duration-300"></i>
                                </div>
                            </div>

                            <div
                                class="dropdown-content opacity-0 scale-y-0 max-h-0 overflow-hidden transition-all duration-500 ease-in-out origin-top">
                                <p class="px-8 text-base font-medium text-text leading-relaxed">
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="bg-gradient-to-br from-primary to-secondary py-16 flex flex-col justify-center items-center">
        <h1 class="text-3xl text-white font-bold mb-5">Masih Ada Pertanyaan?</h1>
        <p class="text-white/90 font-lato font-medium text-base mb-7">
            Tim kami siap membantu menjawab pertanyaanspesifik Anda
        </p>
        <a href="#" id="add-question"
            class="bg-white px-8 py-3 rounded-lg text-primary flex items-center text-base font-semibold cursor-pointer hover:bg-white/90 transition-colors duration-200 ease-in-out">
            <i class="fas fa-headset mr-2"></i>
            Hubungi Kami Sekarang
        </a>
    </div>

    <div id="form-modal" class="fixed inset-0 z-[99999] items-center justify-center p-4 hidden animate-fade-in">
        <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <div class="relative bg-white rounded-xl shadow-xl max-w-md w-full my-4">
            <div class="flex items-center justify-between p-6 border-b border-text/25">
                <div>
                    <h1 class="text-heading text-2xl font-bold">Ada pertanyaan?</h1>
                    <h2 class="text-text font-lato">Tanyakan saya kepada kami</h2>
                </div>
                <div>
                    <a href="#"
                        class="close-modal flex items-center justify-center w-10 h-10 p-0 rounded-full hover:bg-secondary/25 transition-colors duration-200 ease-in-out">
                        <i class="fas fa-times text-primary"></i>
                    </a>
                </div>
            </div>

            <form action="{{ route('user.faqs.store') }}" id="question-form" method="POST" class="space-y-6 p-6">
                @csrf
                <div class="space-y-3">
                    <div class="mb-2">
                        <label for="email_input" class="text-base text-heading font-medium">Email (Opsional)</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-text"></i>
                        </div>
                        <input type="email" name="email_input" id="email_input" placeholder="Masukkan email"
                            class="w-full pl-10 py-3 pr-3 border border-text/25 text-darkChoco rounded-lg text-base focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div class="mb-2">
                        <label for="question_input" class="text-base text-heading font-medium">Pertanyaan Anda</label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-0 left-0 pl-3 top-4 flex pointer-events-none">
                            <i class="fas fa-message text-text"></i>
                        </div>
                        <textarea name="question_input" id="question_input" rows="5" maxlength="150"
                            placeholder="Masukkan pertanyaan (Max. 300 karakter)" required
                            class="w-full pl-10 pr-3 py-3 border border-text/25 text-darkChoco rounded-lg text-base resize-none focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                        <p class="text-sm text-text">
                            <span id="char-count">0</span>/150 Karakter
                        </p>
                    </div>
                    <p class="text-sm text-text font-lato">Tim kami akan merespon pertanyaan Anda segera</p>
                </div>

                <div class="flex gap-3 pt-2">
                    <button type="button"
                        class="close-modal flex justify-center items-center py-3 border border-text/25 flex-1 gap-2 text-primary font-semibold rounded-lg hover:bg-primary hover:text-white hover:transition-all duration-300 ease-in-out cursor-pointer">
                        <i class="fas fa-times"></i>
                        Batal
                    </button>
                    <button type="submit" id="submit-button" disabled
                        class="flex-1 flex justify-center items-center py-3 bg-primary text-white font-semibold gap-2 rounded-lg hover:bg-primary/90 transition-all duration-300 ease-in-out cursor-pointer disabled:bg-primary disabled:opacity-50 disabled:cursor-not-allowed">
                        <i class="fas fa-paper-plane"></i>
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
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

<script src="{{ asset('js/faq.js') }}"></script>


</html>
