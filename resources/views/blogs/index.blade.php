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
                            <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}"
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
                                <p class="text-text text-xs">{{ $blog->created_at->locale('id')->diffForHumans() }}
                                </p>
                                @if ($blog->is_featured === 1)
                                    <i class="fas fa-star text-yellow-500 text-sm"></i>
                                @endif
                            </div>
                            <h1 class="text-heading font-bold text-xl mb-3 truncate">
                                {{ $blog->title }}
                            </h1>
                            <div class="mb-4">
                                <p class="font-lato text-text text-base">
                                    {!! $blog->description !!}
                                </p>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex items-center text-text text-sm gap-2">
                                    <span class="flex items-center text-sm text-text">
                                        @if (optional($blog->user)->profile_picture)
                                            <img src="{{ Storage::url($blog->user->profile_picture) }}"
                                                alt="{{ $blog->user->name }}"
                                                class="w-6 h-6 rounded-full mr-2 object-cover">
                                            {{ $blog->user->name }}
                                        @elseif ($blog->user)
                                            <img src="{{ Avatar::create($blog->user->name)->toBase64() }}"
                                                alt="{{ $blog->user->name }}"
                                                class="w-6 h-6 rounded-full mr-2 object-cover">
                                            {{ $blog->user->name }}
                                        @else
                                            <img src="{{ Avatar::create('Unknown')->toBase64() }}" alt="Unknown"
                                                class="w-6 h-6 rounded-full mr-2 object-cover">
                                            <span class="italic text-gray-500">Akun sudah dihapus</span>
                                        @endif
                                    </span>
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

    // Navbar Fixed
    const navbar = document.querySelector('#nav-menu');
    const toTop = document.querySelector('#to-top');
    const header = document.querySelector('header');
    let isVisible = false;

    window.addEventListener('scroll', function() {
        const threshold = header.offsetHeight;

        if (window.scrollY > threshold && !isVisible) {
            isVisible = true;
            header.classList.add('navbar-fixed');
            // header.classList.remove('z-10');
            // navbar.classList.add('navbar-fixed');
            toTop.classList.remove('hidden', 'toTop-2');
            toTop.classList.add('flex', 'toTop-1');
        } else if (window.scrollY <= threshold && isVisible) {
            isVisible = false;
            header.classList.remove('navbar-fixed');
            // header.classList.remove('z-10');
            // navbar.classList.remove('navbar-fixed');
            toTop.classList.remove('flex', 'toTop-1');
            toTop.classList.add('toTop-2');
        }
    });
</script>


</html>
