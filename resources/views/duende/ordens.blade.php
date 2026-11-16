<x-layout title="Minhas ordens">
    <x-slot:usuario>
        <x-usuario-menu personagem="duende" nome="Pimpão" perfil="Duende" />
    </x-slot:usuario>

    <x-hero imagem="duendes.png" titulo="Minhas ordens" subtitulo="Mãos à obra, duende!" foco="center 40%" />

    <div class="grid gap-6 md:grid-cols-2">
        {{-- TODO (você): @foreach ($ordens as $ordem) e botões com form/rota reais --}}
        <article class="card">
            <div class="mb-3 flex items-start justify-between gap-2">
                <h2 class="text-lg">Carrinho de madeira</h2>
                <x-badge cor="green">Fabricando</x-badge>
            </div>
            <p class="mb-4">Para: Exemplo da Silva (2026)</p>
            <button type="button" class="btn">Marcar como pronta</button>
        </article>

        <article class="card">
            <div class="mb-3 flex items-start justify-between gap-2">
                <h2 class="text-lg">Boneca de pano</h2>
                <x-badge cor="red">Na fila</x-badge>
            </div>
            <p class="mb-4">Para: Maria Souza (2026)</p>
            <button type="button" class="btn btn-alt">Pegar ordem</button>
        </article>
    </div>
</x-layout>
