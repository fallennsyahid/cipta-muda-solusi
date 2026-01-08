@props(['href', 'icon' => null, 'mobile' => false])

@if ($mobile)
    <li>
        <a href="{{ $href }}"
            class="group flex items-center gap-3 text-gray-700 hover:text-primary transition duration-300">
            @if ($icon)
                <i class="{{ $icon }} group-hover:scale-110 transition-transform duration-300"></i>
            @endif
            <span>{{ $slot }}</span>
        </a>
    </li>
@else
    <li class="group">
        <a href="{{ $href }}" class="text-base font-medium text-black2 group-hover:text-primary">
            {{ $slot }}
        </a>
    </li>
@endif
