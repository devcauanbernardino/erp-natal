<x-layout title="Minhas ordens">
    <x-hero imagem="duendes.png" titulo="Minhas ordens" subtitulo="Mãos à obra, duende!" foco="center 40%" />

    <div class="grid gap-6 md:grid-cols-2">
        {{-- TODO (você): @forelse ($ordens as $ordem) ... @empty ... @endforelse
             Modelo de card:
             <article class="card">
                 <div class="mb-3 flex items-start justify-between gap-2">
                     <h2 class="text-lg">brinquedo</h2>
                     <x-badge cor="...">status</x-badge>
                 </div>
                 <p class="mb-4">Para: criança (ano)</p>
                 <form method="POST" action="..."> @csrf <button class="btn">Marcar como pronta</button> </form>
             </article>
             Botões sugeridos: "Pegar ordem" (btn btn-alt) na fila, "Marcar como pronta" (btn) fabricando
             Para a lista vazia: <x-estado-vazio personagem="duende" pose="comemorando" titulo="Nenhuma ordem por aqui"> --}}
    </div>
</x-layout>
