@props(['title', 'subtitle' => null])

<div class="mb-5">
    <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl text-heading text-center mb-3 md:mb-5">{{ $title }}</h1>
    <div class="w-25 h-1 mx-auto bg-secondary rounded-full"></div>
</div>
@if ($subtitle)
    <p class="font-lato text-text text-lg md:text-xl lg:text-2xl text-center max-w-5xl mx-auto px-4 lg:px-0">
        {{ $subtitle }}
    </p>
@endif
