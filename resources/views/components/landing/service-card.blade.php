@props(['icon', 'title', 'description'])

<div class="slide-item-left">
    <div class="bg-white shadow-3 rounded-xl p-6 h-48">
        <div class="flex justify-center items-center flex-col gap-4">
            <div class="inline-flex justify-center bg-secondary w-12 h-12 p-3 rounded-lg">
                <i class="{{ $icon }} text-white text-2xl"></i>
            </div>
            <h1 class="text-heading font-semibold text-xl">{{ $title }}</h1>
            <p class="text-text text-base text-center">{{ $description }}</p>
        </div>
    </div>
</div>
