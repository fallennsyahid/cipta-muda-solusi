@props(['icon', 'title', 'content'])

<div class="flex flex-col items-center text-center p-4 bg-white rounded-lg gap-2.5">
    <div
        class="inline-flex w-10 h-10 md:w-12 md:h-12 justify-center items-center text-white bg-gradient-to-br from-primary to-secondary rounded-sm">
        <i class="{{ $icon }} text-base md:text-xl"></i>
    </div>
    <h1 class="font-semibold text-primary text-lg md:text-xl">{{ $title }}</h1>
    <div class="text-text text-sm md:text-base font-lato">
        {{ $slot }}
    </div>
</div>
