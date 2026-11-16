{{-- Foto de perfil redonda. Uso: <x-avatar personagem="mamae-noel" tamanho="md" />
     Qual personagem cada usuário recebe (a partir do role) é decisão sua. --}}
@props(['personagem', 'tamanho' => 'md'])
@php
    $classes = match ($tamanho) {
        'sm' => 'h-9 w-9',
        'lg' => 'h-20 w-20',
        default => 'h-12 w-12',
    };
@endphp
<span {{ $attributes->merge(['class' => "inline-block shrink-0 overflow-hidden rounded-full bg-snow ring-2 ring-gold $classes"]) }}>
    <x-personagem :nome="$personagem" pose="avatar" class="h-full w-full object-cover object-top" />
</span>
