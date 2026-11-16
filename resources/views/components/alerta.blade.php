{{-- Mensagem de sucesso ou erro com um personagem.
     Uso: <x-alerta tipo="sucesso">Ordem concluída!</x-alerta>
     Dica: combina com session('sucesso') / $errors, que ficam por sua conta. --}}
@props(['tipo' => 'sucesso'])
@php
    [$personagem, $pose, $cores] = match ($tipo) {
        'erro' => ['mamae-noel', 'tricotando', 'border-berry bg-berry/10 text-berry-dark'],
        default => ['duende', 'comemorando', 'border-holly bg-holly/10 text-holly-dark'],
    };
@endphp
<div {{ $attributes->merge(['class' => "mb-6 flex items-center gap-4 rounded-2xl border-2 bg-snow px-4 py-2 font-semibold $cores"]) }}>
    <x-personagem :nome="$personagem" :pose="$pose" tamanho="sm" class="-my-4 h-20" />
    <p>{{ $slot }}</p>
</div>
