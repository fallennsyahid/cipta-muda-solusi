<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('landing/icon-cms.png') }}" type="image/png">

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

    <x-admin-blog.sidebar></x-admin-blog.sidebar>

    <x-admin-blog.navbar></x-admin-blog.navbar>

    <div class="ml-74 mt-4 transition-all duration-700 ease-in-out" id="main-content">
        <main class="p-6 pt-20">
            <div class="space-y-6">
                <div class="bg-gradient-to-r from-primary to-secondary rounded-2xl p-8 text-white geometric-shape">
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-3xl text-white font-bold mb-2">
                                Welcome back, {{ Auth::check() ? Auth::user()->name : 'Admin Blog' }}
                            </h1>
                            <p class="font-lato text-lg">Let's write a blog that can make people more enthusiastic.</p>
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
                                Total Blog
                            </h1>
                            <div class="w-8 h-8 rounded-lg bg-primary flex justify-center items-center">
                                <i class="fas fa-newspaper text-white text-base"></i>
                            </div>
                        </div>
                        <div class="text-2xl text-primary mt-1 font-bold">
                            {{ $blogsTotal }}
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
                            {{ $blogsPublished }}
                        </div>
                    </div>
                    <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                        <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                            <h1 class="text-sm font-medium text-text">
                                Ready to Publish
                            </h1>
                            <div class="w-8 h-8 rounded-lg bg-amber-600 flex justify-center items-center">
                                <i class="fas fa-clock text-white text-base"></i>
                            </div>
                        </div>
                        <div class="text-2xl text-primary mt-1 font-bold">
                            {{ $blogsPending }}
                        </div>
                    </div>
                    <div class="bg-white shadow-md p-4 rounded-xl geometric-shape hover:shadow-lg">
                        <div class="flex flex-row justify-between items-center space-y-0 pb-2">
                            <h1 class="text-sm font-medium text-text">
                                Archived
                            </h1>
                            <div class="w-8 h-8 rounded-lg bg-gray-600 flex justify-center items-center">
                                <i class="fas fa-box-archive text-white text-base"></i>
                            </div>
                        </div>
                        <div class="text-2xl text-primary mt-1 font-bold">
                            {{ $blogsArchived }}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    {{-- Create Blog Start --}}
    {{-- <div id="create-new-blog" class="fixed inset-0 z-99999 hidden items-center justify-center p-4 animate-fade-in">
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
    </div> --}}
    {{-- Create Blog End --}}
</body>

<script src="{{ asset('asset-admin/js/dashboard.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js">
    < /> <
    script >
        // ambil canvas
        const ctx = document.getElementById('myChart').getContext('2d');

    // data contoh (sesuaikan nilai kalau mau)
    const labels = ['Category 1', 'Category 2', 'Category 3', 'Category 4'];

    const data = {
        labels,
        datasets: [{
                label: 'Series 1',
                data: [4.3, 2.5, 3.5, 4.6], // nilai untuk tiap kategori
                backgroundColor: 'rgba(59,130,246,0.95)', // biru (Tailwind blue-500 kira2)
                borderRadius: 6,
                barThickness: 18
            },
            {
                label: 'Series 2',
                data: [2.6, 4.5, 2.1, 2.8],
                backgroundColor: 'rgba(249,115,22,0.95)', // orange
                borderRadius: 6,
                barThickness: 18
            },
        ]
    };

    // konfigurasi chart
    const config = {
        type: 'bar', // 'bar' + indexAxis:'y' => horizontal bar chart
        data,
        options: {
            indexAxis: 'y', // horizontal bars
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        boxWidth: 18,
                        padding: 16
                    }
                },
                title: {
                    display: false
                },
                tooltip: {
                    mode: 'index',
                    intersect: false
                }
            },
            layout: {
                padding: {
                    top: 6,
                    right: 6,
                    bottom: 6,
                    left: 6
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
                    },
                    max: 6 // atur maksimal sumbu X kalau ingin mirip gambar (opsional)
                },
                y: {
                    // tampilkan kategori dari bawah ke atas sama seperti gambar (Category 4 di atas)
                    reverse: true,
                    grid: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        padding: 12
                    }
                }
            },
            // gaya transisi halus
            animation: {
                duration: 600,
                easing: 'easeOutQuart'
            },
            // menjaga gap antar kelompok bar
            datasets: {
                bar: {
                    categoryPercentage: 0.7,
                    barPercentage: 0.9
                }
            }
        }
    };

    // buat chart
    const myChart = new Chart(ctx, config);

    // contoh: update data secara dinamis (opsional)
    // setTimeout(() => {
    //   myChart.data.datasets[0].data = [3.9, 2.0, 4.1, 4.9];
    //   myChart.update();
    // }, 2000);
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
    const logoutForm = document.querySelector('#logout-form');
    const logoutBtn = document.querySelector('#logout-btn');

    logoutBtn.addEventListener('click', (e) => {
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
                logoutForm.submit();
            }
        })
    });
</script>

</html>
