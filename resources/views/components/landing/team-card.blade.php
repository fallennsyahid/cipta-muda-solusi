@props(['image', 'name', 'position', 'quote', 'linkedin' => '#', 'instagram' => '#', 'offset' => false])

<div
    class="bg-white shadow-4 p-6 rounded-xl border border-[#c8c8c8] flex flex-col items-center {{ $offset ? 'translate-y-0 lg:translate-y-6' : '' }}">
    <div class="relative mb-4">
        <img src="{{ asset($image) }}" alt="{{ $name }}" class="rounded-full h-28 w-28 object-contain"
            loading="lazy">
    </div>
    <h1 class="text-base text-heading font-bold text-center mb-1">{{ $name }}</h1>
    <h2 class="text-sm font-semibold text-heading text-center mb-3">{{ $position }}</h2>
    <p class="text-text text-sm italic text-center mb-6">"{{ $quote }}"</p>

    <div class="flex items-center gap-6">
        <a href="{{ $linkedin }}" target="_blank" rel="noopener noreferrer"
            class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center group hover:bg-primary transition-colors duration-300 ease-in-out">
            <i class="fab fa-linkedin text-2xl text-heading group-hover:text-white"></i>
        </a>
        <a href="{{ $instagram }}" target="_blank" rel="noopener noreferrer"
            class="w-10 h-10 bg-secondary/25 p-2 rounded-full flex justify-center items-center group hover:bg-primary transition-colors duration-300 ease-in-out">
            <i class="fab fa-instagram text-2xl text-heading group-hover:text-white"></i>
        </a>
    </div>
</div>
