<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cipta Muda Solusi - Blogs</title>

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

    {{-- Tiny --}}
    <script src="https://cdn.tiny.cloud/1/ne2ngogb6ctihvg1psfcx2556ehuqcmgw33s33ig8a5c53ki/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-section via-white to-accent">
    <x-admin.layout>
        <div class="flex flex-wrap items-center justify-between">
            <div class="space-y-2">
                <h1 class="text-2xl text-heading font-bold">Blogs Management</h1>
                <p class="text-text font-lato">Create and manage blog posts and articles</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <!-- Tombol Notifikasi -->
                    <button type="button" id="open-notif"
                        class="flex items-center gap-2 text-white font-semibold px-5 py-3 rounded-xl bg-gradient-to-r from-teal-500 to-teal-600 shadow-md hover:from-teal-600 hover:to-teal-700 transition-all duration-300">
                        <i class="fas fa-bell text-lg"></i>
                        <span>Request Publish</span>
                    </button>

                    @if ($notifications->count() > 0)
                        <span id="notifBadge"
                            class="absolute -top-1 -right-1 flex justify-center items-center w-5 h-5 text-xs font-bold text-white bg-red-500 rounded-full">
                            {{ $notifications->count() }}
                        </span>
                    @else
                        <span id="notifBadge"
                            class="absolute -top-1 -right-1 flex justify-center items-center w-5 h-5 text-xs font-bold text-white bg-red-500 rounded-full">
                            0
                        </span>
                    @endif

                    <!-- Dropdown -->
                    <div id="notifDropdown"
                        class="absolute w-80 bg-white shadow-xl left-0 top-14 rounded-xl border border-gray-100 z-20 overflow-hidden hidden">
                        <ul class="divide-y divide-gray-200">
                            @forelse ($notifications as $notif)
                                <li class="px-5 py-4 hover:bg-gray-50 transition">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <p class="text-sm">
                                                <strong class="text-teal-600">{{ $notif->data['author'] }}</strong>
                                                minta publish artikel:
                                                <em class="text-gray-700">{{ $notif->data['title'] }}</em>
                                            </p>
                                            <small class="text-xs text-gray-400 block mt-1">
                                                {{ $notif->created_at->diffForHumans() }}
                                            </small>
                                        </div>

                                        <form action="{{ route('blogs.approve', $notif->data['blog_id']) }}"
                                            method="POST" class="ml-3">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit"
                                                class="px-3 py-1 text-xs font-medium bg-green-500 text-white rounded-lg shadow hover:bg-green-600 transition">
                                                Approve
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @empty
                                <li class="px-5 py-4 text-sm text-gray-500 text-center">Tidak ada notifikasi</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
                <button type="button" id="open-modal"
                    class="flex items-center gap-4 text-white font-medium px-5 py-3 rounded-lg bg-gradient-to-r from-heading via-primary to-secondary cursor-pointer hover:from-secondary hover:via-primary hover:to-heading">
                    <i class="fas fa-plus"></i>
                    Tambahkan Blog Baru
                </button>
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
                        Pending
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

        <div class="flex flex-col gap-6">
            @foreach ($blogs as $blog)
                <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
                    <div class="flex justify-between items-start">
                        <div class="flex items-center gap-3">
                            <div class="aspect-video w-40 overflow-hidden rounded-lg">
                                <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}"
                                    class="rounded-lg">
                            </div>
                            <div class="flex flex-col space-y-1">
                                <div class="flex items-center space-x-3 flex-wrap">
                                    <h1 class="text-base text-heading font-semibold capitalize truncate max-w-sm">
                                        {{ $blog->title }}
                                    </h1>
                                    @if ($blog->status === 'Published')
                                        <span
                                            class="bg-green-200 px-2 py-1 rounded-full text-green-700">Published</span>
                                    @elseif ($blog->status === 'Pending')
                                        <span class="bg-amber-200 px-2 py-1 rounded-full text-amber-700">Pending</span>
                                    @else
                                        <span class="bg-gray-200 px-2 py-1 rounded-full text-gray-700">Archived</span>
                                    @endif

                                    <span
                                        class="bg-primary px-2 py-1 rounded-full text-white capitalize">{{ $blog->category }}</span>
                                </div>

                                <div>
                                    <p class="text-base text-text">
                                        {{ $blog->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="relative z-50 flex items-center gap-2">
                            @if ($blog->is_featured === 0)
                                <form action="{{ route('blogs.toggleFeatured', $blog->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="px-3 py-1 text-lg text-yellow-400 cursor-pointer">
                                        <i class="far fa-star"></i>
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('blogs.toggleFeatured', $blog->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="px-3 py-1 text-lg text-yellow-400 cursor-pointer">
                                        <i class="fas fa-star"></i>
                                    </button>
                                </form>
                            @endif
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button class="cursor-pointer">
                                    <i class="fas fa-trash text-red-500 hover:text-red-600"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="mt-5 flex justify-between">
                        <div class="flex items-center gap-3">
                            <span class="flex items-center text-sm text-text">
                                @if (optional($blog->user)->profile_picture)
                                    <img src="{{ Storage::url($blog->user->profile_picture) }}"
                                        alt="{{ $blog->user->name }}" class="w-6 h-6 rounded-full mr-2 object-cover">
                                    {{ $blog->user->name }}
                                @elseif ($blog->user)
                                    <img src="{{ Avatar::create($blog->user->name)->toBase64() }}"
                                        alt="{{ $blog->user->name }}" class="w-6 h-6 rounded-full mr-2 object-cover">
                                    {{ $blog->user->name }}
                                @else
                                    <img src="{{ Avatar::create('Admin')->toBase64() }}" alt="Admin"
                                        class="w-6 h-6 rounded-full mr-2 object-cover">
                                    <span class="italic text-gray-500">Admin</span>
                                @endif
                            </span>
                            <span class="flex items-center text-sm text-text">
                                <i class="fas fa-calendar mr-2"></i>
                                {{ $blog->created_at->format('d/m/Y') }}
                            </span>
                            <span class="flex items-center text-sm text-text">
                                <i class="fas fa-clock mr-2"></i>
                                {{ $blog->created_at->diffForHumans() }}
                            </span>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('blogs.show', $blog->id) }}"
                                class="flex items-center text-white bg-indigo-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-indigo-500">
                                <i class="fas fa-magnifying-glass mr-2"></i>
                                Preview
                            </a>
                            <button type="button" data-id="{{ $blog->slug }}"
                                class="open-modal-detail flex items-center text-white bg-gray-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-gray-500">
                                <i class="fas fa-eye mr-2"></i>
                                Detail
                            </button>
                            <button type="button" data-id="{{ $blog->slug }}"
                                class="open-modal-edit flex items-center text-white bg-amber-400 px-4 py-2 rounded-lg cursor-pointer hover:bg-amber-500">
                                <i class="fas fa-edit mr-2"></i>
                                Edit Blog
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-end mt-4">
            {{ $blogs->links() }}
        </div>

    </x-admin.layout>

    {{-- Modal Create Start --}}
    <div id="create-new-blog" class="fixed inset-0 z-[99999] hidden items-center justify-center p-4 animate-fade-in">
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
                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="description"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-align-left"></i>
                                Deksripsi<span class="text-red-400">*</span>
                            </label>
                            <div class="char-counter">
                                <textarea id="description" name="description" rows="4" maxlength="250" required
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white resize-none"
                                    placeholder="React, Vue, atau Angular? Panduan lengkap memilih framework yang sesuai dengan kebutuhan proyek Anda."></textarea>
                                <p class="text-sm text-text">
                                    <span class="char-count">0</span>/250 Karakter
                                </p>
                            </div>
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
    {{-- Modal Create End --}}

    {{-- Modal Detail Start --}}
    @foreach ($blogs as $blog)
        <div id="detail-blog-{{ $blog->slug }}"
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
                        <h1 class="text-2xl font-bold text-white mb-2">Detail Blog</h1>
                        <p class="text-white/90 text-base font-lato">Lihat semua detail blog</p>
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
                                value="{{ $blog->title }}">
                        </div>

                        <div class="group">
                            <label for="category"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-list"></i>
                                Kategori <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="category" name="category" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $blog->category }}" placeholder="Teknologi">
                        </div>

                        <div class="group">
                            <label for="author"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-user"></i>
                                Penulis/Pencipta <span class="text-red-400">*</span>
                            </label>
                            <input type="text" id="author" name="author" readonly
                                class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                value="{{ $blog->author }}" placeholder="Jakarta">
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
                                    placeholder="React, Vue, atau Angular? Panduan lengkap memilih framework yang sesuai dengan kebutuhan proyek Anda.">{{ $blog->description }}</textarea>
                                <p class="text-sm text-text">
                                    <span class="char-count">0</span>/250 Karakter
                                </p>
                            </div>
                        </div>

                        <div class="group">
                            <label for="content"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-table"></i>
                                Content<span class="text-red-400">*</span>
                            </label>
                            <div
                                class="prose w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                {!! $blog->content !!}
                            </div>
                        </div>


                        <div class="group">
                            <label for="image"
                                class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                <i class="fas fa-image"></i>
                                Gambar Blog <span class="text-red-400">*</span>
                            </label>
                            <div
                                class="px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white">
                                <img src="{{ Storage::url($blog->image) }}" alt="">
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
                                value="{{ $blog->status }}" placeholder="Jakarta">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- Modal Detail End --}}

    {{-- Modal Edit Start --}}
    @foreach ($blogs as $blog)
        <div id="edit-blog-{{ $blog->slug }}"
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
                        <h1 class="text-2xl font-bold text-white mb-2">Edit Blog</h1>
                        <p class="text-white/90 text-base font-lato">Edit atau perbaiki blog</p>
                    </div>

                    <button
                        class="close-modal absolute top-4 right-4 w-8 h-8 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center text-white cursor-pointer transition-all duration-300 hover:rotate-90">
                        <i class="fas fa-times text-lg"></i>
                    </button>
                </div>

                <div class="p-8 max-h-96 overflow-y-auto custom-scrollbar">
                    <form action="{{ route('blogs.update', $blog->id) }}" method="POST"
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
                                    value="{{ $blog->title }}"
                                    placeholder="Panduan Memilih Framework Web Development yang Tepat">
                            </div>

                            <div class="group">
                                <label for="category"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-list"></i>
                                    Kategori <span class="text-red-400">*</span>
                                </label>
                                <input type="text" id="category" name="category"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    value="{{ $blog->category }}" placeholder="Teknologi">
                            </div>

                            <div class="group">
                                <label for="author"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-user"></i>
                                    Penulis/Pencipta <span class="text-red-400">*</span>
                                </label>
                                <input type="text" id="author" name="author"
                                    class="w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white"
                                    value="{{ $blog->author }}" placeholder="Abraham">
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
                                        placeholder="React, Vue, atau Angular? Panduan lengkap memilih framework yang sesuai dengan kebutuhan proyek Anda.">{{ $blog->description }}</textarea>
                                    <p class="text-sm text-text">
                                        <span class="char-count">0</span>/250 Karakter
                                    </p>
                                </div>
                            </div>

                            <div class="group">
                                <label for="content"
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-table"></i>
                                    Content<span class="text-red-400">*</span>
                                </label>
                                <textarea id="content" name="content" rows="6"
                                    class="tinymce-editor w-full px-4 py-3 bg-slate-50 border border-text/25 rounded-lg focus:ring-2 focus:ring-secondary focus:border-transparent transition-all duration-200 hover:bg-white resize-none"
                                    placeholder="Transformasi digital telah menjadi kebutuhan mendesak bagi semua jenis bisnis, termasuk Usaha Kecil dan Menengah (UKM). Pandemi COVID-19 telah mempercepat adopsi teknologi digital, dan UKM yang tidak beradaptasi berisiko tertinggal dari kompetitor...">{{ $blog->content }}</textarea>
                            </div>

                            <div class="upload-group">
                                <label
                                    class="flex items-center gap-2 text-sm font-medium text-darkChoco mb-2 group-hover:text-heading transform-colors">
                                    <i class="fas fa-file"></i>
                                    Upload Gambar<span class="text-red-400">*</span>
                                </label>

                                <input type="file" name="edit_image" class="file-input hidden"
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
                                @if ($blog->image)
                                    <div class="border-b border-text/25 pb-2">
                                        <div class="flex justify-between bg-text/10 p-4 mt-2 rounded-lg">
                                            <div class="flex items-center gap-3">
                                                <div>
                                                    <img src="{{ Storage::url($blog->image) }}" alt=""
                                                        class="w-16 h-16 object-cover rounded-lg">
                                                </div>
                                                <a href="{{ Storage::url($blog->image) }}" target="_blank"
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
                                    @foreach ($blogStatus as $status)
                                        <option value="{{ $status->value }}"
                                            {{ $status->value === $blog->status ? 'selected' : '' }}>
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
    {{-- Modal Edit End --}}
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
            valid_styles: {},
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

<script src="{{ asset('asset-admin/js/blog.js') }}"></script>
<script src="{{ asset('asset-admin/js/sidebar.js') }}"></script>
<script src="{{ asset('asset-admin/js/preview-file.js') }}"></script>

</html>
