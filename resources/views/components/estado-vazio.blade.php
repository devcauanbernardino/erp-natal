{{-- Quando uma lista não tem itens.
     Uso: <x-estado-vazio personagem="noel" pose="lendo-carta" titulo="Nenhuma carta ainda">texto <x-slot:acao>botão</x-slot:acao></x-estado-vazio> --}}
@props(['personagem', 'pose', 'titulo'])
<div {{ $attributes->merge(['class' => 'card flex flex-col items-center px-6 py-10 text-center']) }}>
    <x-personagem :nome="$personagem" :pose="$pose" tamanho="lg" class="mb-4" />
    <h2 class="mb-2 text-2xl">{{ $titulo }}</h2>
    <p class="max-w-sm text-muted">{{ $slot }}</p>

    @isset($acao)
        <div class="mt-6">{{ $acao }}</div>
    @endisset
</div>
