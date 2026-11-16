{{-- Ilustração de um personagem. Uso: <x-personagem nome="duende" pose="comemorando" tamanho="md" /> --}}
@props(['nome', 'pose', 'tamanho' => 'md'])
@php
    // Os arquivos do Noel começam com "papai-noel-", mas a pasta se chama "noel"
    $prefixo = match ($nome) {
        'noel' => 'papai-noel',
        default => $nome,
    };

    $altura = match ($tamanho) {
        'sm' => 'h-24',
        'lg' => 'h-56',
        'xl' => 'h-72',
        default => 'h-40',
    };
@endphp
<img src="{{ asset("images/personagens/{$nome}/{$prefixo}-{$pose}.png") }}"
     alt=""
     {{ $attributes->merge(['class' => "$altura w-auto select-none"]) }}>
