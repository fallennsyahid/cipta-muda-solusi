<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cipta Muda Solusi - 404 Not Found</title>
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

<body class="bg-accent flex items-center justify-center min-h-screen">
    <div class="text-center px-6">
        <h1 class="text-[10rem] font-bold text-primary leading-none">404</h1>
        <h2 class="text-3xl font-semibold text-primary mt-2">Halaman Tidak Ditemuka</h2>
        <p class="text-lg text-primary/80 mt-4">
            Sepertinya halaman yang kamu cari tidak tersedia atau sudah dipindahkan.
        </p>

        <a href=""
            onclick="if(document.referrer !== '') { history.back(); } else { window.location.href = '/'; }"
            class="inline-block mt-8 px-6 py-3 rounded-lg text-white font-medium bg-primary hover:bg-secondary transition duration-300">
            Kembali ke Beranda
        </a>

        <div class="mt-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto w-40 h-40 text-primary opacity-70" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17.25L4.5 12m0 0l5.25-5.25M4.5 12h15" />
            </svg>
        </div>
    </div>
</body>

</html>
