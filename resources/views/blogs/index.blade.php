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
                <div class="relative z-10 mr-10 group ">
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

    <section id="hero"
        class="relative h-screen bg-gradient-to-br from-primary/10 to-secondary/10 flex items-center justify-center text-center">

        <div class="absolute right-10 top-28 w-32 h-32 bg-accent rotate-45 animate-pulse"></div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-primary/20 rounded-full blur-md">
        </div>
        <div class="absolute left-10 bottom-28 w-32 h-32 bg-accent rotate-45 animate-pulse"></div>

        <div class="container max-w-full">
            <h1 class="font-bold text-6xl text-heading mb-6">Blog & Insight</h1>
            <p class="max-w-3xl text-text mx-auto font-semibold text-xl font-lato mb-6">
                Dapatkan wawasan terbaru tentang teknologi, tips pengembangan, dan tren industri dari tim ahli kami
            </p>
            <div class="flex items-center justify-center">
                <a href="#blogs"
                    class="flex items-center justify-center bg-gradient-to-br from-primary to-secondary px-8 py-4 text-white text-xl font-semibold rounded-xl shadow-2 relative z-10 group">
                    Lihat Blog
                    <i
                        class="fas fa-arrow-right ml-2 group-hover:rotate-90 transition-transform duration-200 ease-in-out"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="blogs" class="bg-section">
        <div class="container max-w-full">
            <div class="p-8 border-b border-b-text flex flex-wrap items-center gap-3">
                <button type="button"
                    class="bg-primary py-3 px-4 text-white font-medium text-base rounded-full cursor-pointer">
                    Semua
                </button>
                <button type="button"
                    class="bg-accent py-3 px-4 text-text font-medium text-base rounded-full cursor-pointer hover:bg-primary hover:text-white transition-colors duration-300 ease-in-out">
                    Teknologi
                </button>
                <button type="button"
                    class="bg-accent py-3 px-4 text-text font-medium text-base rounded-full cursor-pointer hover:bg-primary hover:text-white transition-colors duration-300 ease-in-out">
                    Teknologi
                </button>
                <button type="button"
                    class="bg-accent py-3 px-4 text-text font-medium text-base rounded-full cursor-pointer hover:bg-primary hover:text-white transition-colors duration-300 ease-in-out">
                    Teknologi
                </button>
                <button type="button"
                    class="bg-accent py-3 px-4 text-text font-medium text-base rounded-full cursor-pointer hover:bg-primary hover:text-white transition-colors duration-300 ease-in-out">
                    Teknologi
                </button>
                <button type="button"
                    class="bg-accent py-3 px-4 text-text font-medium text-base rounded-full cursor-pointer hover:bg-primary hover:text-white transition-colors duration-300 ease-in-out">
                    Teknologi
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 m-8 gap-8">
                @foreach ($blogs as $blog)
                    <div class="bg-white border-1 border-text shadow-1 rounded-xl">
                        <div class="aspect-video overflow-hidden rounded-t-xl">
                            <img src="{{ Storage::url($blog->image) }}" alt=""
                                class="w-full h-full opacity-90 object-cover hover:opacity-100 hover:scale-105 transition-all duration-300">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center gap-3 mb-3">
                                <span
                                    class="bg-secondary/30 text-primary px-3 py-1 text-xs rounded-full">{{ $blog->category }}</span>
                                <p class="flex items-center text-text text-xs">
                                    <i class="fas fa-calendar text-base mr-1.5"></i>
                                    {{ $blog->created_at->locale('id')->translatedFormat('d F Y') }}
                                </p>
                                <p class="text-text text-xs">{{ $blog->created_at->locale('id')->diffForHumans() }}</p>
                            </div>
                            <h1 class="text-heading font-bold text-xl mb-3">
                                {{ $blog->title }}
                            </h1>
                            <p class="font-laro text-text text-base mb-4">
                                {{ $blog->description }}
                            </p>
                            <div class="flex justify-between">
                                <span class="flex items-center text-text text-sm">
                                    <i class="fas fa-user mr-2"></i>
                                    {{ $blog->author }}
                                </span>
                                <a href="{{ route('user-blog-show', $blog->slug) }}"
                                    class="text-primary
                                    text-sm flex items-center hover:text-primary/80 transition-colors duration-200">
                                    Baca Selengkapnya
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>
