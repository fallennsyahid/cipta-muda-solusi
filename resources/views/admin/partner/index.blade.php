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
                        <i class="fas fa-handshake text-white text-base"></i>
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
                        <i class="fas fa-circle-check text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalPartnersActive }}
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
                    {{ $totalPartnersNonActive }}
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
                    {{ $totalPartnersType }}
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            @foreach ($partners as $partner)
                <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <div class="h-20 w-20 rounded-full">
                                <img src="{{ Storage::url($partner->image) }}" alt=""
                                    class="rounded-full w-20 h-20 object-cover border-1 border-text">
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center gap-3">
                                    <h1 class="text-2xl text-heading font-semibold">{{ $partner->name }}</h1>
                                    @if ($partner->status = 'Active')
                                        <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Active</span>
                                    @else
                                        <span class="bg-red-200 px-2 py-1 rounded-full text-red-700">Non-Active</span>
                                    @endif
                                </div>
                                <span class="block mt-2 text-text font-medium">
                                    {{ $partner->partner_type }}
                                </span>
                            </div>
                        </div>
                        <div class="relative z-50 flex items-center gap-2">
                            <button type="button"
                                class="h-9 w-9 rounded-full flex items-center justify-center cursor-pointer hover:bg-text/20">
                                <i class="fas fa-ellipsis"></i>
                            </button>
                            <form action="{{ route('partner.destroy', $partner->id) }}" method="POST"
                                class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cursor-pointer">
                                    <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10">
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-envelope mr-2"></i>
                            {{ $partner->partner_email }}
                        </div>
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-phone mr-2"></i>
                            {{ $partner->partner_phone_number }}
                        </div>
                        <a href="{{ $partner->partner_links }}" target="_blank"
                            class="flex items-center text-primary text-base group">
                            <i class="fas fa-globe mr-2 text-text"></i>
                            <span class="group-hover:underline">
                                {{ $partner->partner_links }}
                            </span>
                        </a>
                    </div>

                    <p class="mt-5 text-text font-lato">
                        {{ $partner->description }}
                    </p>

                    <div class="flex justify-between items-center mt-5">
                        <div class="text-sm text-text">
                            <i class="fas fa-calendar mr-1"></i>
                            Posted on {{ $partner->created_at->format('d/m/Y') }}
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button" data-id="{{ $partner->id }}"
                                class="open-edit-modal flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
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
            @endforeach
        </div>
    </x-admin.layout>

    {{-- Modal Create Start --}}
    {{-- <div id="create-new-partner"
        class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
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
                <form action="{{ route('partner.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-6">
                    @csrf
                    <div class="group">
                        <label for="name"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-building"></i>
                            Nama Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="PT. Nama Perusahaan">
                    </div>

                    <div class="group">
                        <label for="partner_email"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-envelope"></i>
                            Email <span class="text-red-400">*</span>
                        </label>
                        <input type="email" id="partner_email" name="partner_email" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="nama@perusahaan.com">
                    </div>

                    <div class="group">
                        <label for="partner_phone_number"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-mobile-screen"></i>
                            Nomor Telepon <span class="text-red-400">*</span>
                        </label>
                        <input type="tel" id="partner_phone_number" name="partner_phone_number" required
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="+62 123-3456-7890">
                    </div>

                    <div class="group">
                        <label for="partner_type"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-industry"></i>
                            Jenis Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <select name="partner_type" id="partner_type"
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white cursor-pointer">
                            <option value="-" disabled selected>Pilih Jenis Perusahaan</option>
                            @foreach ($partnerTypes as $partnerType)
                                <option value="{{ $partnerType->value }}">{{ $partnerType->value }}</option>
                            @endforeach
                            <option value="other">Lainnya</option>
                        </select>

                        <input type="text" id="partner_other_type" name="partner_other_type"
                            class="hidden mt-4 w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="Masukan jenis perusahaan..">
                    </div>

                    <div class="group">
                        <label for="description"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-building-circle-check"></i>
                            Deskripsi Perusahaan <span class="text-red-400">*</span>
                        </label>
                        <textarea name="description" id="description" rows="4" required maxlength="400"
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent focus:outline-none transition-all duration-200 hover:bg-white resize-none"
                            placeholder="Perusahaan kami bergerak di bidang... dengan fokus utama pada..."></textarea>
                        <p class="text-xs font-medium text-slate-600" id="charCount"></p>
                    </div>

                    <div class="group">
                        <label for="partner_links"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-globe"></i>
                            Website / Media Sosial <span class="text-slate-400 text-xs">(Opsional)</span>
                        </label>
                        <input type="url" id="partner_links" name="partner_links"
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                            placeholder="www.perusahaan.com atau www.instagram.com/perusahaan">
                    </div>

                    <div class="group">
                        <label for="image"
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
                                    <h1 id="file-name" class="text-base text-darkChoco font-semibold"></h1>
                                    <span id="file-size" class="text-xs text-text"></span>
                                </div>
                            </div>
                            <div>
                                <a href="" id="remove-file">
                                    <i class="fa-solid fa-circle-xmark text-lg text-darkChoco"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="group">
                        <label for="status"
                            class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                            <i class="fas fa-toggle-on"></i>
                            Status Kerjasama <span class="text-red-400">*</span>
                        </label>
                        <select name="status" id="status"
                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white cursor-pointer">
                            <option value="-" disabled selected>Pilih Status Kerjasama</option>
                            @foreach ($partnerStatus as $status)
                                <option value="{{ $status->value }}">{{ $status->value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center gap-3">
                        <button type="button"
                            class="close-modal flex-1 px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 cursor-pointer">
                            <i class="fas fa-times mr-2"></i>
                            Batal
                        </button>
                        <button type="submit"
                            class="px-4 flex-1 py-2 rounded-lg bg-primary text-white hover:bg-primary/90 cursor-pointer">
                            <i class="fas fa-save mr-2"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- Modal Create End --}}

    {{-- Modal Edit Start --}}
    @foreach ($partners as $partner)
        <div id="edit-partner-{{ $partner->id }}"
            class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
            <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

            <div
                class="bg-white max-w-lg w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
                <div
                    class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                            <i class="fas fa-pen text-3xl"></i>
                        </div>
                        <h1 class="text-2xl font-bold text-white mb-2">Edit Data Mitra</h1>
                        <p class="text-white/90 text-base font-lato">Perbaiki data mitra</p>
                    </div>

                    <button
                        class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                    <form action="{{ route('partner.update', $partner->id) }}" method="POST"
                        enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        <div class="group">
                            <label for="name"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-building"></i>
                                Nama Perusahaan <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $partner->name }}" placeholder="PT. Nama Perusahaan">
                        </div>

                        <div class="group">
                            <label for="partner_email"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-envelope"></i>
                                Email <span class="text-red-400">*</span>
                            </label>
                            <input type="email" id="partner_email" name="partner_email"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $partner->partner_email }}" placeholder="nama@perusahaan.com">
                        </div>

                        <div class="group">
                            <label for="partner_phone_number"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-mobile-screen"></i>
                                Nomor Telepon <span class="text-red-400">*</span>
                            </label>
                            <input type="tel" id="partner_phone_number" name="partner_phone_number"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $partner->partner_phone_number }}" placeholder="+62 123-3456-7890">
                        </div>

                        <div class="group">
                            <label for="partner_type"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-industry"></i>
                                Jenis Perusahaan <span class="text-red-400">*</span>
                            </label>
                            <select name="partner_type" id="partner_type"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white cursor-pointer">
                                @foreach ($partnerTypes as $partnerType)
                                    <option value="{{ $partnerType->value }}"
                                        {{ $partnerType->value === $partner->partner_type ? 'selected' : '' }}>
                                        {{ $partnerType->value }}
                                    </option>
                                @endforeach
                                <option value="other">Lainnya</option>
                            </select>

                            <input type="text" id="partner_other_type" name="partner_other_type"
                                class="hidden mt-4 w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Masukan jenis perusahaan..">
                        </div>

                        <div class="group">
                            <label for="description"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-building-circle-check"></i>
                                Deskripsi Perusahaan <span class="text-red-400">*</span>
                            </label>
                            <textarea name="description" id="description" rows="4" maxlength="400"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent focus:outline-none transition-all duration-200 hover:bg-white resize-none"
                                placeholder="Perusahaan kami bergerak di bidang... dengan fokus utama pada...">{{ $partner->description }}</textarea>
                            <p class="text-xs font-medium text-slate-600" id="charCount"></p>
                        </div>

                        <div class="group">
                            <label for="partner_links"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-globe"></i>
                                Website / Media Sosial
                            </label>
                            <input type="url" id="partner_links" name="partner_links"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $partner->partner_links }}"
                                placeholder="www.perusahaan.com atau www.instagram.com/perusahaan">
                        </div>

                        <div class="group">
                            <label for="image"
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
                            @if ($partner->image)
                                <div class="border-b border-text/25 pb-2">
                                    <div class="flex justify-between bg-text/10 p-4 mt-2 rounded-lg">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <i class="fas fa-image text-4xl text-darkChoco"></i>
                                            </div>
                                            <a href="{{ Storage::url($partner->image) }}" target="_blank"
                                                id="file-name" class="text-base text-darkChoco font-semibold">
                                                Foto Sebelumnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="hidden justify-between bg-text/10 p-4 mt-2 rounded-lg">
                                <div class="flex items-center gap-3">
                                    <div>
                                        <i class="fas fa-file-pdf text-4xl text-darkChoco"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <h1" class="text-base text-darkChoco font-semibold">
                                            </h1>
                                            <span class="text-xs text-text"></span>
                                    </div>
                                </div>
                                <div>
                                    <a href="">
                                        <i class="fa-solid fa-circle-xmark text-lg text-darkChoco"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="group">
                            <label for="status"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-toggle-on"></i>
                                Status Kerjasama <span class="text-red-400">*</span>
                            </label>
                            <select name="status" id="status"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white cursor-pointer">
                                @foreach ($partnerStatus as $status)
                                    <option value="{{ $status->value }}"
                                        {{ $status->value === $partner->status ? 'selected' : '' }}>
                                        {{ $status->value }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center gap-3">
                            <button type="button"
                                class="close-modal flex-1 px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 cursor-pointer">
                                <i class="fas fa-times mr-2"></i>
                                Batal
                            </button>
                            <button type="submit"
                                class="px-4 flex-1 py-2 rounded-lg bg-primary text-white hover:bg-primary/90 cursor-pointer">
                                <i class="fas fa-save mr-2"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Modal Edit End --}}

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

<script>
    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Yakin ingin menghapus',
                text: 'Data yang sudah dihapus tidak dapat dipulihkan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e3342f',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>
<script src="{{ asset('asset-admin/js/partner.js') }}"></script>
<script src="{{ asset('asset-admin/js/preview-file.js') }}"></script>

</html>
