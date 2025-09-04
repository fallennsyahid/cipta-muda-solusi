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
                    Development
                </span>
            </div>

            <h1 class="text-4xl md:text-5xl font-bold text-heading mb-6 text-balance">
                Panduan Memilih Framework Web Development yang Tepat
            </h1>

            <div class="flex flex-wrap items-center gap-6 text-text mb-8">
                <div class="flex items-center gap-2">
                    <i class="fas fa-user"></i>
                    <span class="font-medium">Author</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-calendar"></i>
                    <span class="">10 Januari 2089</span>
                </div>
            </div>

            <div class="mb-8">
                <button type="button"
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
                <img src="{{ asset('landing/webp/blogs/blog-1.webp') }}" alt=""
                    class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <article class="mb-16">
        <div class="max-w-4xl mx-auto px-8">
            <div class="font-lato text-xl text-primary">
                <p>
                    Transformasi digital telah menjadi kebutuhan mendesak bagi semua jenis bisnis, termasuk Usaha Kecil
                    dan
                    Menengah (UKM). Pandemi COVID-19 telah mempercepat adopsi teknologi digital, dan UKM yang tidak
                    beradaptasi berisiko tertinggal dari kompetitor.
                </p>

                <h2 class="text-2xl font-semibold mt-6">Apa itu Transformasi Digital?</h2>
                <p>
                    Transformasi digital adalah proses mengintegrasikan teknologi digital ke dalam semua aspek bisnis,
                    mengubah cara perusahaan beroperasi dan memberikan nilai kepada pelanggan. Ini bukan hanya tentang
                    menggunakan teknologi, tetapi mengubah mindset dan budaya perusahaan.
                </p>

                <h2 class="text-2xl font-semibold mt-6">Manfaat untuk UKM</h2>
                <ol class="list-decimal list-inside space-y-2">
                    <li>
                        <strong>Efisiensi Operasional</strong> – Otomatisasi proses bisnis dapat menghemat waktu dan
                        mengurangi kesalahan manual. Sistem manajemen inventori digital, misalnya, dapat membantu UKM
                        melacak stok dengan lebih akurat.
                    </li>
                    <li>
                        <strong>Jangkauan Pasar yang Lebih Luas</strong> – Platform e-commerce dan media sosial
                        memungkinkan
                        UKM menjangkau pelanggan di luar area geografis mereka, membuka peluang pasar yang lebih besar.
                    </li>
                    <li>
                        <strong>Pengambilan Keputusan Berbasis Data</strong> – Tools analitik membantu UKM memahami
                        perilaku
                        pelanggan dan tren pasar, memungkinkan pengambilan keputusan yang lebih informed.
                    </li>
                </ol>

                <h2 class="text-2xl font-semibold mt-6">Langkah-langkah Memulai</h2>
                <p>
                    Mulailah dengan mengidentifikasi proses bisnis yang paling membutuhkan digitalisasi. Investasi tidak
                    harus besar – mulai dari tools sederhana seperti sistem POS digital atau platform media sosial untuk
                    marketing.
                </p>
            </div>
        </div>
    </article>

</body>

</html>
