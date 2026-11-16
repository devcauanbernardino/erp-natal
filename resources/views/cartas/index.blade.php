<x-layout title="Cartas">
    <x-slot:usuario>
        <x-usuario-menu personagem="mamae-noel" nome="Dona Noel" perfil="Mamãe Noel" />
    </x-slot:usuario>

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
                {{-- TODO (você): trocar estes exemplos por @forelse ($cartas as $carta) --}}
                {{-- Sugestão de cor por status: recebida = gold, em_analise = gold, aprovada = green, recusada = red --}}
                <tr class="border-b border-line">
                    <td class="p-3">Exemplo da Silva</td>
                    <td class="p-3">Carrinho de madeira</td>
                    <td class="p-3">2026</td>
                    <td class="p-3"><x-badge cor="green">Aprovada</x-badge></td>
                    <td class="p-3 text-right"><a href="#" class="font-medium text-holly hover:underline">ver</a></td>
                </tr>
                <tr class="border-b border-line">
                    <td class="p-3">Maria Souza</td>
                    <td class="p-3">Boneca de pano</td>
                    <td class="p-3">2026</td>
                    <td class="p-3"><x-badge cor="gold">Em análise</x-badge></td>
                    <td class="p-3 text-right"><a href="#" class="font-medium text-holly hover:underline">ver</a></td>
                </tr>
                <tr class="border-b border-line">
                    <td class="p-3">João Pereira</td>
                    <td class="p-3">Videogame</td>
                    <td class="p-3">2026</td>
                    <td class="p-3"><x-badge cor="red">Recusada</x-badge></td>
                    <td class="p-3 text-right"><a href="#" class="font-medium text-holly hover:underline">ver</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>
