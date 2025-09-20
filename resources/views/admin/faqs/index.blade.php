<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cipta Muda Solusi - Faqs</title>

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
                <h1 class="text-2xl text-heading font-bold">FAQ Management</h1>
                <p class="text-text font-lato">Manage frequently asked questions and help content</p>
            </div>
            <div>
                <button type="button" id="open-modal"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-plus"></i>
                    Tambahkan FAQ Baru
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Total FAQ
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                        <i class="fas fa-question-circle text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalFaqs }}
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
                    {{ $totalPublished }}
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
                    {{ $totalPending }}
                </div>
            </div>
            <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                    <h1 class="text-sm font-medium text-text">
                        Belum Dijawab
                    </h1>
                    <div class="w-8 h-8 rounded-lg bg-gray-600 flex justify-center items-center">
                        <i class="fas fa-hourglass-half text-white text-base"></i>
                    </div>
                </div>
                <div class="text-2xl text-primary mt-1 font-bold">
                    {{ $totalBelumDijawab }}
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            @foreach ($faqs as $index => $faq)
                <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                    <div class="flex justify-between">
                        <div class="flex items-center gap-3">
                            <span class="py-1 px-3 bg-secondary/25 rounded-sm text-text">
                                #{{ $index + 1 }}
                            </span>
                            @if ($faq->is_published === 'Pending')
                                <span class="bg-amber-200 px-2 py-1 rounded-full text-amber-700">Pending</span>
                            @elseif ($faq->is_published === 'Published')
                                <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Published</span>
                            @else
                                <span class="bg-red-200 px-2 py-1 rounded-full text-red-700">Unpublished</span>
                            @endif

                            @if ($faq->status === 'Sudah Dijawab')
                                <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Sudah Dijawab</span>
                            @else
                                <span class="bg-red-200 px-2 py-1 rounded-full text-red-700">Belum Dijawab</span>
                            @endif
                        </div>
                        <div class="relative z-50 flex items-center gap-2">
                            <button type="button"
                                class="h-9 w-9 rounded-full flex items-center justify-center cursor-pointer hover:bg-text/20">
                                <i class="fas fa-ellipsis"></i>
                            </button>
                            <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button class="cursor-pointer">
                                    <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <button type="button" class="dropdown-button cursor-pointer">
                        <div class="flex items-start gap-3 mt-3">
                            <i class="dropdown-icon fas fa-chevron-right text-text text-sm mt-2"></i>
                            <h1 class="text-heading font-semibold text-xl text-start line-clamp-1">
                                {{ $faq->question }}
                            </h1>
                        </div>
                    </button>

                    <div
                        class="dropdown-content opacity-0 scale-y-0 max-h-0 overflow-hidden transition-all duration-500 ease-in-out origin-top">
                        <div class="bg-gray-100 p-4 font-lato rounded-lg mt-2 mb-4 w-full">
                            <p class="text-text text-start font-lato">
                                {{ $faq->answer }}
                            </p>
                        </div>

                        <div class="flex justify-between">
                            <div class="flex space-x-3">
                                <span class="flex items-center text-sm text-text">
                                    <i class="far fa-calendar mr-2"></i>
                                    Masuk pada: {{ $faq->created_at->format('d/m/Y') }}
                                </span>
                                <span class="flex items-center text-sm text-text">
                                    <i class="far fa-edit mr-2"></i>
                                    Dijawab pada: {{ $faq->updated_at->format('d/m/Y') }}
                                </span>
                            </div>
                            <div class="flex items-center gap-2">
                                @if ($faq->status === 'Belum Dijawab')
                                    <button type="submit"
                                        class="flex items-center text-white px-4 py-2 rounded-lg  bg-green-500/75 cursor-not-allowed">
                                        <i class="fas fa-check-circle mr-2"></i>
                                        Publish
                                    </button>
                                @else
                                    @if ($faq->is_published === 'Pending')
                                        <form action="{{ route('faqs.updateStatus', $faq->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit"
                                                class="flex items-center text-white px-4 py-2 rounded-lg  bg-green-500 hover:bg-green-600 cursor-pointer">
                                                <i class="fas fa-check-circle mr-2"></i>
                                                Publish
                                            </button>
                                        </form>
                                    @elseif ($faq->is_published === 'Published')
                                        <form action="{{ route('faqs.updateStatus', $faq->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit"
                                                class="flex items-center text-white px-4 py-2 rounded-lg  bg-red-500 hover:bg-red-600 cursor-pointer">
                                                <i class="fas fa-circle-xmark mr-2"></i>
                                                Unpublished
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('faqs.updateStatus', $faq->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit"
                                                class="flex items-center text-white px-4 py-2 rounded-lg  bg-green-500 hover:bg-green-600 cursor-pointer">
                                                <i class="fas fa-check-circle mr-2"></i>
                                                Publish
                                            </button>
                                        </form>
                                    @endif
                                @endif

                                @if ($faq->answer === '-')
                                    <button type="button" data-id="{{ $faq->id }}"
                                        class="answer-question flex items-center text-white px-4 py-2 rounded-lg bg-secondary hover:bg-secondary/90 cursor-pointer">
                                        <i class="fas fa-reply mr-2"></i>
                                        Jawab
                                    </button>
                                @else
                                    <button type="button" data-id="{{ $faq->id }}"
                                        class="edit-answer flex items-center text-white px-4 py-2 rounded-lg bg-amber-400 hover:bg-amber-500 cursor-pointer">
                                        <i class="fas fa-pen mr-2"></i>
                                        Edit Jawaban
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Create FAQ Start --}}
        <div id="create-faq-modal"
            class="fixed inset-0 z-[99999] hidden items-center justify-center min-h-screen animate-fade-in">
            <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

            <div class="relative bg-white rounded-xl shadow-xl max-w-md w-full">
                <div class="flex items-center justify-between p-6 border-b border-text/25">
                    <div>
                        <h1 class="text-heading text-2xl font-bold">Buat FAQ Baru</h1>
                        <h2 class="text-text font-lato text-base">
                            Tambahkan pertanyaan dan jawaban yang akan tampil di halaman FAQ
                        </h2>
                    </div>
                    <div>
                        <a href="#"
                            class="close-modal flex items-center justify-center w-10 h-10 p-0 rounded-full hover:bg-secondary/25 transition-colors duration-200 ease-in-out">
                            <i class="fas fa-times text-primary"></i>
                        </a>
                    </div>
                </div>

                <div class="p-6 max-h-96 overflow-y-auto custom-scrollbar">
                    <form action="{{ route('faqs.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="space-y-3">
                            <div class="mb-2">
                                <label for="question_input" class="text-base text-heading font-medium">
                                    Masukkan Pertanyaan
                                </label>
                            </div>
                            <div class="relative">
                                <div class="absolute inset-0 left-0 pl-3 top-4 flex pointer-events-none">
                                    <i class="fas fa-question text-text"></i>
                                </div>
                                <div class="char-counter">
                                    <textarea name="question_input" id="question_input" rows="5" maxlength="150"
                                        placeholder="Masukkan pertanyaan" required
                                        class="w-full pl-10 pr-3 py-3 border border-text/25 text-darkChoco rounded-lg text-base resize-none focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                    <p class="text-sm text-text">
                                        <span class="char-count">0</span>/150 Karakter
                                    </p>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label for="answer_input" class="text-base text-heading font-medium">Masukkan
                                    Jawaban</label>
                            </div>
                            <div class="relative">
                                <div class="absolute inset-0 left-0 pl-3 top-4 flex pointer-events-none">
                                    <i class="fas fa-message text-text"></i>
                                </div>
                                <textarea name="answer_input" id="answer_input" rows="5" maxlength="300"
                                    placeholder="Masukkan jawaban dari pertanyaan" required
                                    class="w-full pl-10 pr-3 py-3 border border-text/25 text-darkChoco rounded-lg text-base resize-none focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                <p class="text-sm text-text">
                            </div>
                            <p class="text-sm text-text font-lato">Tim kami akan merespon pertanyaan Anda segera
                            </p>
                        </div>

                        <div class="flex gap-3 pt-2">
                            <button type="button"
                                class="close-modal flex justify-center items-center py-3 border border-text/25 flex-1 gap-2 text-primary font-semibold rounded-lg hover:bg-primary hover:text-white hover:transition-all duration-300 ease-in-out cursor-pointer">
                                <i class="fas fa-times"></i>
                                Batal
                            </button>
                            <button type="submit" id="submit-button"
                                class="flex-1 flex justify-center items-center py-3 bg-primary text-white font-semibold gap-2 rounded-lg hover:bg-primary/90 transition-all duration-300 ease-in-out cursor-pointer disabled:bg-primary disabled:opacity-50 disabled:cursor-not-allowed">
                                <i class="fas fa-paper-plane"></i>
                                Kirim
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Create FAQ End --}}

        {{-- Modal Jawab Pertanyaan Start --}}
        @foreach ($faqs as $faq)
            <div id="answer-question-modal-{{ $faq->id }}"
                class="fixed inset-0 z-[99999] min-h-screen hidden items-center justify-center animate-fade-in">
                <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

                <div class="relative bg-white rounded-xl shadow-xl max-w-md w-full my-4">
                    <div class="flex items-center justify-between p-6 border-b border-text/25">
                        <div>
                            <h1 class="text-heading text-2xl font-bold">Jawab Pertanyaan</h1>
                            @if ($faq->email)
                                <h2 class="text-text font-lato text-base">Pengirim: {{ $faq->email }}</h2>
                            @else
                                <h2 class="text-text font-lato text-base">Pengirim: -</h2>
                            @endif
                        </div>
                        <div>
                            <a href="#"
                                class="close-modal flex items-center justify-center w-10 h-10 p-0 rounded-full hover:bg-secondary/25 transition-colors duration-200 ease-in-out">
                                <i class="fas fa-times text-primary"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-6 space-y-6">
                        <div class="mb-2">
                            <label for="question" class="text-base text-heading font-medium">Pertanyaan
                            </label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-0 left-0 pl-3 top-4 flex pointer-events-none">
                                <i class="fas fa-question text-text"></i>
                            </div>
                            <textarea name="question" id="question" rows="5" readonly
                                class="w-full pl-10 pr-3 py-3 border border-text/25 text-darkChoco rounded-lg text-base resize-none focus:outline-none focus:ring-2 focus:ring-primary">{{ $faq->question }}</textarea>
                        </div>
                        <form action="{{ route('faq.answer', $faq->id) }}" id="question-form" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="space-y-3">
                                <div class="mb-2">
                                    <label for="answer_input" class="text-base text-heading font-medium">Masukkan
                                        Jawaban</label>
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-0 left-0 pl-3 top-4 flex pointer-events-none">
                                        <i class="fas fa-message text-text"></i>
                                    </div>
                                    <textarea name="answer_input" id="answer_input" rows="5" placeholder="Masukkan pertanyaan (Max. 300 karakter)"
                                        required
                                        class="w-full pl-10 pr-3 py-3 border border-text/25 text-darkChoco rounded-lg text-base resize-none focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                                </div>
                                <p class="text-sm text-text font-lato">Tim kami akan merespon pertanyaan Anda segera
                                </p>
                            </div>

                            <div class="flex gap-3 pt-2">
                                <button type="button"
                                    class="close-modal flex justify-center items-center py-3 border border-text/25 flex-1 gap-2 text-primary font-semibold rounded-lg hover:bg-primary hover:text-white hover:transition-all duration-300 ease-in-out cursor-pointer">
                                    <i class="fas fa-times"></i>
                                    Batal
                                </button>
                                <button type="submit" id="submit-button"
                                    class="flex-1 flex justify-center items-center py-3 bg-primary text-white font-semibold gap-2 rounded-lg hover:bg-primary/90 transition-all duration-300 ease-in-out cursor-pointer disabled:bg-primary disabled:opacity-50 disabled:cursor-not-allowed">
                                    <i class="fas fa-paper-plane"></i>
                                    Kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- Modal Jawab Pertanyaan End --}}

        {{-- Edit Jawaban FAQ Start --}}
        @foreach ($faqs as $faq)
            <div id="edit-answer-modal-{{ $faq->id }}"
                class="fixed inset-0 z-[99999] min-h-screen hidden items-center justify-center animate-fade-in">
                <div class="close-modal absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

                <div class="relative bg-white rounded-xl shadow-xl max-w-md w-full my-4">
                    <div class="flex items-center justify-between p-6 border-b border-text/25">
                        <div>
                            <h1 class="text-heading text-2xl font-bold">Edit Jawaban</h1>
                            <h2 class="text-text font-lato text-base">Koreksi jawaban jika ada kesalahan</h2>

                        </div>
                        <div>
                            <a href="#"
                                class="close-modal flex items-center justify-center w-10 h-10 p-0 rounded-full hover:bg-secondary/25 transition-colors duration-200 ease-in-out">
                                <i class="fas fa-times text-primary"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-6 space-y-6">
                        <div class="mb-2">
                            <label for="question" class="text-base text-heading font-medium">Pertanyaan
                            </label>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-0 left-0 pl-3 top-4 flex pointer-events-none">
                                <i class="fas fa-question text-text"></i>
                            </div>
                            <textarea name="question" id="question" rows="5" readonly
                                class="w-full pl-10 pr-3 py-3 border border-text/25 text-darkChoco rounded-lg text-base resize-none focus:outline-none focus:ring-2 focus:ring-primary">{{ $faq->question }}</textarea>
                        </div>
                        <form action="{{ route('faqs.update', $faq->id) }}" id="question-form" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="space-y-3">
                                <div class="mb-2">
                                    <label for="edit_answer_input" class="text-base text-heading font-medium">Masukkan
                                        Jawaban</label>
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-0 left-0 pl-3 top-4 flex pointer-events-none">
                                        <i class="fas fa-message text-text"></i>
                                    </div>
                                    <textarea name="edit_answer_input" id="edit_answer_input" rows="5" maxlength="300"
                                        placeholder="Masukkan Jawaban" required
                                        class="w-full pl-10 pr-3 py-3 border border-text/25 text-darkChoco rounded-lg text-base resize-none focus:outline-none focus:ring-2 focus:ring-primary">{{ $faq->answer }}</textarea>
                                    <p class="text-sm text-text">
                                        <span id="char-count">0</span>/300 Karakter
                                    </p>
                                </div>
                                <p class="text-sm text-text font-lato">Tim kami akan merespon pertanyaan Anda segera
                                </p>
                            </div>

                            <div class="flex gap-3 pt-2">
                                <button type="button"
                                    class="close-modal flex justify-center items-center py-3 border border-text/25 flex-1 gap-2 text-primary font-semibold rounded-lg hover:bg-primary hover:text-white hover:transition-all duration-300 ease-in-out cursor-pointer">
                                    <i class="fas fa-times"></i>
                                    Batal
                                </button>
                                <button type="submit" id="submit-button"
                                    class="flex-1 flex justify-center items-center py-3 bg-primary text-white font-semibold gap-2 rounded-lg hover:bg-primary/90 transition-all duration-300 ease-in-out cursor-pointer disabled:bg-primary disabled:opacity-50 disabled:cursor-not-allowed">
                                    <i class="fas fa-paper-plane"></i>
                                    Kirim
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- Edit Jawaban FAQ End --}}

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

<script src="{{ asset('asset-admin/js/sidebar.js') }}"></script>
<script src="{{ asset('asset-admin/js/faq.js') }}"></script>

</html>
