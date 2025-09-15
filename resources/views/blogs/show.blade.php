<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cipta Muda Solusi - Blog</title>

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

<body class="bg-[#f8fafc]">
    <section id="hero" class="py-8">
        <div class="max-w-4xl mx-auto px-8">
            <a href="{{ route('user.blogs.index') }}"
                class="inline-flex items-center text-base font-medium text-primary hover:text-primary/80 mb-8">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Blog
            </a>

            <div class="mb-6">
                <span class="bg-primary/10 text-primary px-3 py-1 rounded-full font-medium text-sm">
                    {{ $blog->category }}
                </span>
            </div>

            <h1 class="text-4xl md:text-5xl font-bold text-heading mb-6 text-balance">
                {{ $blog->title }}
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-text mb-8">
                <div class="flex items-center gap-2">
                    <i class="fas fa-user"></i>
                    <span class="font-medium">{{ $blog->author }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-calendar"></i>
                    <span class="">{{ $blog->created_at->locale('id')->translatedFormat('d F Y') }}</span>
                </div>
            </div>

            <div class="mb-8">
                <button type="button" id="shareBtn" data-url="{{ route('user-blog-show', $blog->slug) }}"
                    data-title="{{ $blog->title }}" data-category="{{ $blog->category }}"
                    class="flex items-center gap-2 bg-transparent text-lg rounded-lg border-2 border-text/25 text-primary px-6 py-2 cursor-pointer hover:bg-secondary/15">
                    <i class="fas fa-share-nodes"></i>
                    Share
                </button>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <div class="max-w-4xl mx-auto px-8">
            <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
                <img src="{{ Storage::url($blog->image) }}" alt="" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <article class="mb-16">
        <div class="max-w-4xl mx-auto px-8">
            <div class="font-lato text-xl prose">
                {!! $blog->content !!}
            </div>
        </div>
    </article>

</body>

<script src="{{ asset('js/blog.js') }}"></script>

</html>
