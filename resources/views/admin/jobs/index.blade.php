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
</head>

<body class="min-h-screen bg-gradient-to-br from-section via-white to-accent">

    <x-admin.layout>
        <div class="flex flex-wrap items-center justify-between">
            <div class="space-y-2">
                <h1 class="text-2xl text-heading font-bold">Jobs Management</h1>
                <p class="text-text font-lato">Manage job postings and track applications</p>
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
                        Total Lowongan
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-heading flex justify-center items-center">
                        <i class="fas fa-briefcase text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $jobs->total() }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Lowongan Aktif
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-circle-check text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalJobActive }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Lowongan Non-Aktif
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex justify-center items-center">
                        <i class="fas fa-circle-xmark text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalJobNonActive }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Pelamar
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-blue-600 flex justify-center items-center">
                        <i class="fas fa-user-group text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalApplicants }}
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            @forelse ($jobs as $job)
                <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-3">
                                <h1 class="text-2xl text-heading font-semibold">{{ $job->position }}</h1>
                                @if ($job->status === 'Active')
                                    <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">
                                        Active
                                    </span>
                                @else
                                    <span class="bg-red-200 px-2 py-1 rounded-full text-red-700">
                                        Non-Active
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="relative z-50 flex items-center gap-2">
                            <button type="button"
                                class="h-9 w-9 rounded-full flex items-center justify-center cursor-pointer hover:bg-text/20">
                                <i class="fas fa-ellipsis"></i>
                            </button>
                            <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cursor-pointer">
                                    <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <span class="block mt-2 text-text font-medium text-lg">
                        {{ $job->departement }}
                    </span>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-10">
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-location-dot mr-2"></i>
                            {{ $job->location }}
                        </div>
                        <div class="flex items-center text-text text-base capitalize">
                            <i class="fas fa-clock mr-2"></i>
                            {{ $job->job_type }}
                        </div>
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-dollar-sign mr-2"></i>
                            {{ $job->salary }}
                        </div>
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-user-group mr-2"></i>
                            {{ $job->applicants_count }} Pelamar
                        </div>
                    </div>

                    <p class="mt-5 text-text font-lato">
                        {{ $job->description }}
                    </p>

                    <div class="flex flex-wrap gap-2 mt-5">
                        @foreach ($job->skills as $skill)
                            <span
                                class="border border-text/25 text-text px-2 py-1 rounded-full text-sm flex items-center">
                                <i class="fas fa-tag mr-2"></i>
                                {{ $skill }}
                            </span>
                        @endforeach
                    </div>

                    <div class="flex justify-between items-center mt-5">
                        <div class="text-sm text-text">
                            <i class="fas fa-calendar mr-1"></i>
                            {{ $job->created_at->format('d/m/Y') }}
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button" data-id="{{ $job->id }}"
                                class="open-edit-modal flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                                <i class="fas fa-edit mr-2"></i>
                                Edit Lowongan
                            </button>
                            <a href="{{ route('jobs.show', $job->id) }}"
                                class="flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                                <i class="fas fa-user-group mr-2"></i>
                                Lihat Pelamar
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="flex flex-col items-center justify-center py-20 bg-gray-50 rounded-2xl shadow-inner">
                    <i class="fas fa-briefcase text-6xl text-gray-400 mb-5 animate-bounce"></i>
                    <h2 class="text-2xl font-semibold text-gray-700 mb-2">Belum ada lowongan</h2>
                    <p class="text-gray-500 text-center max-w-md">
                        Saat ini tidak ada lowongan yang tersedia. Silakan tambahkan lowongan baru melalui tombol di
                        atas.
                    </p>
                </div>
            @endforelse

            <div class="mt-4">
                {{ $jobs->links() }}
            </div>
        </div>
    </x-admin.layout>

    {{-- Create Modal Start --}}
    <div id="create-new-job" class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
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
                <form action="{{ route('jobs.store') }}" method="POST">
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
                                @foreach ($jobType as $type)
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
                            <div class="char-counter">
                                <textarea id="description" name="description" rows="4" maxlength="250" required
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white resize-none"
                                    placeholder="Kami mencari Senior Full Stack Developer yang berpengalaman untuk bergabung dengan tim engineering kami."></textarea>
                                <p class="text-sm text-text">
                                    <span class="char-count">0</span>/250 Karakter
                                </p>
                            </div>
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
    {{-- Create Modal End --}}

    {{-- Edit Modal Start --}}
    @foreach ($jobs as $job)
        <div id="edit-modal-{{ $job->id }}" class="fixed z-[99999] inset-0 hidden justify-center items-center">
            <div class="close-modal-2 absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

            <div
                class="bg-white max-w-lg w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
                <div
                    class="bg-gradient-to-r from-heading via-primary to-secondary p-8 text-center overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/10"></div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-full flex justify-center items-center text-white mx-auto mb-4 backdrop-blur-sm">
                            <i class="fas fa-pen-to-square text-3xl"></i>
                        </div>
                        <h1 class="text-2xl font-bold text-white mb-2">Edit Lowongan</h1>
                        <p class="text-white/90 text-base font-lato">Perbaiki lowongan kerja agar pelamar bisa
                            tertarik!</p>
                    </div>

                    <button
                        class="close-modal-2 absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-6">
                            <div class="group">
                                <label for="position"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-user-tie"></i>
                                    Posisi <span class="text-red-400">*</span>
                                </label>
                                <input type="text" id="position" name="position" value="{{ $job->position }}"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    placeholder="Senior Back-end Developer">
                            </div>

                            <div class="group">
                                <label for="departement"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-building"></i>
                                    Bidang/Departemen <span class="text-red-400">*</span>
                                </label>
                                <input type="text" id="departement" name="departement"
                                    value="{{ $job->departement }}"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    placeholder="Engineering">
                            </div>

                            <div class="group">
                                <label for="location"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-location-dot"></i>
                                    Lokasi <span class="text-red-400">*</span>
                                </label>
                                <input type="text" id="location" name="location" value="{{ $job->location }}"
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
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white capitalize">
                                    @foreach ($jobType as $type)
                                        <option value="{{ $type->value }}"
                                            {{ $job->job_type === $type->value ? 'selected' : '' }}>
                                            {{ $type->value }}
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
                                <input type="text" id="salary" name="salary" value="{{ $job->salary }}"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    placeholder="5-10 Juta">
                            </div>

                            <div class="group">
                                <label for="description"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-align-left"></i>
                                    Deksripsi Singkat Pekerjaan<span class="text-red-400">*</span>
                                </label>
                                <div class="char-counter">
                                    <textarea id="description" name="description" rows="4" maxlength="250"
                                        class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white resize-none"
                                        placeholder="Kami mencari Senior Full Stack Developer yang berpengalaman untuk bergabung dengan tim engineering kami.">{{ $job->description }}</textarea>
                                    <p class="text-sm text-text">
                                        <span class="char-count">0</span>/250 Karakter
                                    </p>
                                </div>
                            </div>

                            <div class="group">
                                <label for="skill"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-lightbulb"></i>
                                    Skill (3-5) <span class="text-red-400">*</span>
                                </label>
                                <div class="space-y-2">
                                    @foreach ($job->skills as $i => $skill)
                                        <input type="text" name="skills[]"
                                            placeholder="Skill {{ $i + 1 }}" value="{{ $skill }}"
                                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                    @endforeach
                                    @for ($i = count($job->skills); $i < 5; $i++)
                                        <input type="text" name="skills[]"
                                            placeholder="Skill {{ $i + 1 }} (opsional)"
                                            class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                    @endfor
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
                                    @foreach ($jobStatus as $status)
                                        <option value="{{ $status->value }}"
                                            {{ $status->value === $job->status ? 'selected' : '' }}>
                                            {{ $status->value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex items-center gap-3">
                                <button type="button"
                                    class="close-modal-2 flex-1 px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 cursor-pointer">
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
    {{-- Edit Modal End --}}

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
<script src="{{ asset('asset-admin/js/job.js') }}"></script>

</html>
