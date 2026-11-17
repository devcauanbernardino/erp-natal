<x-layout title="Cartas">
    <x-hero imagem="cartas.png" titulo="Cartas" subtitulo="Os pedidos que chegaram ao Polo Norte" foco="center 55%">
        <a href="#" class="btn btn-alt">+ Nova carta</a>
    </x-hero>

    <div class="card overflow-x-auto">
        <table class="w-full text-left">
            <thead class="border-b border-line text-sm text-muted">
                <tr>
                    <th class="p-3">Criança</th>
                    <th class="p-3">Brinquedo</th>
                    <th class="p-3">Ano</th>
                    <th class="p-3">Status</th>
                    <th class="p-3"></th>
                </tr>
            </thead>
            <tbody>
                {{-- TODO (você): @forelse ($cartas as $carta) ... @empty ... @endforelse
                     Modelo de linha:
                     <tr class="border-b border-line">
                         <td class="p-3">criança</td> <td class="p-3">brinquedo</td> <td class="p-3">ano</td>
                         <td class="p-3"><x-badge cor="...">status</x-badge></td>
                         <td class="p-3 text-right"><a href="..." class="font-medium text-holly hover:underline">ver</a></td>
                     </tr>
                     Cor sugerida por status: recebida/em_analise = gold, aprovada = green, recusada = red
                     Para a lista vazia: <x-estado-vazio personagem="noel" pose="lendo-carta" titulo="Nenhuma carta ainda"> --}}
            </tbody>
        </table>
    </div>
</x-layout>
