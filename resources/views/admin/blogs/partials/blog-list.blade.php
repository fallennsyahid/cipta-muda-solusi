@foreach ($blogs as $blog)
    <div class="bg-white rounded-2xl shadow-lg p-5 geometric-shape hover:shadow-xl">
        <div class="flex justify-between items-start">
            <div class="flex items-center gap-3">
                <div class="aspect-video w-40 overflow-hidden rounded-lg">
                    <img src="{{ Storage::url($blog->image) }}" alt="{{ $blog->title }}" class="rounded-lg">
                </div>
                <div class="flex flex-col space-y-1">
                    <div class="flex items-center space-x-3 flex-wrap">
                        <h1 class="text-base text-heading font-semibold capitalize truncate max-w-sm">
                            {{ $blog->title }}
                        </h1>
                        @if ($blog->status === 'Published')
                            <span class="bg-green-200 px-2 py-1 rounded-full text-green-700">Published</span>
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
                            {!! $blog->description !!}
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
                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="delete-form">
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
                        <img src="{{ Storage::url($blog->user->profile_picture) }}" alt="{{ $blog->user->name }}"
                            class="w-6 h-6 rounded-full mr-2 object-cover">
                        {{ $blog->user->name }}
                    @elseif ($blog->user)
                        <img src="{{ Avatar::create($blog->user->name)->toBase64() }}" alt="{{ $blog->user->name }}"
                            class="w-6 h-6 rounded-full mr-2 object-cover">
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
