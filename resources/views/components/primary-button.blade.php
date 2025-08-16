<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center cursor-pointer']) }}>
    {{ $slot }}
</button>
