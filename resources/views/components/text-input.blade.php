@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'border-text border-2 focus:border-indigo-500 focus:ring-indigo-500 placeholder:text-base placeholder:text-text/50 shadow-sm']) }}>
