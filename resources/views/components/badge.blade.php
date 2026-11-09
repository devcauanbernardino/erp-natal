@props(['cor' => 'gold'])
@php
    $classes = match ($cor) {
        'red' => 'bg-berry text-snow',
        'green' => 'bg-holly text-snow',
        default => 'bg-gold text-night-dark',
    };
@endphp
<span {{ $attributes->merge(['class' => "inline-block rounded-full px-3 py-0.5 text-xs font-bold $classes"]) }}>
    {{ $slot }}
</span>
