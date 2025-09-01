@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'placeholder:text-base placeholder:text-text/50 shadow-sm']) }}>
