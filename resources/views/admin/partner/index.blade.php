<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cipta Muda Solusi - Partner</title>

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

<body class="min-h-screen bg-gradient-to-br from-section via-white to-accent">

    <x-admin.layout>
        <div class="flex flex-wrap items-center justify-between">
            <div class="space-y-2">
                <h1 class="text-2xl text-heading font-bold">Jobs Management</h1>
                <p class="text-text font-lato">Manage business partnerships and collaborations</p>
            </div>
            <div>
                <button type="button" id="open-modal"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-plus"></i>
                    Tambahkan Lowongan Baru
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Partner
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-building text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalPartners }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Partner Aktif
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-handshake text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Partner Non-Aktif
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex justify-center items-center">
                        <i class="fas fa-circle-xmark text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Jenis Partner
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex justify-center items-center">
                        <i class="fas fa-star text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    24
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                <div class="flex justify-between">
                    <div class="flex items-center gap-3">
                        <div>
                            <img src="https://placehold.co/75x75.png" alt="" class="rounded-full">
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-3">
                                <h1 class="text-2xl text-heading font-semibold">Tech Solutions Inc.</h1>
                                <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Active</span>
                            </div>
                            <span class="block mt-2 text-text font-medium">
                                Service
                            </span>
                        </div>
                    </div>
                    <div class="relative z-50 flex items-center gap-2">
                        <button type="button"
                            class="h-9 w-9 rounded-full flex items-center justify-center cursor-pointer hover:bg-text/20">
                            <i class="fas fa-ellipsis"></i>
                        </button>
                        <button class="cursor-pointer">
                            <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-10">
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-envelope mr-2"></i>
                        email@perusahaan.com
                    </div>
                    <div class="flex items-center text-text text-base">
                        <i class="fas fa-phone mr-2"></i>
                        +62 123-4567-890
                    </div>
                    <a href="www.instagram.com" target="_blank" class="flex items-center text-primary text-base group">
                        <i class="fas fa-globe mr-2 text-text"></i>
                        <span class="group-hover:underline">
                            Website / Social Media
                        </span>
                    </a>
                    <a href="" target="_blank" class="flex items-center text-primary text-base group">
                        <i class="fas fa-file mr-2 text-text"></i>
                        <span class="group-hover:underline">
                            Lampiran
                        </span>
                    </a>
                </div>

                <p class="mt-5 text-text font-lato">
                    Leading technology solutions provider specializing in enterprise software development.
                </p>

                <div class="flex justify-between items-center mt-5">
                    <div class="text-sm text-text">
                        <i class="fas fa-calendar mr-1"></i>
                        Posted on 03/09/2025
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button"
                            class="flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                            <i class="fas fa-edit mr-2"></i>
                            Edit Data Partner
                        </button>
                        <button type="button"
                            class="flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                            <i class="fas fa-phone mr-2"></i>
                            Contact Partner
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </x-admin.layout>

    <div id="create-new-partner" class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
        <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <div class="bg-white max-w-lg w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
            <div
                class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div
                        class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-handshake text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-white mb-2">Tambah Partner Baru</h1>
                    <p class="text-white/90 text-base font-lato">Mari jalin kerjasama dengan mitra baru</p>
                </div>

                <button
                    class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
                    <div class="group">
                        <label for="company"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-building"></i>
                            Nama Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <input type="text" id="company" name="company" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="PT. Nama Perusahaan">
                    </div>

                    <div class="group">
                        <label for="company-email"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-envelope"></i>
                            Email <span class="text-red-400">*</span>
                        </label>
                        <input type="email" id="company-email" name="company-email" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="nama@perusahaan.com">
                    </div>

                    <div class="group">
                        <label for="company-number"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-mobile-screen"></i>
                            Nomor Telepon <span class="text-red-400">*</span>
                        </label>
                        <input type="tel" id="company-number" name="company-number" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="+62 123-3456-7890">
                    </div>

                    <div class="group">
                        <label for="company-number"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-industry"></i>
                            Jenis Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <select name="company-type" id="company-type"
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white cursor-pointer">
                            <option value="-" disabled selected>Pilih Kategori Perusahaan Anda</option>
                            @foreach ($partnerTypes as $partnerType)
                                <option value="{{ $partnerType->value }}">{{ $partnerType->value }}</option>
                            @endforeach
                        </select>

                        <input type="text" id="other-company-type" name="other-company-type"
                            class="hidden mt-4 w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="Ceritakan jenis bisnis Anda...">
                    </div>

                    <div class="group">
                        <label for="company-message"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-building-circle-check"></i>
                            Penjelasan Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <textarea name="company-message" id="company-message" rows="4" required maxlength="400"
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent focus:outline-none transition-all duration-200 hover:bg-white resize-none"
                            placeholder="Perusahaan kami bergerak di bidang... dengan fokus utama pada..."></textarea>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-xs text-slate-500">Ceritakan tentang Perusahaan Anda</p>
                            <p class="text-xs font-medium text-slate-600" id="charCount"></p>
                        </div>
                    </div>

                    <div class="group">
                        <label for="company-website"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-globe"></i>
                            Website / Media Sosial <span class="text-slate-400 text-xs">(Opsional)</span>
                        </label>
                        <input type="url" id="company-website" name="company-website" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="www.perusahaan.com atau www.instagram.com/perusahaan">
                    </div>

                    <div class="group">
                        <label for="description"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-file"></i>
                            Upload Gambar<span class="text-red-400">*</span>
                        </label>
                        <input type="file" name="image" id="image" class="hidden"
                            accept="image/png,image/jpeg,image/jpg">
                        <label for="image" id="drop-area"
                            class="p-6 flex flex-col items-center justify-center text-center border border-text border-dashed rounded-lg cursor-pointer hover:bg-text/5 transition-colors duration-100 ease-in-out">
                            <div class="mb-4">
                                <i class="fas fa-cloud-arrow-up text-2xl text-darkChoco"></i>
                            </div>
                            <div>
                                <h1 class="text-base font-medium text-darkChoco">
                                    Choose a file or drag & drop it here
                                </h1>
                                <p class="text-text text-sm font-medium font-lato">
                                    JPEG, PNG, JPG format, max. 5MB
                                </p>
                            </div>
                        </label>
                        <div id="preview-file" class="hidden justify-between bg-text/10 p-4 mt-2 rounded-lg">
                            <div class="flex items-center gap-3">
                                <div>
                                    <i class="fas fa-file-pdf text-4xl text-darkChoco"></i>
                                </div>
                                <div class="flex flex-col">
                                    <h1 id="file-name" class="text-base text-darkChoco font-semibold">
                                        apaweh
                                    </h1>
                                    <span id="file-size" class="text-xs text-text">100GB</span>
                                </div>
                            </div>
                            <div>
                                <a href="" id="remove-file">
                                    <i class="fa-solid fa-circle-xmark text-lg text-darkChoco"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="flex items-center w-full gap-2 bg-gradient-to-r from-primary via-primary to-secondary py-4 px-10 text-white font-semibold text-xl rounded-lg hover:from-secondary hover:via-primary hover:to-heading hover:scale-105 transition-all duration-300 ease-in-out cursor-pointer active:scale-95">
                            <i class="fas fa-rocket"></i>
                            Kirim Permohonan Kerjasama
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>
<script src="{{ asset('asset-admin/js/partner.js') }}"></script>
<script src="{{ asset('asset-admin/js/preview-file.js') }}"></script>

</html>
