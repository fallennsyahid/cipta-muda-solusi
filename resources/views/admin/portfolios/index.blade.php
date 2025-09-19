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
                <h1 class="text-2xl text-heading font-bold">Portfolio Management</h1>
                <p class="text-text font-lato">Showcase your company's best work and manage project portfolios</p>
            </div>
            <div>
                <button type="button" id="open-modal"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-plus"></i>
                    Tambahkan Portfolio Baru
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Portfolio
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-layer-group text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalPortfolios }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Published
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-check-circle text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalPortfoliosPublished }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Un-Published
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex justify-center items-center">
                        <i class="fas fa-circle-xmark text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalPortfoliosUnPublished }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Category
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex justify-center items-center">
                        <i class="fas fa-star text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalPortfoliosCategory }}
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($portfolios as $portfolio)
                <div
                    class="bg-white border-0 rounded-xl shadow-md overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="aspect-video overflow-hidden rounded-t-xl relative">
                        <img src="{{ Storage::url($portfolio->image) }}" alt=""
                            class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-300">

                        <div class="absolute top-3 left-3">
                            @if ($portfolio->status === 'Pending')
                                <span class="bg-amber-600 px-3 py-1 text-white font-medium text-sm rounded-full">
                                    Pending
                                </span>
                            @elseif ($portfolio->status === 'Published')
                                <span class="bg-green-600 px-3 py-1 text-white font-medium text-sm rounded-full">
                                    Published
                                </span>
                            @else
                                <span class="bg-red-600 px-3 py-1 text-white font-medium text-sm rounded-full">
                                    Un-Published
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="p-4 space-y-4">
                        <div class="flex flex-col gap-2">
                            <span class="flex items-center text-sm text-secondary font-medium">
                                <i class="fas fa-gears text-text mr-2"></i>
                                {{ $portfolio->project_name }}
                            </span>
                            <div class="flex items-center space-x-2">
                                <h1 class="flex items-center text-lg text-heading font-bold line-clamp-1">
                                    {{ $portfolio->title }}
                                </h1>
                                @if ($portfolio->visit_link)
                                    <a href="{{ $portfolio->visit_link }}" target="_blank" title="Visit Link"
                                        class="text-blue-600 hover:text-blue-700 text-lg">
                                        <i class="fas fa-arrow-up-right-from-square"></i>
                                    </a>
                                @endif
                            </div>
                            @if ($portfolio->category === 'Lainnya')
                                <span
                                    class="inline-flex w-fit items-center px-3 py-1 rounded-full text-xs {{ $categoryColors[$portfolio->category] ?? 'bg-gray-300 text-black' }}">
                                    <i class="fas fa-layer-group mr-2"></i>
                                    {{ $portfolio->other_category }}
                                </span>
                            @else
                                <span
                                    class="inline-flex w-fit items-center px-3 py-1 rounded-full text-xs {{ $categoryColors[$portfolio->category] ?? 'bg-gray-300 text-black' }}">
                                    <i class="fas fa-layer-group mr-2"></i>
                                    {{ $portfolio->category }}
                                </span>
                            @endif
                        </div>

                        <p class="text-darkChoco text-justify line-clamp-2">
                            {{ $portfolio->description }}
                        </p>

                        <div class="flex items-center gap-2 flex-wrap">
                            @foreach ($portfolio->tools as $tool)
                                <span
                                    class="text-xs text-darkChoco border border-text/25 p-1 rounded-lg flex items-center justify-center text-center">
                                    {{ $tool }}
                                </span>
                            @endforeach
                        </div>

                        <span class="flex items-center text-sm text-text">
                            <i class="fas fa-calendar mr-2"></i>
                            {{ $portfolio->event_time }}
                        </span>

                        <div class="grid grid-cols-3 gap-3">
                            <button type="button" data-id="{{ $portfolio->id }}"
                                class="open-edit-portfolio flex justify-center items-center bg-blue-500 text-white py-1 rounded-lg hover:bg-blue-600">
                                <i class="fas fa-pen-to-square mr-2"></i>
                                Edit
                            </button>
                            <button type="button" data-id="{{ $portfolio->id }}"
                                class="open-detail-portfolio flex justify-center items-center bg-gray-500 text-white py-1 rounded-lg hover:bg-gray-600">
                                <i class="fas fa-eye mr-2"></i>
                                Detail
                            </button>
                            <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST"
                                class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="flex justify-center items-center bg-red-500 text-white py-1 px-2 rounded-lg hover:bg-red-600 cursor-pointer">
                                    <i class="fas fa-trash mr-2"></i>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </x-admin.layout>

    {{-- Create Modal Start --}}
    <div id="create-new-portfolio"
        class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
        <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <div class="bg-white max-w-lg w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
            <div
                class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div
                        class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-briefcase text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-white mb-2">Tambah Portfolio Baru</h1>
                    <p class="text-white/90 text-base font-lato">Tambahkan portfolio baru agar mitra makin terkesan</p>
                </div>

                <button
                    class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-6">
                        <div class="group">
                            <label for="title"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-heading"></i>
                                Judul Portfolio <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="title" name="title" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Web Based Production">
                        </div>

                        <div class="group">
                            <label for="project_name"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-tag"></i>
                                Nama Proyek <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="project_name" name="project_name" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Lamikro dan Database Kewirausahaan">
                        </div>

                        <div class="group">
                            <label for="category"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-layer-group"></i>
                                Category <span class="text-red-400">*</span>
                            </label>
                            <select name="category" id="category"
                                class="category w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white capitalize"
                                required>
                                <option value="-" disabled selected>Pilih Tipe Proyek</option>
                                @foreach ($portfolioCategory as $category)
                                    <option value="{{ $category->value }}">{{ $category->value }}
                                    </option>
                                @endforeach
                            </select>

                            <input type="text" id="other_category" name="other_category"
                                class="other_category hidden w-full mt-4 px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Finance">
                        </div>

                        <div class="group">
                            <label for="description"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-align-left"></i>
                                Deksripsi Portfolio<span class="text-red-400">*</span>
                            </label>
                            <div class="char-counter">
                                <textarea id="description" name="description" rows="4" maxlength="250" required
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white resize-none"
                                    placeholder="Jasa pembuatan website berbasis Big Data..."></textarea>
                                <p class="text-sm text-text">
                                    <span class="char-count">0</span>/250 Karakter
                                </p>
                            </div>
                        </div>

                        <div class="group">
                            <label for="tools"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-screwdriver-wrench"></i>
                                Tools (3-5) <span class="text-red-400">*</span>
                            </label>
                            <div class="space-y-2">
                                <input type="text" name="tools[]" placeholder="Tool 1"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    required>
                                <input type="text" name="tools[]" placeholder="Tool 2"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    required>
                                <input type="text" name="tools[]" placeholder="Tool 3"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    required>
                                <input type="text" name="tools[]" placeholder="Tool 4 (opsional)"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                <input type="text" name="tools[]" placeholder="Tool 5 (opsional)"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                            </div>
                        </div>

                        <div class="upload-group">
                            <label
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-file"></i>
                                Upload Gambar<span class="text-red-400">*</span>
                            </label>

                            <input type="file" name="image" class="file-input hidden"
                                accept="image/png,image/jpeg,image/jpg">

                            <label
                                class="drop-area p-6 flex flex-col items-center justify-center text-center border border-text border-dashed rounded-lg cursor-pointer hover:bg-text/5 transition-colors duration-100 ease-in-out">
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

                            <!-- preview -->
                            <div class="preview hidden bg-text/10 p-4 mt-2 rounded-lg items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <img class="preview-image w-16 h-16 object-cover rounded-lg" alt="Preview">
                                    <div>
                                        <h1 class="file-name text-base text-darkChoco font-semibold">title.jpg</h1>
                                        <div class="flex items-center gap-2 text-xs text-text">
                                            <span class="file-size"></span>
                                            <span>•</span>
                                            <span>
                                                <i class="fa-solid fa-circle-check text-green-400"></i>
                                                Completed
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="remove-file">
                                    <i class="fa-solid fa-circle-xmark text-lg text-darkChoco"></i>
                                </button>
                            </div>
                        </div>

                        <div class="group">
                            <label for="event_time"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-clock"></i>
                                Waktu Proyek <span class="text-red-400">*</span>
                            </label>
                            <input type="date" id="event_time" name="event_time" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                        </div>

                        <div class="group">
                            <label for="status"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-toggle-on"></i>
                                Status <span class="text-red-400">*</span>
                            </label>
                            <select name="status" id="status"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white capitalize">
                                <option value="-">Pilih Status Portfolio</option>
                                @foreach ($portfolioStatus as $status)
                                    <option value="{{ $status->value }}">{{ $status->value }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="group">
                            <label for="visit_link"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-link"></i>
                                Visit Link (Opsional)
                            </label>
                            <input type="url" id="visit_link" name="visit_link"
                                placeholder="https://www.link.com"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
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
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Create Modal End --}}

    {{-- Edit Portfolio Start --}}
    @foreach ($portfolios as $portfolio)
        <div id="edit-portfolio-{{ $portfolio->id }}"
            class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
            <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

            <div
                class="bg-white max-w-2xl w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
                <div
                    class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                            <i class="fas fa-pen text-3xl"></i>
                        </div>
                        <h1 class="text-2xl font-bold text-white mb-2">Edit Portfolio</h1>
                        <p class="text-white/90 text-base font-lato">Perbaiki detail jika ada yang kurang tepat</p>
                    </div>

                    <button
                        class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                    <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div class="group">
                                <label for="title"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-heading"></i>
                                    Judul Blog <span class="text-red-400">*</span>
                                </label>
                                <input type="text" id="title" name="title"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    value="{{ $portfolio->title }}">
                            </div>

                            <div class="group">
                                <label for="project_name"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-tag"></i>
                                    Nama Project <span class="text-red-400">*</span>
                                </label>
                                <input type="text" id="project_name" name="project_name"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    value="{{ $portfolio->project_name }}" placeholder="Teknologi">
                            </div>

                            <div class="group">
                                <label for="category"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-list"></i>
                                    Kategori <span class="text-red-400">*</span>
                                </label>

                                <select name="category" id="category"
                                    class="category w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white cursor-pointer">
                                    @foreach ($portfolioCategory as $category)
                                        <option value="{{ $category->value }}"
                                            {{ $category->value === $portfolio->category ? 'selected' : '' }}>
                                            {{ $category->value }}
                                        </option>
                                    @endforeach
                                </select>

                                <input type="text" name="other_category"
                                    class="other_category {{ $portfolio->other_category ? '' : 'hidden' }} mt-4 w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    value="{{ $portfolio->other_category }}"
                                    placeholder="Masukan jenis perusahaan..">
                            </div>

                            <div class="group">
                                <label for="description"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-align-left"></i>
                                    Deksripsi<span class="text-red-400">*</span>
                                </label>
                                <div class="char-counter">
                                    <textarea id="description" name="description" rows="4" maxlength="250"
                                        class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white resize-none"
                                        placeholder="React, Vue, atau Angular? Panduan lengkap memilih framework yang sesuai dengan kebutuhan proyek Anda.">{{ $portfolio->description }}</textarea>
                                    <p class="text-sm text-text">
                                        <span class="char-count">0</span>/250 Karakter
                                    </p>
                                </div>
                            </div>

                            <div class="group">
                                <label for="skills"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-align-left"></i>
                                    Skills<span class="text-red-400">*</span>
                                </label>
                                <div class="space-y-3">
                                    @foreach ($portfolio->tools as $i => $tool)
                                        <input type="text" name="tools[]" placeholder="Tool {{ $i + 1 }}"
                                            value="{{ $tool }}"
                                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                    @endforeach
                                    @for ($i = count($portfolio->tools); $i < 5; $i++)
                                        <input type="text" name="tools[]"
                                            placeholder="Tool {{ $i + 1 }} (opsional)"
                                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                    @endfor
                                </div>
                            </div>

                            <div class="upload-group">
                                <label
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-file"></i>
                                    Upload Gambar<span class="text-red-400">*</span>
                                </label>

                                <input type="file" name="edit_image" class="file-input hidden"
                                    accept="image/png,image/jpeg,image/jpg,image/webp">

                                <label
                                    class="drop-area p-6 flex flex-col items-center justify-center text-center border border-text border-dashed rounded-lg cursor-pointer hover:bg-text/5 transition-colors duration-100 ease-in-out">
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
                                @if ($portfolio->image)
                                    <div class="border-b border-text/25 pb-2">
                                        <div class="flex justify-between bg-text/10 p-4 mt-2 rounded-lg">
                                            <div class="flex items-center gap-3">
                                                <div>
                                                    <img src="{{ Storage::url($portfolio->image) }}" alt=""
                                                        class="w-16 h-16 object-cover rounded-lg">
                                                </div>
                                                <a href="{{ Storage::url($portfolio->image) }}" target="_blank"
                                                    class="text-base text-darkChoco font-semibold">
                                                    Foto Sebelumnya
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <!-- preview -->
                                <div
                                    class="preview hidden bg-text/10 p-4 mt-2 rounded-lg items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <img class="preview-image w-16 h-16 object-cover rounded-lg" alt="Preview">
                                        <div>
                                            <h1 class="file-name text-base text-darkChoco font-semibold">title.jpg</h1>
                                            <div class="flex items-center gap-2 text-xs text-text">
                                                <span class="file-size"></span>
                                                <span>•</span>
                                                <span>
                                                    <i class="fa-solid fa-circle-check text-green-400"></i>
                                                    Completed
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="remove-file">
                                        <i class="fa-solid fa-circle-xmark text-lg text-darkChoco"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="group">
                                <label for="status"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-toggle-on"></i>
                                    Status <span class="text-red-400">*</span>
                                </label>
                                <select name="status" id="status"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                    @foreach ($portfolioStatus as $status)
                                        <option value="{{ $status->value }}"
                                            {{ $status->value === $portfolio->status ? 'selected' : '' }}>
                                            {{ $status->value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="group">
                                <label for="event_time"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-toggle-on"></i>
                                    Tanggal Pengerjaan<span class="text-red-400">*</span>
                                </label>
                                <input type="text" id="event_time" name="event_time"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    value="{{ $portfolio->event_time }}" placeholder="Jakarta">
                            </div>

                            <div class="group">
                                <label for="edit_visit_link"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-link"></i>
                                    Visit Link
                                </label>
                                <input type="text" id="edit_visit_link" name="edit_visit_link"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    value="{{ $portfolio->visit_link ? $portfolio->visit_link : '' }}"
                                    placeholder="Tambahkan Visit Link">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Edit Portfolio End --}}

    {{-- Detail Modal Start --}}
    @foreach ($portfolios as $portfolio)
        <div id="detail-portfolio-{{ $portfolio->id }}"
            class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
            <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

            <div
                class="bg-white max-w-2xl w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
                <div
                    class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                            <i class="fas fa-eye text-3xl"></i>
                        </div>
                        <h1 class="text-2xl font-bold text-white mb-2">Detail Portfolio</h1>
                        <p class="text-white/90 text-base font-lato">Lihat semua detail portfolio</p>
                    </div>

                    <button
                        class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                    <div class="space-y-6">
                        <div class="group">
                            <label for="title"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-heading"></i>
                                Judul Blog <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="title" name="title" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $portfolio->title }}">
                        </div>

                        <div class="group">
                            <label for="project_name"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-tag"></i>
                                Nama Project <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="project_name" name="project_name" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $portfolio->project_name }}" placeholder="Teknologi">
                        </div>

                        <div class="group">
                            <label for="category"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-list"></i>
                                Kategori <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="detail_category" name="detail_category" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $portfolio->category }}" placeholder="Teknologi">

                            <input type="text" id="detail_other_category" name="detail_other_category" readonly
                                class="other_category {{ $portfolio->other_category ? '' : 'hidden' }} w-full mt-4 px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $portfolio->other_category }}">
                        </div>

                        <div class="group">
                            <label for="description"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-align-left"></i>
                                Deksripsi<span class="text-red-400">*</span>
                            </label>
                            <div class="char-counter">
                                <textarea id="description" name="description" rows="4" maxlength="250" readonly
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white resize-none"
                                    placeholder="React, Vue, atau Angular? Panduan lengkap memilih framework yang sesuai dengan kebutuhan proyek Anda.">{{ $portfolio->description }}</textarea>
                                <p class="text-sm text-text">
                                    <span class="char-count">0</span>/250 Karakter
                                </p>
                            </div>
                        </div>

                        <div class="group">
                            <label for="skills"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-align-left"></i>
                                Skills<span class="text-red-400">*</span>
                            </label>
                            <div class="space-y-3">
                                @foreach ($portfolio->tools as $i => $tool)
                                    <input type="text" name="tools" placeholder="Skill {{ $i + 1 }}"
                                        readonly value="{{ $tool }}"
                                        class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                @endforeach
                            </div>
                        </div>

                        <div class="group">
                            <label for="image"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-image"></i>
                                Gambar Portfolio <span class="text-red-400">*</span>
                            </label>
                            <div
                                class="px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                <img src="{{ Storage::url($portfolio->image) }}" alt="">
                            </div>
                        </div>

                        <div class="group">
                            <label for="status"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-toggle-on"></i>
                                Status <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="status" name="status" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $portfolio->status }}" placeholder="Jakarta">
                        </div>

                        <div class="group">
                            <label for="event_time"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-toggle-on"></i>
                                Tanggal Pengerjaan<span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="event_time" name="event_time" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $portfolio->event_time }}">
                        </div>

                        @if ($portfolio->visit_link)
                            <div class="group">
                                <label for="detail_visit_link"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-link"></i>
                                    Visit Link
                                </label>
                                <input type="text" id="detail_visit_link" name="detail_visit_link" readonly
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    value="{{ $portfolio->visit_link }}">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Detail Modal End --}}

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

<script src="{{ asset('asset-admin/js/sidebar.js') }}"></script>
<script src="{{ asset('asset-admin/js/portfolio.js') }}"></script>
<script src="{{ asset('asset-admin/js/preview-file.js') }}"></script>

</html>
