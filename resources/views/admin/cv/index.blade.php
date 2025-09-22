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
                <h1 class="text-2xl text-heading font-bold">CV Management</h1>
                <p class="text-text font-lato">Manage job applications and candidate CVs</p>
            </div>
            <div>
                <a href="{{ route('cv.export') }}"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-green-500 via-green-600 to-green-700 cursor-pointer hover:from-green-600 hover:via-green-700 hover:to-green-800 transition">
                    <i class="fas fa-file-excel"></i>
                    Export Excel
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Pelamar
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-file text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $applicants }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Pending
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-amber-600 flex justify-center items-center">
                        <i class="fas fa-clock text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $applicantsPending }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Diterima
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-green-600 flex justify-center items-center">
                        <i class="fas fa-circle-check text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $applicantsAccept }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Ditolak
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-red-600 flex justify-center items-center">
                        <i class="fas fa-circle-xmark text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $applicantsDenied }}
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            @foreach ($cvs as $cv)
                <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-3">
                                <h1 class="text-2xl text-heading font-semibold">{{ $cv->applicant_name }}</h1>
                                @if ($cv->status === 'Diterima')
                                    <div class="flex items-center gap-2">
                                        <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Diterima</span>
                                        <span class="bg-blue-200 px-2 py-1 rounded-full text-blue-700">
                                            {{ $cv->note }}
                                        </span>
                                    </div>
                                @elseif ($cv->status === 'Pending')
                                    <span class="bg-amber-200 px-2 py-1 rounded-full text-amber-700">Pending</span>
                                @else
                                    <span class="bg-red-200 px-2 py-1 rounded-full text-red-700">Ditolak</span>
                                @endif
                            </div>
                        </div>
                        <div class="relative z-50 flex items-center gap-2">
                            <a href="{{ Storage::url($cv->applicant_file) }}" download="{{ $cv->applicant_name }}.pdf"
                                class="h-9 w-9 rounded-full flex items-center justify-center cursor-pointer hover:bg-text/20">
                                <i class="fas fa-download"></i>
                            </a>
                            <form action="{{ route('cv.destroy', $cv->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cursor-pointer">
                                    <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <span class="block mt-2 text-text font-medium text-lg">
                        {{ \Carbon\Carbon::parse($cv->date_of_birth)->format('d/m/Y') }}
                        ({{ \Carbon\Carbon::parse($cv->date_of_birth)->age }} tahun)
                    </span>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-10">
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-envelope mr-2"></i>
                            {{ $cv->applicant_email }}
                        </div>
                        <div class="flex items-center text-text text-base">
                            <i class="fas fa-phone mr-2"></i>
                            {{ $cv->applicant_phone_number }}
                        </div>
                        <a href="{{ Storage::url($cv->applicant_file) }}" target="_blank"
                            class="flex items-center text-secondary text-base hover:underline">
                            <i class="fas fa-file text-text mr-2"></i>
                            Lampiran
                        </a>
                    </div>

                    <p class="mt-5 text-text font-lato text-justify line-clamp-2">
                        {{ $cv->applicant_experience }}
                    </p>

                    <div class="flex justify-between items-center mt-5">
                        <div class="text-sm text-text">
                            <i class="fas fa-calendar mr-1"></i>
                            Melamar pada {{ $cv->created_at->format('d/m/Y') }}
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button" data-id="{{ $cv->id }}"
                                class="open-detail-applicant flex items-center text-white bg-gray-600 px-4 py-2 rounded-lg cursor-pointer hover:bg-gray-700">
                                <i class="fas fa-eye mr-2"></i>
                                Detail
                            </button>
                            @if ($cv->status === 'Pending')
                                <button type="button" data-id="{{ $cv->id }}"
                                    class="open-update-status flex items-center text-white bg-secondary px-4 py-2 rounded-lg cursor-pointer hover:bg-secondary/90">
                                    <i class="fas fa-pen-to-square mr-2"></i>
                                    Update Status
                                </button>
                            @else
                                <button type="button" disabled
                                    class="flex items-center text-white bg-secondary/50 px-4 py-2 rounded-lg cursor-not-allowed">
                                    <i class="fas fa-pen-to-square mr-2"></i>
                                    Update Status
                                </button>
                            @endif
                            <button type="button" data-id="{{ $cv->id }}"
                                class="open-call-applicant flex items-center text-white bg-green-500 px-4 py-2 rounded-lg cursor-pointer hover:bg-green-600">
                                <i class="fas fa-phone-volume mr-2"></i>
                                Hubungi Pelamar
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </x-admin.layout>

    @foreach ($cvs as $cv)
        {{-- Detail Modal Start --}}
        <div id="detail-cv-{{ $cv->id }}"
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
                        <h1 class="text-2xl font-bold text-white mb-2">Detail CV</h1>
                        <p class="text-white/90 text-base font-lato">Detail Pelamar yang mengirimkan CV</p>
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
                                <i class="fas fa-user"></i>
                                Nama Pelamar
                            </label>
                            <input type="text" id="title" name="title" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $cv->applicant_name }}">
                        </div>

                        <div class="group">
                            <label for="date_of_birth"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-calendar-days"></i>
                                Tanggal Lahir (Usia)
                            </label>
                            <input type="text" id="date_of_birth" name="date_of_birth" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ \Carbon\Carbon::parse($cv->date_of_birth)->format('d/m/Y') }} ({{ \Carbon\Carbon::parse($cv->date_of_birth)->age }} tahun)">
                        </div>

                        <div class="group">
                            <label for="applicant_email"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-envelope"></i>
                                Email Pelamar
                            </label>
                            <input type="text" id="applicant_email" name="applicant_email" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $cv->applicant_email }}">
                        </div>

                        <div class="group">
                            <label for="applicant_phone_number"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-phone-volume"></i>
                                Nomor Telepon Pelamar
                            </label>
                            <input type="text" id="applicant_phone_number" name="applicant_phone_number" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $cv->applicant_phone_number }}">
                        </div>

                        <div class="group">
                            <label for="applicant_experience"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-hourglass-half"></i>
                                Pengalaman Pelamar
                            </label>
                            <textarea id="applicant_experience" name="applicant_experience" rows="4" maxlength="250" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white resize-none">{{ $cv->applicant_experience }}</textarea>
                        </div>

                        <div class="group">
                            <label for="applicant_phone_number"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-file"></i>
                                CV Pelamar
                            </label>
                            <div class="flex items-center space-x-3">
                                <a href="{{ Storage::url($cv->applicant_file) }}" target="_blank"
                                    class="flex flex-1 items-center text-white bg-blue-500 px-4 py-2 rounded-lg cursor-pointer hover:bg-blue-600">
                                    <i class="fas fa-file mr-2"></i>
                                    Lihat CV
                                </a>
                                <a href="{{ Storage::url($cv->applicant_file) }}"
                                    download="{{ $cv->applicant_name }}.pdf"
                                    class="flex flex-1 items-center text-white bg-green-500 px-4 py-2 rounded-lg cursor-pointer hover:bg-green-600">
                                    <i class="fas fa-download mr-2"></i>
                                    Unduh CV
                                </a>
                            </div>
                        </div>

                        <div class="group">
                            <label for="status"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-toggle-on"></i>
                                Status
                            </label>
                            <input type="text" id="status" name="status" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $cv->status }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Detail Modal End --}}

        {{-- Update Status Start --}}
        <div id="update-status-{{ $cv->id }}"
            class="fixed z-[99999] inset-0 hidden justify-center items-center">
            <div class="close-modal absolute bg-black/40 inset-0 backdrop-blur-sm"></div>

            <div
                class="bg-white max-w-lg w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden p-4">
                <div class="flex justify-end">
                    <button
                        class="close-modal w-8 h-8 text-darkChoco flex justify-center items-center rounded-full hover:bg-text/30">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-center my-3 space-y-5">
                    <i class="fas fa-circle-exclamation text-7xl text-darkChoco/75"></i>
                    <h1 class="text-lg text-darkChoco font-semibold">Update Status untuk Pelamar</h1>
                </div>

                <div class="flex items-center justify-center space-x-3">
                    <form action="{{ route('cv.updateStatus', $cv->id) }}" method="post"
                        class="form-terima w-1/2 flex flex-col">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="Diterima">

                        <button type="button"
                            class="btn-terima flex items-center justify-center text-white text-lg bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600 cursor-pointer w-full">
                            <i class="fas fa-circle-check mr-2"></i>
                            Terima
                        </button>

                        <div class="note-field hidden mt-3">
                            <input type="text" name="note" required
                                class="w-full p-2 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Diterima sebagai...">
                        </div>

                        <button type="submit"
                            class="btn-kirim hidden items-center justify-center mt-2 text-white bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600 cursor-pointer w-full">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim
                        </button>
                    </form>

                    <form action="{{ route('cv.updateStatus', $cv->id) }}" method="post" class="w-1/2">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="Ditolak">
                        <button type="submit"
                            class="flex items-center justify-center text-white text-lg bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600 cursor-pointer w-full">
                            <i class="fas fa-circle-xmark mr-2"></i>
                            Tolak
                        </button>
                    </form>
                </div>
            </div>
        </div>
        {{-- Update Status End --}}

        {{-- Call Modal Start --}}
        <div id="call-modal-{{ $cv->id }}" class="fixed z-[99999] inset-0 hidden justify-center items-center">
            <div class="close-modal absolute bg-black/40 inset-0 backdrop-blur-sm"></div>

            <div
                class="bg-white max-w-lg w-full rounded-xl shadow-2xl relative border border-white/20 overflow-hidden">
                <div
                    class="flex justify-between items-center bg-gradient-to-r from-heading via-primary to-secondary p-5 relative overflow-hidden">
                    <h1 class="text-xl text-white font-bold">Pilih Metode Hubungi</h1>
                    <a href=""
                        class="close-modal w-8 h-8 text-white flex justify-center items-center rounded-full hover:bg-white/30">
                        <i class="fas fa-times"></i>
                    </a>
                </div>

                <div class="flex flex-col justify-center space-y-4 p-5">
                    <a href="https://wa.me/{{ $cv->applicant_phone_number }}" target="_blank"
                        class="flex items-center justify-center text-white text-lg bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Whatsapp
                    </a>
                    <a href="tel:{{ $cv->applicant_phone_number }}" target="_blank"
                        class="flex items-center justify-center text-white text-lg bg-amber-500 px-4 py-2 rounded-lg hover:bg-amber-600">
                        <i class="fas fa-phone mr-2"></i>
                        Telepon
                    </a>
                    <a href="mailto:{{ $cv->applicant_email }}" target="_blank"
                        class="flex items-center justify-center text-white text-lg bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">
                        <i class="fas fa-envelope mr-2"></i>
                        Email
                    </a>
                </div>
            </div>
        </div>
        {{-- Call Modal End --}}
    @endforeach

</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    @if (session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1500,
        });
    @endif
</script>

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

<script src="{{ asset('asset-admin/js/sidebar.js') }}"></script>
<script src="{{ asset('asset-admin/js/cv.js') }}"></script>

</html>
