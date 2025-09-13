<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelamar - {{ $job->position }}</title>
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
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
            rel="stylesheet">

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
            integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="min-h-screen bg-gradient-to-br from-section via-white to-accent">

        <x-admin.layout>
            <div class="max-w-6xl mx-auto py-10 px-6">
                {{-- Header --}}
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h1 class="text-3xl font-bold text-color-heading">{{ $job->position }}</h1>
                        <p class="text-color-text mt-1">Daftar pelamar untuk lowongan ini</p>
                    </div>
                    <a href="{{ route('jobs.index') }}"
                        class="px-5 py-2 rounded-lg bg-color-secondary text-white font-medium shadow hover:bg-blue-700 transition">
                        <i class="fas fa-arrow-left mr-2"></i> Kembali
                    </a>
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
                    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($applicants as $applicant)
                            <div
                                class="bg-white rounded-2xl shadow hover:shadow-lg transition p-6 flex flex-col justify-between">
                                {{-- Header --}}
                                <div class="flex items-center gap-4 mb-4">
                                    <div
                                        class="h-14 w-14 rounded-full bg-color-accent flex items-center justify-center text-color-heading font-bold text-lg">
                                        {{ strtoupper(substr($applicant->full_name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-color-darkChoco">
                                            {{ $applicant->full_name }}</h3>
                                        <p class="text-sm text-color-text">
                                            {{ \Carbon\Carbon::parse($applicant->date_of_birth)->age }} thn</p>
                                    </div>
                                </div>

                                {{-- Info --}}
                                <div class="space-y-2 text-sm text-color-text">
                                    <p><i class="fas fa-envelope mr-2 text-color-secondary"></i> {{ $applicant->email }}
                                    </p>
                                    <p><i class="fas fa-phone mr-2 text-color-secondary"></i>
                                        {{ $applicant->phone_number }}</p>
                                    @if ($applicant->link)
                                        <p>
                                            <i class="fas fa-link mr-2 text-color-secondary"></i>
                                            <a href="{{ $applicant->link }}" target="_blank"
                                                class="hover:underline text-color-heading">
                                                Portfolio / Profile
                                            </a>
                                        </p>
                                    @endif
                                </div>

                                {{-- Experience Preview --}}
                                <div
                                    class="mt-4 bg-color-accent/50 p-3 rounded-lg text-sm text-color-darkChoco max-h-24 overflow-y-auto">
                                    {{ Str::limit($applicant->experience, 150, '...') }}
                                </div>

                                {{-- Actions --}}
                                <div class="mt-6 flex justify-between items-center">
                                    <a href="{{ asset('storage/' . $applicant->cv) }}"
                                        class="px-4 py-2 rounded-lg bg-color-primary text-white font-medium flex items-center gap-2 hover:bg-blue-800 transition"
                                        target="_blank">
                                        <i class="fas fa-file-pdf"></i> Lihat CV
                                    </a>
                                    @if ($applicant->cover_letter)
                                        <button type="button"
                                            class="px-4 py-2 rounded-lg bg-color-secondary text-white font-medium flex items-center gap-2 hover:bg-blue-700 transition"
                                            onclick="openCoverLetter('{{ $applicant->cover_letter }}')">
                                            <i class="fas fa-envelope-open"></i> Cover Letter
                                        </button>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- Modal Cover Letter --}}
            <div id="coverLetterModal" class="fixed inset-0 hidden bg-black/50 flex items-center justify-center z-50">
                <div class="bg-white rounded-2xl shadow-lg p-6 max-w-lg w-full">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold text-color-heading">Cover Letter</h2>
                        <button onclick="closeCoverLetter()" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div id="coverLetterContent" class="text-color-darkChoco text-sm leading-relaxed"></div>
                </div>
            </div>

            <script>
                function openCoverLetter(content) {
                    document.getElementById('coverLetterContent').innerText = content || 'Tidak ada cover letter';
                    document.getElementById('coverLetterModal').classList.remove('hidden');
                }

                function closeCoverLetter() {
                    document.getElementById('coverLetterModal').classList.add('hidden');
                }
            </script>
        </x-admin.layout>

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

</body>

</html>
