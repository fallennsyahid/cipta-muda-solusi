@props(['icon', 'title'])

<div class="relative w-full max-w-sm mx-auto">
    <div class="absolute inset-0 bg-secondary/45 rounded-lg rotate-4 z-0"></div>
    <div class="relative z-10 bg-accent p-6 rounded-lg flex flex-col items-center">
        <div class="inline-flex bg-secondary items-center justify-center rounded-sm py-3 px-2 mb-3">
            <i class="{{ $icon }} text-2xl text-white"></i>
        </div>
        <h1 class="font-semibold text-2xl text-heading text-center">{{ $title }}</h1>
    </div>
</div>
