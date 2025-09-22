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
    <x-header>
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
    </x-header>
    {{-- Header Start --}}

    <section id="hero"
        class="relative h-screen bg-gradient-to-br from-primary/10 to-secondary/10 flex items-center justify-center text-center">

        <div class="absolute right-10 top-28 w-32 h-32 bg-accent rotate-45 animate-pulse -z-10"></div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-primary/20 rounded-full blur-md">
        </div>
        <div class="absolute left-10 bottom-28 w-32 h-32 bg-accent rotate-45 animate-pulse -z-10"></div>

        <div class="container max-w-full">
            <h1 class="font-bold text-5xl lg:text-6xl text-heading mb-6">Blog & Insight</h1>
            <p class="max-w-3xl text-text mx-auto font-semibold text-xl font-lato mb-6">
                Dapatkan wawasan terbaru tentang teknologi, tips pengembangan, dan tren industri dari tim ahli kami
            </p>
            <div class="flex items-center justify-center">
                <a href="#blogs"
                    class="flex items-center justify-center bg-gradient-to-br from-primary to-secondary py-3 lg:py-4 px-5 lg:px-6 text-lg lg:text-xl text-white font-semibold rounded-xl shadow-2 relative z-10 group">
                    Lihat Blog
                    <i
                        class="fas fa-arrow-right ml-2 group-hover:rotate-90 transition-transform duration-200 ease-in-out"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="blogs" class="bg-section">
        <div class="container max-w-full">
            {{-- <div class="p-8 border-b border-b-text flex flex-wrap items-center gap-3">
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
            </div> --}}

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
                                @if ($blog->is_featured === 1)
                                    <i class="fas fa-star text-yellow-500 text-sm"></i>
                                @endif
                            </div>
                            <h1 class="text-heading font-bold text-xl mb-3">
                                {{ $blog->title }}
                            </h1>
                            <p class="font-laro text-text text-base mb-4">
                                {{ $blog->description }}
                            </p>
                            <div class="flex justify-between">
                                <div class="flex items-center text-text text-sm gap-2">
                                    <span
                                        class="w-6 h-6 bg-text/25 flex items-center justify-center rounded-full overflow-hidden">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    {{ $blog->author }}
                                </div>
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

            <div class="flex justify-end mt-4">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>
</body>

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
</script>

</html>
