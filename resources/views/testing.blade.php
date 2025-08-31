<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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

<body class="bg-gray-100">
    <div class="relative w-full max-w-6xl mx-auto overflow-hidden rounded-2xl">

        <!-- Container untuk slide -->
        <div class="flex transition-transform duration-700" id="sliderWrapper">
            <!-- Maps -->
            <div id="maps" class="w-full flex-shrink-0">
                <div class="flex flex-wrap md:flex-nowrap gap-10">
                    <div class="w-full md:w-1/2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.0444291674!2d-118.74139030403776!3d34.020608403183566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Amerika%20Serikat!5e0!3m2!1sid!2sid!4v1756348054105!5m2!1sid!2sid"
                            loading="lazy" class="rounded-lg w-full h-100"></iframe>
                    </div>
                    <div class="w-full md:w-1/2 p-16 flex flex-col justify-center items-center">
                        <h1 class="font-bold text-4xl text-heading text-center mb-8">Kunjungi Kami</h1>
                        <p class="font-lato text-text text-lg text-center max-w-xl mb-8">
                            Datang dan temui tim kami secara langsung. Kami selalu terbuka untuk berbincang dan
                            berkolaborasi.
                        </p>
                        <div class="flex justify-center">
                            <a href="https://maps.app.goo.gl/MEj1GV4VQM4ft1UVA" target="_blank"
                                class="py-3 px-5 bg-secondary text-white font-medium text-base rounded-lg flex items-center justify-center hover:bg-primary transition-colors duration-300 ease-in-out">
                                <i class="fas fa-map-location-dot mr-2"></i> Dapatkan Petunjuk Arah
                            </a>
                        </div>
                        <button id="btnToForm"
                            class="mt-6 px-5 py-3 bg-primary text-white rounded-lg hover:opacity-90 transition-opacity">
                            Maps
                        </button>
                    </div>
                </div>
            </div>

            <!-- Form Kontak -->
            <div id="formKontak" class="w-full flex-shrink-0">
                <div class="flex flex-wrap md:flex-nowrap gap-10">
                    <div class="w-full lg:w-1/2 h-full">
                        <h1 class="text-heading text-2xl font-bold">Konsultasi Gratis</h1>
                        <form class="space-y-4 py-4">
                            <div class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="full-name"
                                            class="block mb-2 font-medium text-base text-heading">Nama Lengkap</label>
                                        <input type="text" id="full-name" placeholder="Masukkan nama lengkap"
                                            class="w-full bg-white pl-4 py-2 rounded-lg border" />
                                    </div>
                                    <div>
                                        <label for="phone-number"
                                            class="block mb-2 font-medium text-base text-heading">Nomor Telepon</label>
                                        <input type="tel" id="phone-number" placeholder="Masukkan nomor telepon"
                                            class="w-full bg-white pl-4 py-2 rounded-lg border" />
                                    </div>
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 font-medium text-base text-heading">Email</label>
                                    <input type="email" id="email" placeholder="Masukkan email"
                                        class="w-full bg-white pl-4 py-2 rounded-lg border" />
                                </div>
                                <div>
                                    <label for="message"
                                        class="block mb-2 font-medium text-base text-heading">Pesan</label>
                                    <textarea id="message" rows="3" placeholder="Pesan Anda" class="w-full bg-white pl-4 py-2 rounded-lg border"></textarea>
                                </div>
                                <div>
                                    <button type="submit"
                                        class="w-full py-3 px-6 bg-secondary text-white rounded-lg">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button id="btnToMaps"
                        class="mt-6 px-5 py-3 bg-primary text-white rounded-lg hover:opacity-90 transition-opacity">
                        Konsultasi sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const slider = document.getElementById('sliderWrapper');
        const btnToForm = document.getElementById('btnToForm');
        const btnToMaps = document.getElementById('btnToMaps')

        btnToForm.addEventListener('click', () => {
            slider.style.transform = 'translateX(-100%)'; // slide ke form
        });

        // slider.style.transform = 'translateX(0)';
        btnToMaps.addEventListener('click', () => {
            slider.style.transform = 'translateX(0%)'
        })
    </script>

</body>


</html>
