<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pelamar - {{ $job->position }}</title>

    <link rel="shortcut icon" href="{{ asset('landing/icon-cms.png') }}" type="image/png">

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

<body class="bg-color-section min-h-screen">

    <x-admin.layout>
        <div class="flex flex-wrap items-center justify-between">
            <div class="space-y-2">
                <h1 class="text-2xl text-heading font-bold">{{ $job->position }}</h1>
                <p class="text-text font-lato">Daftar pelamar untuk lowongan ini</p>
            </div>
            <div>
                <a href="{{ route('jobs.index') }}"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total Pelamar
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-heading flex justify-center items-center">
                        <i class="fas fa-briefcase text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalApplicants }}
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
                    {{ $pendingApplicants }}
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
                    {{ $acceptApplicants }}
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
                    {{ $deniedApplicants }}
                </div>
            </div>
        </div>

        {{-- Applicants Grid --}}
        @if ($applicants->isEmpty())
            <div class="flex flex-col items-center justify-center py-20 bg-gray-50 rounded-2xl shadow-inner">
                <i class="fas fa-users text-6xl text-gray-400 mb-5 animate-bounce"></i>
                <h2 class="text-2xl font-semibold text-gray-700 mb-2">Belum ada pelamar</h2>
                <p class="text-gray-500 text-center max-w-md">
                    Belum ada yang melamar posisi ini. Silakan tunggu pelamar masuk.
                </p>
            </div>
        @else
            <div class="grid gap-6 grid-cols-1">
                @foreach ($applicants as $applicant)
                    <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                        <div class="flex items-start justify-between gap-4 mb-4">
                            <div class="flex items-center space-x-3">
                                @if ($applicant->applicant_picture)
                                    <img src="{{ Storage::url($applicant->applicant_picture) }}" alt=""
                                        class="w-16 h-16 rounded-full border border-text/25 p-2">
                                @else
                                    <div
                                        class="h-16 w-16 rounded-full bg-accent flex items-center justify-center text-heading font-bold text-xl">
                                        {{ strtoupper(substr($applicant->full_name, 0, 1)) }}
                                    </div>
                                @endif
                                <div>
                                    <h3 class="text-2xl font-semibold text-darkChoco">
                                        {{ $applicant->full_name }}</h3>
                                    <span class="text-text">
                                        {{ \Carbon\Carbon::parse($applicant->date_of_birth)->age }} thn</span>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3 relative z-50">
                                @if ($applicant->status === 'Pending')
                                    <div class="bg-amber-200 px-4 py-2 rounded-full text-amber-700">
                                        {{ $applicant->status }}
                                    </div>
                                @elseif ($applicant->status === 'Diterima')
                                    <div class="bg-green-200 px-4 py-2 rounded-full text-green-700">
                                        {{ $applicant->status }}
                                    </div>
                                @else
                                    <div class="bg-red-200 px-4 py-2 rounded-full text-red-700">
                                        {{ $applicant->status }}
                                    </div>
                                @endif
                                <form action="{{ route('applicant.delete', $applicant->id) }}" method="post"
                                    class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="cursor-pointer">
                                        <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                        {{-- Info --}}
                        <div class="flex items-center space-x-5 text-sm text-text mt-5">
                            <p class="text-base">
                                <i class="fas fa-envelope mr-2 text-secondary"></i>
                                {{ $applicant->email }}
                            </p>
                            <p class="text-base">
                                <i class="fas fa-phone mr-2 text-secondary"></i>
                                {{ $applicant->phone_number }}
                            </p>
                            @if ($applicant->link)
                                <p class="text-base">
                                    <i class="fas fa-link mr-2 text-secondary"></i>
                                    <a href="{{ $applicant->link }}" target="_blank"
                                        class="hover:underline text-heading">
                                        Portfolio / Profile
                                    </a>
                                </p>
                            @endif
                            <p class="text-base">
                                <i class="far fa-calendar-days mr-2 text-secondary"></i>
                                Melamar pada:
                                {{ $applicant->created_at->format('d/m/Y') }}
                            </p>
                        </div>

                        {{-- Experience Preview --}}
                        <div class="mt-4 bg-accent/50 p-3 rounded-lg text-base text-darkChoco max-h-36 overflow-y-auto">
                            {{ Str::limit($applicant->experience, 150, '...') }}
                        </div>

                        {{-- Actions --}}
                        <div class="mt-6 flex justify-between items-center space-x-1">
                            <div class="flex items-center space-x-3">
                                <a href="{{ asset('storage/' . $applicant->cv) }}"
                                    class="px-4 py-2 rounded-lg bg-primary text-white font-medium flex items-center gap-2 hover:bg-blue-800 transition"
                                    target="_blank">
                                    <i class="fas fa-file-pdf"></i> Lihat CV
                                </a>
                                @if ($applicant->cover_letter)
                                    <button type="button" data-id="{{ $applicant->id }}"
                                        class="open-cover-letter px-4 py-2 rounded-lg bg-secondary text-white font-medium flex items-center gap-2 hover:bg-blue-700 transition">
                                        <i class="fas fa-envelope-open"></i> Cover Letter
                                    </button>
                                @endif
                            </div>
                            <div class="flex items-center space-x-3">
                                <button type="button" data-id="{{ $applicant->id }}"
                                    class="call-applicant px-4 py-2 rounded-lg bg-green-500 text-white font-medium flex items-center hover:bg-green-600 transition">
                                    <i class="fas fa-phone-volume mr-2"></i>
                                    Hubungi Pelamar
                                </button>
                                @if ($applicant->status === 'Pending')
                                    <button type="button" data-id="{{ $applicant->id }}"
                                        class="open-update-status px-4 py-2 rounded-lg bg-amber-500 text-white font-medium flex items-center gap-2 hover:bg-amber-600 transition">
                                        <i class="fas fa-pen"></i>
                                        Update Status
                                    </button>
                                @else
                                    <button type="button" disabled
                                        class="px-4 py-2 rounded-lg bg-amber-500/50 cursor-not-allowed text-white font-medium flex items-center gap-2">
                                        <i class="fas fa-pen"></i>
                                        Update Status
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="flex justify-end mt-4">
            {{ $applicants->links() }}
        </div>

    </x-admin.layout>

    {{-- Modal Update Status Start --}}
    @foreach ($applicants as $applicant)
        <div id="update-status-{{ $applicant->id }}"
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
                    <form action="{{ route('applicant.updateStatus', $applicant->id) }}" method="post"
                        class="form-terima w-1/2 flex flex-col">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="Diterima">

                        <button type="button"
                            class="btn-terima flex items-center justify-center text-white text-lg bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600 cursor-pointer w-full">
                            <i class="fas fa-circle-check mr-2"></i>
                            Terima
                        </button>

                        <div class="position-field hidden mt-3">
                            <input type="text" name="position" required
                                class="w-full p-2 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                placeholder="Diterima sebagai...">
                        </div>

                        <button type="submit"
                            class="btn-kirim hidden items-center justify-center mt-2 text-white bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600 cursor-pointer w-full">
                            <i class="fas fa-paper-plane mr-2"></i>
                            Kirim
                        </button>
                    </form>

                    <form action="{{ route('applicant.updateStatus', $applicant->id) }}" method="post"
                        class="w-1/2">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" id="status" value="Ditolak">
                        <input type="hidden" name="company_status" id="company_status" value="Ditolak">
                        <button type="submit"
                            class="flex items-center justify-center text-white text-lg bg-red-500 px-4 py-2 rounded-lg hover:bg-red-600 cursor-pointer">
                            <i class="fas fa-circle-xmark mr-2"></i>
                            Tolak
                        </button>
                    </form>
                </div>
            </div>
        </div>
        {{-- Modal Update Status End --}}

        {{-- Modall Call Applicant Start --}}
        <div id="call-modal-{{ $applicant->id }}" class="fixed z-[99999] inset-0 hidden justify-center items-center">
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
                    <a href="https://wa.me/{{ $applicant->phone_number }}" target="_blank"
                        class="flex items-center justify-center text-white text-lg bg-green-500 px-4 py-2 rounded-lg hover:bg-green-600">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Whatsapp
                    </a>
                    <a href="tel:{{ $applicant->phone_number }}" target="_blank"
                        class="flex items-center justify-center text-white text-lg bg-amber-500 px-4 py-2 rounded-lg hover:bg-amber-600">
                        <i class="fas fa-phone mr-2"></i>
                        Telepon
                    </a>
                    <a href="mailto:{{ $applicant->email }}" target="_blank"
                        class="flex items-center justify-center text-white text-lg bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">
                        <i class="fas fa-envelope mr-2"></i>
                        Email
                    </a>
                    @if ($applicant->link)
                        <a href="{{ $applicant->link }}" target="_blank"
                            class="flex items-center justify-center text-white text-lg bg-cyan-500 px-4 py-2 rounded-lg hover:bg-cyan-600">
                            <i class="fas fa-globe mr-2"></i>
                            Website / Social Media
                        </a>
                    @endif
                </div>
            </div>
        </div>
        {{-- Modall Call Applicant End --}}
    @endforeach
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
<script src="{{ asset('asset-admin/js/applicants.js') }}"></script>

</html>

</body>

</html>
