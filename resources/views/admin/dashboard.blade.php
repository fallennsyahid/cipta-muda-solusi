<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cipta Muda Solusi - Dashboard</title>

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

    {{-- Tiny --}}
    <script src="https://cdn.tiny.cloud/1/ne2ngogb6ctihvg1psfcx2556ehuqcmgw33s33ig8a5c53ki/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>

</head>

<body class="min-h-screen bg-gradient-to-br from-section via-white to-accent">

    <x-admin.layout>
        <div class="bg-gradient-to-r from-primary to-secondary rounded-2xl p-8 text-white geometric-shape">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl text-white font-bold mb-2">
                        Welcome back, {{ Auth::check() ? Auth::user()->name : 'Admin' }}
                    </h1>
                    <p class="font-lato text-lg">Here's what's happening with your company profile today.</p>
                </div>
                <div class="hidden md:block relative z-10 float-animation">
                    <div class="w-24 h-24 bg-white rounded-full flex justify-center items-center">
                        <i class="fa-solid fa-rocket text-darkChoco text-5xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Jobs
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-heading flex justify-center items-center">
                        <i class="fas fa-briefcase text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary flex flex-col mt-1 font-bold">
                    {{ $totalJobsThisMonth }}
                    <p
                        class="text-xs {{ $percentageJobChange >= 0 ? 'text-green-600' : 'text-red-600' }} font-lato flex mt-1">
                        <i
                            class="fas {{ $percentageJobChange >= 0 ? 'fa-arrow-trend-up' : 'fa-arrow-trend-down' }} text-xs mr-1"></i>
                        {{ number_format($percentageJobChange, 1) }}% from last month
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Active Partners
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-secondary flex justify-center items-center">
                        <i class="fas fa-user-group text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary flex flex-col mt-1 font-bold">
                    {{ $totalActivePartnersThisMonth }}
                    <p
                        class="text-xs {{ $percentageActivePartnersChange >= 0 ? 'text-green-600' : 'text-red-600' }} font-lato flex mt-1">
                        <i
                            class="fas {{ $percentageActivePartnersChange >= 0 ? 'fa-arrow-trend-up' : 'fa-arrow-trend-down' }} text-xs mr-1"></i>
                        {{ number_format($percentageActivePartnersChange, 1) }}% from last month
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Blog Published
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-500 flex justify-center items-center">
                        <i class="fas fa-newspaper text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary flex flex-col mt-1 font-bold">
                    {{ $totalBlogPublishedThisMonth }}
                    <p
                        class="text-xs {{ $percentageBlogPublishedChange >= 0 ? 'text-green-600' : 'text-red-600' }} font-lato flex mt-1">
                        <i
                            class="fas {{ $percentageBlogPublishedChange >= 0 ? 'fa-arrow-trend-up' : 'fa-arrow-trend-down' }} text-xs mr-1"></i>
                        {{ number_format($percentageBlogPublishedChange, 1) }}% from last month
                    </p>
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        FAQ
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-indigo-500 flex justify-center items-center">
                        <i class="fas fa-question-circle text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary flex flex-col mt-1 font-bold">
                    {{ $totalFaqsThisMonth }}
                    <p
                        class="text-xs {{ $percentageFaqsChange >= 0 ? 'text-green-600' : 'text-red-600' }} font-lato flex mt-1">
                        <i
                            class="fas {{ $percentageFaqsChange >= 0 ? 'fa-arrow-trend-up' : 'fa-arrow-trend-down' }} text-xs mr-1"></i>
                        {{ number_format($percentageFaqsChange, 1) }}% from last month
                    </p>
                </div>
            </div>
        </div>

        <div class="mx-auto p-4 border border-text/25 rounded-xl">
            <h1 class="text-center mb-2 font-black text-primary text-3xl">Blog Statistics</h1>
            <canvas id="myChart" class="block w-full h-full"></canvas>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 h-96">
            <div class="bg-white rounded-xl p-4 shadow-lg geometric-shape">
                <div class="font-medium text-heading text-xl flex items-center gap-2 mb-5">
                    <i class="fas fa-calendar"></i>
                    Quick Actions
                </div>
                <div class="space-y-3 relative z-10">
                    <a href="#" id="open-modal-create-job"
                        class="px-4 py-3 border-2 border-heading rounded-lg flex items-center text-heading font-medium hover:bg-secondary/25">
                        <i class="fas fa-briefcase mr-3"></i>
                        Buat Lowongan Kerja Baru
                    </a>
                    <a href="#" id="open-add-partner"
                        class="px-4 py-3 border-2 border-heading rounded-lg flex items-center text-heading font-medium hover:bg-secondary/25">
                        <i class="fas fa-user-group mr-3"></i>
                        Tambah Partner Baru
                    </a>
                    <a href="#" id="open-create-blog"
                        class="px-4 py-3 border-2 border-heading rounded-lg flex items-center text-heading font-medium hover:bg-secondary/25">
                        <i class="fas fa-newspaper mr-3"></i>
                        Buat Postingan Blog Baru
                    </a>
                    <a href="{{ route('faqs.index') }}"
                        class="px-4 py-3 border-2 border-heading rounded-lg flex items-center text-heading font-medium hover:bg-secondary/25">
                        <i class="fas fa-question-circle mr-3"></i>
                        Update FAQ
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl p-4 shadow-lg geometric-shape">
                <div class="font-medium text-heading text-xl flex items-center gap-2 mb-5">
                    <i class="fas fa-clock"></i>
                    Aktivitas Terbaru
                </div>
                <div class="space-y-2 relative z-10 h-[90%] overflow-y-auto custom-scrollbar">
                    @foreach ($activities as $activity)
                        <div class="flex items-start space-x-3 p-3 rounded-lg hover:bg-accent transition-colors">
                            <div class="w-2 h-2 bg-primary rounded-full mt-2 flex-shrink-0"></div>
                            <div class="flex-1 min-w-0">
                                <p class="text-base font-medium text-heading">{{ ucfirst($activity->action) }}:
                                    {{ $activity->target_type }}
                                </p>
                                <p class="text-sm text-text font-lato">{{ $activity->target_name }}</p>
                                <p class="text-xs text-text font-lato mt-1">
                                    {{ $activity->created_at->diffForHumans() }}</p>

                                @if ($activity->action === 'update' && $activity->changes)
                                    <div class="ml-4 text-xs text-gray-600">
                                        @foreach ($activity->changes['old'] as $field => $old)
                                            @php
                                                $new = $activity->changes['new'][$field] ?? null;
                                            @endphp
                                            @if ($old != $new)
                                                <div>{{ $field }}: "{{ $old }}" →
                                                    "{{ $new }}"</div>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-admin.layout>

    {{-- Create New Jobs Start --}}
    <div id="create-new-job" class="fixed inset-0 z-99999 hidden justify-center items-center animate-fade-in">
        <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <div class="bg-white max-w-lg w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
            <div
                class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div
                        class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-user-plus text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-white mb-2">Tambah Lowongan Baru</h1>
                    <p class="text-white/90 text-base font-lato">Mari ciptakan peluang lapangan kerja baru!</p>
                </div>

                <button
                    class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                <form action="{{ route('newJob.store') }}" method="POST">
                    @csrf
                    <div class="space-y-6">
                        <div class="group">
                            <label for="position"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-user-tie"></i>
                                Posisi <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="position" name="position" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Senior Back-end Developer">
                        </div>

                        <div class="group">
                            <label for="departement"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-building"></i>
                                Bidang/Departemen <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="departement" name="departement" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Engineering">
                        </div>

                        <div class="group">
                            <label for="location"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-location-dot"></i>
                                Lokasi <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="location" name="location" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Jakarta">
                        </div>

                        <div class="group">
                            <label for="job_type"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-clock"></i>
                                Jenis Pekerjaan <span class="text-red-400">*</span>
                            </label>
                            <select name="job_type" id="job_type"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white capitalize"
                                required>
                                <option value="-">Pilih tipe pekerjaan</option>
                                @foreach ($jobTypes as $type)
                                    <option value="{{ $type->value }}">{{ $type->value }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="group">
                            <label for="salary"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-dollar-sign"></i>
                                Gaji <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="salary" name="salary" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="5-10 Juta">
                        </div>

                        <div class="group">
                            <label for="description"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-align-left"></i>
                                Deksripsi Singkat Pekerjaan<span class="text-red-400">*</span>
                            </label>
                            <textarea id="description" name="description" rows="4" maxlength="250" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white resize-none"
                                placeholder="Kami mencari Senior Full Stack Developer yang berpengalaman untuk bergabung dengan tim engineering kami."></textarea>
                            <p class="text-sm text-text">
                                <span id="char-count">0</span>/250 Karakter
                            </p>
                        </div>

                        <div class="group">
                            <label for="skill"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-lightbulb"></i>
                                Skill (3-5) <span class="text-red-400">*</span>
                            </label>
                            <div class="space-y-2">
                                <input type="text" name="skills[]" placeholder="Skill 1"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    required>
                                <input type="text" name="skills[]" placeholder="Skill 2"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    required>
                                <input type="text" name="skills[]" placeholder="Skill 3"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    required>
                                <input type="text" name="skills[]" placeholder="Skill 4 (opsional)"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                <input type="text" name="skills[]" placeholder="Skill 5 (opsional)"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                            </div>
                        </div>

                        <div class="group">
                            <label for="status"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-toggle-on"></i>
                                Status <span class="text-red-400">*</span>
                            </label>
                            <select name="status" id="status"
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white capitalize">
                                <option value="-">Pilih Status Lowongan</option>
                                @foreach ($jobStatus as $status)
                                    <option value="{{ $status->value }}">{{ $status->value }}
                                    </option>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Create New Jobs End --}}

    {{-- Add Partner Start --}}
    <div id="add-new-partner" class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
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
                <form action="{{ route('addPartner.store') }}" method="POST" enctype="multipart/form-data"
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
    </div>
    {{-- Add Partner End --}}

    {{-- Create Blog Start --}}
    <div id="create-new-blog" class="fixed inset-0 z-99999 hidden items-center justify-center p-4 animate-fade-in">
        <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

        <div class="bg-white max-w-2xl w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
            <div
                class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="relative z-10">
                    <div
                        class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                        <i class="fas fa-newspaper text-3xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold text-white mb-2">Tambah Blog Baru</h1>
                    <p class="text-white/90 text-base font-lato">Mari ciptakan sebuah berita terkini</p>
                </div>

                <button
                    class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>

            <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                <form action="{{ route('createBlog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-6">
                        <div class="group">
                            <label for="title"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-heading"></i>
                                Judul Blog <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="title" name="title" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Panduan Memilih Framework Web Development yang Tepat">
                        </div>

                        <div class="group">
                            <label for="category"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-list"></i>
                                Kategori <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="category" name="category" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Teknologi">
                        </div>

                        <div class="group">
                            <label for="author"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-user"></i>
                                Penulis/Pencipta <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="author" name="author" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Jakarta">
                        </div>

                        <div class="group">
                            <label for="description"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-align-left"></i>
                                Deksripsi<span class="text-red-400">*</span>
                            </label>
                            <textarea id="description" name="description" rows="4" maxlength="250" required
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white resize-none"
                                placeholder="React, Vue, atau Angular? Panduan lengkap memilih framework yang sesuai dengan kebutuhan proyek Anda."></textarea>
                            <p class="text-sm text-text">
                                <span id="char-count">0</span>/250 Karakter
                            </p>
                        </div>

                        <div class="group">
                            <label for="content_create"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-table"></i>
                                Content<span class="text-red-400">*</span>
                            </label>
                            <textarea id="content_create" name="content_create" rows="6" required class="tinymce-editor w-full px-4 py-3"></textarea>
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
                                                <i class="fa-solid fa-spinner text-blue-400"></i>
                                                Uploading...
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
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white capitalize">
                                <option value="-">Pilih Status Blog</option>
                                @foreach ($blogStatus as $status)
                                    <option value="{{ $status->value }}">
                                        {{ $status->value }}
                                    </option>
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
                                class="relative z-50 px-4 flex-1 py-2 rounded-lg bg-primary text-white hover:bg-primary/90 cursor-pointer">
                                <i class="fas fa-save mr-2"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Create Blog End --}}
</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            plugins: [
                // Core editing features
                'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists',
                'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
                // Your account includes a free trial of TinyMCE premium features
                // Try the most popular premium features until Sep 29, 2025:
                'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed',
                'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable',
                'advcode', 'advtemplate', 'ai', 'uploadcare', 'mentions', 'tinycomments',
                'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography',
                'inlinecss', 'markdown', 'importword', 'exportword', 'exportpdf'
            ],
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                'See docs to implement AI Assistant')),
            uploadcare_public_key: '909f4161f60569b19c78',

            setup: function(editor) {
                editor.on('change', function() {
                    tinymce.triggerSave(); // simpan isi editor ke <textarea>
                });
            }
        });
    });
</script>

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>
<script src="{{ asset('asset-admin/js/preview-file.js') }}"></script>
<script src="{{ asset('asset-admin/js/quick-action.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');

    const labels = @json($labels);
    const readyData = @json($readyCounts);
    const publishedData = @json($publishedCounts);

    const data = {
        labels,
        datasets: [{
                label: 'Ready to Publish',
                data: readyData,
                backgroundColor: 'rgba(59,130,246,0.95)', // biru (Tailwind blue-500 kira2)
                borderRadius: 6,
                barThickness: 18
            },
            {
                label: 'Published',
                data: publishedData,
                backgroundColor: 'rgba(249,115,22,0.95)', // orange
                borderRadius: 6,
                barThickness: 18
            },
        ]
    };

    // konfigurasi chart

    const config = {
        type: 'bar',
        data,
        options: {
            indexAxis: 'y',
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        boxWidth: 18,
                        padding: 16
                    }
                },
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            },
            scales: {
                x: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 1
                    },
                    grid: {
                        color: 'rgba(0,0,0,0.06)',
                        borderColor: 'rgba(0,0,0,0.06)'
                    }
                },
                y: {
                    reverse: false,
                    grid: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        padding: 12
                    }
                }
            }
        }
    };

    new Chart(ctx, config);

    setTimeout(() => {
        myChart.data.datasets[0].data = [3.9, 2.0, 4.1, 4.9];
        myChart.update();
    }, 2000);
</script>

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
    const logoutForms = document.querySelectorAll('.logout-form');

    logoutForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Yakin ingin logout?',
                text: 'Sesi Anda akan berakhir!',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Logout',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>

</html>
