@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-xl text-heading']) }}>
    {{ $value ?? $slot }}
</label>
